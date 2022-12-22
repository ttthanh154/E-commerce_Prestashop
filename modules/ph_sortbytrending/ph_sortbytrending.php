<?php
/**
 * 2007-2022 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 * @author ETS-Soft <etssoft.jsc@gmail.com>
 * @copyright  2007-2022 ETS-Soft
 * @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

require_once dirname(__FILE__).'/classes/PhSbtDefine.php';
require_once dirname(__FILE__).'/classes/PhSbtTrending.php';

class Ph_sortbytrending extends Module
{
    public $is17;
    public function __construct()
    {
        $this->name = 'ph_sortbytrending';
        $this->author = 'ETS-Soft';
        $this->tab = 'front_office_features';
        $this->version = '1.1.3';
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Sort By Trending');
        $this->description = $this->l('Automatically sort products displayed on front office by trending grades based on sales, ratings, download or specific priority');
$this->refs = 'https://prestahero.com/';
        $this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
        $this->is17 = version_compare('1.7.0', _PS_VERSION_, '<=');
    }

    public function install()
    {
        return parent::install()

            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('displayFooterProduct')
            && $this->registerHook('displayAdminAfterHeader')
            && $this->registerHook('displayAdminProductsMainStepLeftColumnBottom')
            && $this->registerHook('actionProductSave')
            && PhSbtDefine::getInstance()->installDb()
            && $this->setDefaultConfig();
    }

    public function uninstall()
    {
        return parent::uninstall()
            && PhSbtDefine::getInstance()->uninstallDb()
            && $this->removeConfigs();
    }

    public function setDefaultConfig()
    {
        $phDef = PhSbtDefine::getInstance();
        foreach ($phDef->getFormFields() as $config){
            if(isset($config['default']) && $config['default']){
                Configuration::updateValue($config['name'], $config['default']);
            }
        }
        return true;
    }

    public function removeConfigs()
    {
        $phDef = PhSbtDefine::getInstance();
        foreach ($phDef->getFormFields() as $config){
            Configuration::deleteByName($config['name']);
        }
        return true;
    }

    public function getContent()
    {
        $this->actionAjax();
        $html = $this->saveConfigForm();
        return $html.$this->renderForm().$this->displayIframe();
    }

    public function renderForm()
    {
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitOptionPhSbtConfig';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $phDef = PhSbtDefine::getInstance();
        $configFields = $phDef->getFormFields();
        $fields_value = array();
        foreach ($configFields as $item) {
            $fields_value[$item['name']] = Tools::isSubmit('submitOptionPhSbtConfig') ? $this->getConfigData($item['name'], isset($item['lang']) && $item['lang']) : $this->getConfigData($item['name'], isset($item['lang']) && $item['lang'], true);
        }
        /* Check cornjob Time */

        $last_cronjob = Configuration::getGlobalValue('PH_SBT_CRONJOB_TIME');
        $hoursToAlert = 24;
        $secondsToAlert = $hoursToAlert * 3600;
        $overtime = $last_cronjob ? (time() - (strtotime($last_cronjob) + $secondsToAlert)) : 0;
        // $timeCompare = 24*3600;
        if ($last_cronjob/* && ($seconds = (time() - strtotime($last_cronjob))) <= $timeCompare*/) {
            $seconds = (time() - strtotime($last_cronjob));
            $dt1 = new DateTime("@0");
            $dt2 = new DateTime("@" . $seconds);
            if ($seconds > 3600)
                $format = $this->l('%h hours, %i minutes %s seconds');
            elseif ($seconds > 60)
                $format = $this->l('%i minutes %s seconds');
            else
                $format = $this->l('%s seconds');
            $last_cronjob = $dt1->diff($dt2)->format($format);
        }
        $helper->tpl_vars = array(
            'fields_value' => $fields_value,
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'cronjobPath' => '0 0 * * * '.(defined('PHP_BINDIR') && PHP_BINDIR && is_string(PHP_BINDIR) ? PHP_BINDIR.'/' : '').'php '._PS_MODULE_DIR_.$this->name.'/cronjob.php secure='.Configuration::get('PH_SBT_CRONJOB_TOKEN'),
            'cronjobTime' => $last_cronjob,
            'cronjobOverrideTime' => $overtime,
        );
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                ),
                'input' => array(),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submitOptionPhSbtConfig',
                    'class' => 'btn btn-default pull-right'
                )
            )
        );
        $fields_form['form']['input'] = $configFields;
        return $helper->generateForm(array($fields_form));
    }

    public function getConfigData($name, $multiLang = false, $inConfig = false)
    {
        if(!$multiLang){
            return $inConfig ? Configuration::get($name) : Tools::getValue($name);
        }
        $value = array();
        foreach (Language::getLanguages(false) as $lang){
            $value[$lang['id_lang']] = $inConfig ? Configuration::get($name, $lang['id_lang']) : Tools::getValue($name.'_'.$lang['id_lang']);
        }
        return $value;
    }

    public function saveConfigForm()
    {
        if(Tools::getValue('submitOptionPhSbtConfig')){
            $phDef = PhSbtDefine::getInstance();
            $configs = $phDef->getFormFields();
            $errors = array();
            foreach ($configs as $config){
                $value = Tools::getValue($config['name']);
                if(isset($config['required']) && $config['required'] && (!$value && (!is_array($value) && !Tools::strlen($value)))){
                    $errors[] = $config['message']['required'];
                }
                else if(Tools::strlen($value) && isset($config['validate']) && $config['validate'] && !Validate::{$config['validate']}($value)){
                    $errors[] = $config['message']['validate'];
                }
            }
            if($errors){
                return $this->displayError($errors);
            }
            unset($config);
            $languages = Language::getLanguages(false);
            foreach ($configs as $config){
                if(isset($config['lang']) && $config['lang']){
                    $value = array();
                    foreach ($languages as $lang){
                        $value[$lang['id_lang']] = Tools::getValue($config['name'].'_'.$lang['id_lang']);
                    }
                    Configuration::updateValue($config['name'], $value);
                }
                else{
                    $value = Tools::getValue($config['name']);
                    Configuration::updateValue($config['name'], is_array($value) ? implode(',', $value) : $value);
                }
            }
            return $this->displayConfirmation('Configuration updated successfully');
        }
        return '';
    }

    public function hookDisplayBackOfficeHeader()
    {
        if(isset($this->context->cookie->ph_sbt_priority_error) && $this->context->cookie->ph_sbt_priority_error) {
            $this->context->controller->confirmations = array();
            $this->context->controller->errors = array($this->context->cookie->ph_sbt_priority_error);
            $this->context->cookie->ph_sbt_priority_error = null;
        }
        $this->context->controller->addCSS($this->_path . 'views/css/admin.css');
        $this->smarty->assign(array(
            'linkAjaxBo' => $this->context->link->getAdminLink('AdminModules').'&configure='.$this->name,
            'linkJs' => $this->_path.'views/js/admin.js',
            'linkJsProduct16' => !$this->is17 && Tools::getValue('controller') == 'AdminProducts' && (Tools::getIsset('addproduct') || Tools::getIsset('updateproduct')) ? $this->_path.'views/js/admin_product16.js' : ''
        ));
        return $this->display(__FILE__, 'admin_head.tpl');
    }

    public function actionAjax()
    {
        if(Tools::isSubmit('phSbtRunSort')){
            if(PhSbtTrending::updateSortOrderProduct()){
                Configuration::updateGlobalValue('PH_SBT_CRONJOB_TIME', date('Y-m-d H:i:d'));
                die(Tools::jsonEncode(array(
                    'success' => true,
                    'message' => $this->l('Cronjob run successfully. Sort order is udpated!'),
                )));
            }
            die(Tools::jsonEncode(array(
                'success' => false,
                'message' => $this->l('Unknown errors occurred when ordering products'),
            )));
        }
    }

    public function hookDisplayAdminProductsMainStepLeftColumnBottom($params)
    {
        $this->smarty->assign(array(
            'priority' => PhSbtTrending::getPriorityProduct($params['id_product'])
        ));
        return $this->display(__FILE__, 'product_priority.tpl');
    }

    public function hookActionProductSave($params)
    {
        if(!isset($params['id_product']) || !(int)$params['id_product']){
            return;
        }

        if(($sbtData = Tools::getValue('ets_sbt')) && isset($sbtData['priority'])){
            $p = trim($sbtData['priority']);
            if($p && Tools::strlen($p)){
                if(!Validate::isFloat($p)){
                    if($this->is17){
                        http_response_code(400);
                        die(Tools::jsonEncode(array(
                            'error' => array($this->l('The priority number is invalid'))
                        )));
                    }
                    else{
                        $this->context->cookie->ph_sbt_priority_error = $this->l('The priority number is invalid');
                        Tools::redirectAdmin($this->context->link->getAdminLink('AdminProducts').'&updateproduct&key_tab=Informations&id_product='.(int)$params['id_product']);
                    }
                }
            }

            PhSbtTrending::updatePriorityProduct($params['id_product'], $p ? (float)$p : null);
        }
    }

    public function hookDisplayAdminAfterHeader()
    {
        if($this->is17){
            return;
        }
        $this->smarty->assign(array(
            'priority' => ($idProduct = Tools::getValue('id_product')) ? PhSbtTrending::getPriorityProduct($idProduct) : '',
        ));
        return $this->display(__FILE__, 'product_priority16.tpl');
    }

    public function displayIframe()
    {
        switch($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__,'iframe.tpl');
    }

}