<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Google_adsense_free extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'google_adsense_free';
        $this->tab = 'administration';
        $this->version = '1.0.2';
        $this->author = 'MackStores.com';
        $this->need_instance = 1;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Google Adsense free');
        $this->description = $this->l('You can display google ads or any html code in your shop');

        $this->confirmUninstall = $this->l('Are You Sure You Want To Uninstall The Module');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    
    public function install()
    {
        Configuration::updateValue('D_HEADER', false);
        Configuration::updateValue('D_ADSENSE_CODE_FREE', '');
        return parent::install() &&
            $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        Configuration::deleteByName('D_HEADER');
        Configuration::deleteByName('D_ADSENSE_CODE_FREE');

        return parent::uninstall();
    }

   
    public function getContent()
    {

        if (((bool)Tools::isSubmit('submitTemplateModule')) == true) {
            
            $this->postProcess();
        }
       $this->context->smarty->assign('logo_path_ms', $this->_path.'logo.png');
        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$this->renderForm();
    }

 
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitTemplateModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'cols' => 5,
                        'rows' => 7,
                        'type' => 'textarea',
                        'desc' => $this->l('Enter Your Google Code Here..'),
                        'name' => 'D_ADSENSE_CODE_FREE',
                        'label' => $this->l('Google Adsense Code'),
                        'hint' => $this->l('Paste the Google Adsense code you created here. If you just created a code on google adsense its wise to wait for sometime for the advertisment to show up. It is also wise to type  TEST instead of the google adsese code for the first time, to check if the module is working  or not. The word TEST will show up on header if you enable header. Once test is done then you can paste the Google Adense code here.'),
                        'required' => true
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Header'),
                        'hint' => $this->l('Show Google Adsense on extreme top of the header. This is the extreme top of the webpage of your shop'),
                        'name' => 'D_HEADER',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    
                 
                    
                    array(
                        'col' => 9,
                        'type' => 'html',
                        'name' => 'pro_mode',
                        'desc' => $this->l('To get additional features please buy the pro mode.'),
                        'html_content' => '<div style="border: 2px solid black!important"><img src="'.$this->_path.'views/img/google_adsense_pro.jpg" " alt="" width="100%"></div><strong><a style="font-size: 16px;" href="https://website.mackstores.com">Buy Google Adsense Pro to enable the disabled functions</a><br /></strong>',
                        'label' => $this->l('Pro Mode features.'),
                    ),
                   
                    
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }
    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'D_HEADER' => Configuration::get('D_HEADER', false),
            'D_TOP' => Configuration::get('D_TOP', false),
            'D_LEFTCOLUMN' => Configuration::get('D_LEFTCOLUMN', false),
            'D_RIGHTCOLUMN' => Configuration::get('D_RIGHTCOLUMN', false),
            'D_FOOTER' => Configuration::get('D_FOOTER', false),
            'D_ADSENSE_CODE_FREE' => Configuration::get('D_ADSENSE_CODE_FREE', false),
            'D_APPEND_ID_CLASS' => Configuration::get('D_APPEND_ID_CLASS', false),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key), True);
        }
    }

 
    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
        if (configuration::get('D_HEADER')== TRUE)
        {
            $this->context->smarty->assign('D_ADSENSE_CODE_FREE', Configuration::get('D_ADSENSE_CODE_FREE'));
            
        }
        return $this->display(__FILE__, 'google_adsense_free.tpl');
    }

    
}
