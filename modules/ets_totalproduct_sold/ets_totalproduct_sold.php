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

if (!defined('_PS_VERSION_'))
    exit;
require_once(dirname(__FILE__) . '/classes/ets_tps_defines.php');
class Ets_totalproduct_sold extends Module
{
    public $_errors = array();
    public $is17 = false;
    public $hooks = array(
        'displayBackOfficeHeader',
        'displayHeader',
        'displayAdminProductsExtra',
        'actionProductSave',
        'displayProductListReviews',
        'displayProductPriceBlock'
    );
    public $_html='';
    public function __construct()
    {
        $this->name = 'ets_totalproduct_sold';
        $this->tab = 'front_office_features';
        $this->version = '1.0.4';
        $this->author = 'ETS-Soft';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        parent::__construct();
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->module_dir = $this->_path;
        $this->displayName = $this->l('Total Product Sold');
        $this->description = $this->l('Display the number of total sold items for each product on the product detail page and product listing page.');
$this->refs = 'https://prestahero.com/';
        $this->module_key = '6f02499c023453b04b674cfe6cf5502f';
		if(version_compare(_PS_VERSION_, '1.7', '>='))
            $this->is17 = true;
    }
    public function install()
    {
        return parent::install() && $this->_installHooks() && $this->_installDefaultConfig() && $this->installDb();
    }
    public function unInstall()
    {
        return parent::unInstall() && $this->_unInstallHooks()&& $this->_unInstallDefaultConfig() && $this->unInstallDb();
    }
    public function installDb()
    {
        return Ets_tps_defines:: installDb();
    }
    public function unInstallDb()
    {
        return Ets_tps_defines::unInstallDb();
    }
    public function getTextLang($text, $lang,$file_name='')
    {
        if(is_array($lang))
            $iso_code = $lang['iso_code'];
        elseif(is_object($lang))
            $iso_code = $lang->iso_code;
        else
        {
            $language = new Language($lang);
            $iso_code = $language->iso_code;
        }
		$modulePath = rtrim(_PS_MODULE_DIR_, '/').'/'.$this->name;
        $fileTransDir = $modulePath.'/translations/'.$iso_code.'.'.'php';
        if(!@file_exists($fileTransDir)){
            return $text;
        }
        $fileContent = Tools::file_get_contents($fileTransDir);
        $text_tras = preg_replace("/\\\*'/", "\'", $text);
        $strMd5 = md5($text_tras);
        $keyMd5 = '<{' . $this->name . '}prestashop>' . ($file_name ? : $this->name) . '_' . $strMd5;
        preg_match('/(\$_MODULE\[\'' . preg_quote($keyMd5) . '\'\]\s*=\s*\')(.*)(\';)/', $fileContent, $matches);
        if($matches && isset($matches[2])){
           return  $matches[2];
        }
        return $text;
    }
    public function _installDefaultConfig()
    {
        $inputs = $this->getConfigInputs();
        $languages = Language::getLanguages(false);
        if($inputs)
        {
            foreach($inputs as $input)
            {
                if(isset($input['default']) && $input['default'])
                {
                    if(isset($input['lang']) && $input['lang'])
                    {
                        $values = array();
                        foreach($languages as $language)
                        {
                            $values[$language['id_lang']] = isset($input['default_lang']) && $input['default_lang'] ? $this->getTextLang($input['default_lang'],$language) : $input['default'];
                        }
                        Configuration::updateGlobalValue($input['name'],$values);
                    }
                    else
                        Configuration::updateGlobalValue($input['name'],is_array($input['default']) ? implode(',',$input['default']):$input['default']);
                }
            }
        }
        return true;
    }
    public function _unInstallDefaultConfig()
    {
        $inputs = $this->getConfigInputs();
        if($inputs)
        {
            foreach($inputs as $input)
            {
                Configuration::deleteByName($input['name']);
            }
        }
        return true; 
    }
    public function _installHooks()
    {
        foreach($this->hooks as $hook)
        {
            $this->registerHook($hook);
        }
        return true;
    }
    public function _unInstallHooks()
    {
        foreach($this->hooks as $hook)
        {
            $this->unRegisterHook($hook);
        }
        return true;
    }
    public static function validateArray($array,$validate='isCleanHtml')
    {
        if(!is_array($array))
            return true;
        if(method_exists('Validate',$validate))
        {
            if($array && is_array($array))
            {
                $ok= true;
                foreach($array as $val)
                {
                    if(!is_array($val))
                    {
                        if($val && !Validate::$validate($val))
                        {
                            $ok= false;
                            break;
                        }
                    }
                    else
                        $ok = self::validateArray($val,$validate);
                }
                return $ok;
            }
        }
        return true;
    }
    public function getConfigInputs()
    {
        return array(
            array(
                'name'=> 'ETS_TPS_LABEL',
                'label'=> $this->l('Total product sold label'),
                'lang'=> true,
                'type'=> 'text', 
                'validate' => 'isCleanHtml',  
                'default'=> $this->l('Sold'),
                'default_lang'=> 'Sold',
            ), 
            array(
                'name'=> 'ETS_TPS_DISPlAY_PAGE',
                'label'=> $this->l('Display total product sold on'),
                'type'=> 'checkbox', 
                'select_all'=> false,
                'values' => array(
                    'query' => array(
                        array(
                            'id'=> 'product_page',
                            'name'=> $this->l('The product detail page'),
                        ),
                        array(
                            'id'=> 'product_list',
                            'name'=> $this->l('The product listing page'),
                        )
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ), 
                'default'=>'product_page,product_list'
            ),   
            array(
                'type'=> 'text',
                'label' => $this->l('Set the initial total product sold for your product'),
                'name' => 'ETS_TPS_START_COUNTING_TOTAL_PRODUCT',
                'validate'=> 'isUnsignedInt',
                'desc'=>$this->l('For example, if you enter "2" , the total product sold displayed on the front office will be counted as "2 + the actual total product sold". Leave this field blank to show the actual sold quantity of the product.'),
            ), 
            array(
                'name'=> 'ETS_TPS_COUNT_PRODUCT_ORDER_STATUS',
                'type' => 'checkbox',
                'label' => $this->l('Count a product as sold when order status is'),
                'values' => array(
                    'query' => Ets_tps_defines::getOrderStates(),
                    'id' => 'id_order_state',
                    'name' => 'name'
                ),
                'default' => Ets_tps_defines::getOrderStatesPaid(),
            ),
            array(
                'type'=> 'text',
                'label' => $this->l('Sold factor when ONE product item is successfully sold'),
                'name' => 'ETS_TPS_CAL_FACTOR',
                'validate'=> 'isUnsignedInt',
                'default'=>1,
                'required'=> true,
                'desc'=> $this->l('Enter an integer such as 1, 3, 5, 10, etc. to be the calculated value when 1 item of the product is sold. For example, if you enter "5", when there are 2 items sold, the total product sold displayed on the front end will be "10" items.'),
            ),    
            array(
                'type'=>'switch',
                'label'=>$this->l('Enable'),
                'name'=>'ETS_TPS_ENABLED',
                'values' => array(
                    array(
                        'label' => $this->l('Yes'),
                        'id' => 'active_on',
                        'value' => 1,
                    ),
                    array(
                        'label' => $this->l('No'),
                        'id' => 'active_off',
                        'value' => 0,
                    )
                ),
                'default'=>1,
            )
        );
    }
    public function _saveConfig()
    {
        $this->_postValidation();
        if (!count($this->_errors)) {
            $inputs = $this->getConfigInputs();
            $languages = Language::getLanguages(false);
            $id_lang_default = Configuration::get('PS_LANG_DEFAULT');
            foreach($inputs as $input)
            {
                if(isset($input['lang']) && $input['lang'])
                {
                    $values = array();
                    foreach($languages as $language)
                    {
                        $value_default = Tools::getValue($input['name'].'_'.$id_lang_default);
                        $value = Tools::getValue($input['name'].'_'.$language['id_lang']);
                        $values[$language['id_lang']] = ($value && Validate::isCleanHtml($value)) || !isset($input['required']) ? $value : (Validate::isCleanHtml($value_default) ? $value_default :'');
                    }
                    Configuration::updateValue($input['name'],$values);
                }
                else
                {
                    $val = Tools::getValue($input['name']);
                    if($input['type']=='checkbox')
                    {
                        if($val && self::validateArray($val))
                            Configuration::updateValue($input['name'],implode(',',$val));
                        else
                            Configuration::updateValue($input['name'],'');
                    }    
                    else
                    {
                        if(Validate::isCleanHtml($val))
                            Configuration::updateValue($input['name'],$val);
                    }
                }
            }
            $this->_html .= $this->displayConfirmation($this->l('Settings updated'));
        } else {
            $this->_html .= $this->displayError($this->_errors);
        }
    }
    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => ''
                ),
                'input' => $this->getConfigInputs(),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->id = $this->id;
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $language->id;
        $helper->override_folder ='/';
        $helper->tpl_vars = array(
            'base_url' => $this->context->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
            'PS_ALLOW_ACCENTED_CHARS_URL', (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL'),
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id,
            'link' => $this->context->link,
        );
        $this->fields_form = array();
        return $helper->generateForm(array($fields_form));
    }
    public function getConfigFieldsValues()
    {
        $languages = Language::getLanguages(false);
        $fields = array();
        $inputs = $this->getConfigInputs();
        if($inputs)
        {
            foreach($inputs as $input)
            {
                if(!isset($input['lang']))
                {
                    if($input['type']=='checkbox')
                        $fields[$input['name']] = Tools::getValue($input['name'],Configuration::get($input['name']) ? explode(',',Configuration::get($input['name'])):array() );
                    else
                        $fields[$input['name']] = Tools::getValue($input['name'],Configuration::get($input['name']));
                }
                else
                {
                    foreach($languages as $language)
                    {
                        $fields[$input['name']][$language['id_lang']] = Tools::getValue($input['name'].'_'.$language['id_lang'],Configuration::get($input['name'],$language['id_lang']));
                    }
                }
            }
        }
        return $fields;
    }
    public function _postValidation()
    {
        $languages = Language::getLanguages(false);
        $inputs = $this->getConfigInputs();
        $id_lang_default = Configuration::get('PS_LANG_DEFAULT');
        foreach($inputs as $input)
        {
            if(isset($input['lang']) && $input['lang'])
            {
                if(isset($input['required']) && $input['required'])
                {
                    $val_default = Tools::getValue($input['name'].'_'.$id_lang_default);
                    if(!$val_default)
                    {
                        $this->_errors[] = sprintf($this->l('%s is required'),$input['label']);
                    }
                    elseif($val_default && isset($input['validate']) && ($validate = $input['validate']) && method_exists('Validate',$validate) && !Validate::{$validate}($val_default))
                        $this->_errors[] = sprintf($this->l('%s is not valid'),$input['label']);
                    elseif($val_default && !Validate::isCleanHtml($val_default))
                        $this->_errors[] = sprintf($this->l('%s is not valid'),$input['label']);
                    else
                    {
                        foreach($languages as $language)
                        {
                            if(($value = Tools::getValue($input['name'].'_'.$language['id_lang'])) && isset($input['validate']) && ($validate = $input['validate']) && method_exists('Validate',$validate)  && !Validate::{$validate}($value))
                                $this->_errors[] = sprintf($this->l('%s is not valid in %s'),$input['label'],$language['iso_code']);
                            elseif($value && !Validate::isCleanHtml($value))
                                $this->_errors[] = sprintf($this->l('%s is not valid in %s'),$input['label'],$language['iso_code']);
                        }
                    }
                }
                else
                {
                    foreach($languages as $language)
                    {
                        if(($value = Tools::getValue($input['name'].'_'.$language['id_lang'])) && isset($input['validate']) && ($validate = $input['validate']) && method_exists('Validate',$validate)  && !Validate::{$validate}($value))
                            $this->_errors[] = sprintf($this->l('%s is not valid in %s'),$input['label'],$language['iso_code']);
                        elseif($value && !Validate::isCleanHtml($value))
                            $this->_errors[] = sprintf($this->l('%s is not valid in %s'),$input['label'],$language['iso_code']);
                    }
                }
            }
            else
            {
                $val = Tools::getValue($input['name']);
                if($input['type']!='checkbox')
                {
                    if($val===''&& isset($input['required']))
                    {
                        $this->_errors[] = sprintf($this->l('%s is required'),$input['label']);
                    }
                    if($val!=='' && isset($input['validate']) && ($validate = $input['validate']) && method_exists('Validate',$validate) && !Validate::{$validate}($val))
                    {
                        $this->_errors[] = sprintf($this->l('%s is not valid'),$input['label']);
                    }
                    elseif($val!==''&& !Validate::isCleanHtml($val))
                        $this->_errors[] = sprintf($this->l('%s is not valid'),$input['label']);
                    elseif($val!=='' && isset($input['validate'])&& $input['validate']=='isUnsignedInt' && $val<=0)
                        $this->_errors[] = sprintf($this->l('%s is not valid'),$input['label']);
                    
                }
                else
                {
                    if(!$val& isset($input['required']))
                    {
                        $this->_errors[] = sprintf($this->l('%s is required'),$input['label']);
                    }
                    elseif($val && !self::validateArray($val))
                         $this->_errors[] = sprintf($this->l('%s is not valid'),$input['label']);
                }
                
            }
        }
    }
    public function addJquery()
    {
        if (version_compare(_PS_VERSION_, '1.7.6.0', '>=') && version_compare(_PS_VERSION_, '1.7.7.0', '<'))
            $this->context->controller->addJS(_PS_JS_DIR_ . 'jquery/jquery-'._PS_JQUERY_VERSION_.'.min.js');
        else
            $this->context->controller->addJquery();
    }
    public function hookDisplayBackOfficeHeader()
    {
        $controller = Tools::getValue('controller');
        $configure = Tools::getValue('configure'); 
        if(($controller=='AdminModules' && $configure== $this->name) || $controller=='AdminProducts' || $controller=='adminproducts')
        {
            $this->context->controller->addCSS($this->_path.'views/css/admin.css');
            $this->addJquery();
            $this->context->controller->addJS($this->_path.'views/js/admin.js');
        }
    }
    public function hookDisplayHeader()
    {
            $this->context->controller->addCSS($this->_path . 'views/css/front.css', 'all');
            $this->context->controller->addJS($this->_path . 'views/js/front.js');
    }
    public function getContent()
    {
        if(Tools::isSubmit('btnSubmit'))
            $this->_saveConfig();
        $this->_html.=$this->renderForm();
        $this->_html .= $this->displayIframe();
        return $this->_html;
    }
    public function hookDisplayAdminProductsExtra($params)
    {
        if(isset($params['id_product']) && ($id_product = (int)$params['id_product']))
        {
            $specific_product = Ets_tps_defines::specificProduct($id_product);
            $this->smarty->assign(
                array(
                    'specific_product' => $specific_product,
                )
            );
            return $this->display(__FILE__,'form_specific.tpl');
        }
    }
    public function hookActionProductSave($params)
    {
        if(isset($params['id_product']) && $params['id_product'])
        {
            $errors = array();
            $use_specific = (int)Tools::getValue('ets_tps_use_specific');
            $start_counting_total = Tools::getValue('ets_tps_start_counting_total');
            $cal_factor = Tools::getValue('ets_tps_cal_factor');
            if($use_specific)
            {
                if($start_counting_total!='' && (!Validate::isUnsignedInt($start_counting_total) || $start_counting_total<=0 ))
                    $errors[] = $this->l('Set the initial total product sold for your product is not valid');
                if($cal_factor=='')
                    $errors[] = $this->l('Sold factor when ONE product item is successfully sold is required');
                elseif($cal_factor!='' && (!Validate::isUnsignedInt($cal_factor) || $cal_factor<=0 ))
                    $errors[] = $this->l('Sold factor when ONE product item is successfully sold is not valid');
            }
            if(!$errors)
            {
                if(Ets_tps_defines::specificProduct($params['id_product']))
                    Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'ets_tps_product` SET use_specific="'.(int)$use_specific.'",start_counting_total="'.(int)$start_counting_total.'",cal_factor="'.(int)$cal_factor.'" WHERE id_product='.(int)$params['id_product']);
                else
                    Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'ets_tps_product` (id_product,use_specific,start_counting_total,cal_factor) VALUES("'.(int)$params['id_product'].'","'.(int)$use_specific.'","'.(int)$start_counting_total.'","'.(int)$cal_factor.'")');
            }
            elseif($errors)
            {
                http_response_code(422);
                die(Tools::jsonEncode(array(
                    'error' => $errors
                )));
            }
        }
    }
    public function hookDisplayProductListReviews($params)
    {
        if(Configuration::get('ETS_TPS_ENABLED'))
        {
            $ETS_TPS_DISPlAY_PAGE = Configuration::get('ETS_TPS_DISPlAY_PAGE') ? explode(',',Configuration::get('ETS_TPS_DISPlAY_PAGE')):array();
            if($ETS_TPS_DISPlAY_PAGE && in_array('product_list',$ETS_TPS_DISPlAY_PAGE))
            {
                if(isset($params['product']) && ($product = $params['product']) && isset($product['id_product']))
                {
                    return $this->displaySoldProduct($product['id_product']);
                } 
            }
        }
        
    }
    public function hookDisplayProductPriceBlock($params)
    {
        $controller = Tools::getValue('controller');
        if($controller=='product' && isset($params['type']) && $params['type']=='weight' && isset($params['hook_origin']) && $params['hook_origin']=='product_sheet' && isset($params['product']) && ($product= $params['product']))
        {
            if(Configuration::get('ETS_TPS_ENABLED'))
            {
                $ETS_TPS_DISPlAY_PAGE = Configuration::get('ETS_TPS_DISPlAY_PAGE') ? explode(',',Configuration::get('ETS_TPS_DISPlAY_PAGE')):array();
                if($ETS_TPS_DISPlAY_PAGE && in_array('product_page',$ETS_TPS_DISPlAY_PAGE))
                {
                    return $this->displaySoldProduct($product['id_product']);
                }
            }
        }
        
    }
    public function displaySoldProduct($id_product)
    {
        $totalProduct = Ets_tps_defines::getTotalProductPaid($id_product);
        if(($specific = Ets_tps_defines::specificProduct($id_product)) && $specific['use_specific'])
        {
            if($specific['cal_factor'])
                $totalProduct *= $specific['cal_factor'];
            if($specific['start_counting_total'])
                $totalProduct += (int)$specific['start_counting_total'];
        }
        else
        {
            if($cal_factor = Configuration::get('ETS_TPS_CAL_FACTOR'))
                $totalProduct *= $cal_factor;
            if($start_counting_total = (int)Configuration::get('ETS_TPS_START_COUNTING_TOTAL_PRODUCT'))
                $totalProduct += $start_counting_total;
        }
        if($totalProduct >0)
        {
            $this->smarty->assign(
                array(
                    'tps_total_product'=>$totalProduct,
                    'ETS_TPS_LABEL' => Configuration::get('ETS_TPS_LABEL',$this->context->language->id),
                )
            );
            return $this->display(__FILE__,'sold.tpl');
        }
        
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