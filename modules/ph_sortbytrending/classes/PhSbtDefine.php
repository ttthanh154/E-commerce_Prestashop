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

class PhSbtDefine
{
    public $context;
    public $module;
    public static $instance = null;

    public function __construct($module = null)
    {
        if (!(is_object($module)) || !$module) {
            $module = Module::getInstanceByName('ph_sortbytrending');
        }
        $this->module = $module;
        $context = Context::getContext();
        $this->context = $context;
    }

    public function l($string)
    {
        return Translate::getModuleTranslation('ph_sortbytrending', $string, pathinfo(__FILE__, PATHINFO_FILENAME));
    }


    public function display($template)
    {
        if (!$this->module)
            return;
        return $this->module->display($this->module->getLocalPath(), $template);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PhSbtDefine();
        }
        return self::$instance;
    }

    public function getFormFields()
    {
        return array(
            'PH_SBT_NB_DAY_TREDING' => array(
                'name' => 'PH_SBT_NB_DAY_TREDING',
                'label' => $this->l('Trending period'),
                'suffix' => $this->l('day(s)'),
                'type' => 'text',
                'validate' => 'isUnsignedInt',
                'col' => 3,
                'default' => 30,
                'message' => array(
                    'validate' => $this->l('Trending period must be an integer'),
                ),
                'desc' => $this->l('The period of time that sales, ratings or downloads are considered to calculate sort order. Leave blank will take all the time.')
            ),
            'PH_SBT_PRIORITY_NB_ORDER' => array(
                'name' => 'PH_SBT_PRIORITY_NB_ORDER',
                'label' => $this->l('Sale factor'),
                'type' => 'text',
                'validate' => 'isFloat',
                'col' => 3,
                'default' => 4,
                'message' => array(
                    'validate' => $this->l('Sale factor must be a float number'),
                ),
                'desc' => $this->l('Leave blank to ignore sales when calculating sort order'),
            ),
            'PH_SBT_PRIORITY_NB_RATING' => array(
                'name' => 'PH_SBT_PRIORITY_NB_RATING',
                'label' => $this->l('Rating factor'),
                'type' => 'text',
                'validate' => 'isFloat',
                'col' => 3,
                'default' => 3,
                'message' => array(
                    'validate' => $this->l('Rating factor must be a float number'),
                ),
                'desc' => $this->l('Leave blank to ignore ratings when calculating sort order'),
            ),
            'PH_SBT_PRIORITY_NB_DOWNLOAD' => array(
                'name' => 'PH_SBT_PRIORITY_NB_DOWNLOAD',
                'label' => $this->l('Download factor'),
                'type' => 'text',
                'validate' => 'isFloat',
                'col' => 3,
                'default' => 1,
                'message' => array(
                    'validate' => $this->l('Download factor must be a float number'),
                ),
                'desc' => $this->l('Leave blank to ignore downloads when calculating sort order'),
            ),
            'PH_SBT_IGNORE_SALE_FACTOR_FREE_PRODUCT' => array(
                'name' => 'PH_SBT_IGNORE_SALE_FACTOR_FREE_PRODUCT',
                'label' => $this->l('Ignore sale factor for free products'),
                'type' => 'switch',
                'validate' => 'isInt',
                'values' => array(
                    array(
                        'label' => $this->l('Yes'),
                        'value' => 1,
                        'id' => 'PH_SBT_IGNORE_SALE_FACTOR_FREE_PRODUCT_1',
                    ),
                    array(
                        'label' => $this->l('No'),
                        'value' => 0,
                        'id' => 'PH_SBT_IGNORE_SALE_FACTOR_FREE_PRODUCT_0',
                    )
                ),
                'col' => 3,
                'default' => 1,
                'message' => array(
                    'validate' => $this->l('Ignore sale factor for free products must be a integer number'),
                ),
                'desc' => '',
            ),
            'PH_SBT_PRIORITY' => array(
                'name' => 'PH_SBT_PRIORITY',
                'label' => $this->l('Priority factor'),
                'type' => 'text',
                'validate' => 'isFloat',
                'col' => 3,
                'default' => 1,
                'message' => array(
                    'validate' => $this->l('Priority factor must be a float number'),
                ),
                'desc' => $this->l('Leave blank to ignore priority (particularly set for each product) when calculating sort order'),
            ),
            'PH_SBT_CRONJOB_TOKEN' => array(
                'name' => 'PH_SBT_CRONJOB_TOKEN',
                'label' => $this->l('Cronjob secure token'),
                'type' => 'text',
                'required' => true,
                'validate' => 'isString',
                'col' => 6,
                'default' => md5('ph_sortbytrending'.rand(0, 999999)),
                'message' => array(
                    'required' => $this->l('Cronjob secure token'),
                    'validate' => $this->l('Cronjob secure token'),
                ),
            ),
        );
    }

    public function installDb()
    {
        $tblPosition = "CREATE TABLE IF NOT EXISTS `" . _DB_PREFIX_ . "ph_sbt_product_position` (
            `id_product` INT(10) UNSIGNED NOT NULL,
            `position` INT(10) UNSIGNED DEFAULT 0,
            `priority` DECIMAL(4,2) DEFAULT NULL,
            PRIMARY KEY (`id_product`),
            INDEX (`position`)
        ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=UTF8";
        return Db::getInstance()->execute($tblPosition);
    }

    public function uninstallDb()
    {
        return Db::getInstance()->execute("DROP TABLE IF EXISTS `" . _DB_PREFIX_ . "ph_sbt_product_position`");
    }
}