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

class Ets_tps_defines
{
    public static $instance;
    public function __construct()
    {
        $this->context = Context::getContext();
        if (is_object($this->context->smarty)) {
            $this->smarty = $this->context->smarty;
        }
    }
    public static function getInstance()
    {
        if (!(isset(self::$instance)) || !self::$instance) {
            self::$instance = new Ets_tps_defines();
        }
        return self::$instance;
    }
    public static function installDb()
    {
        $res = Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_tps_product` ( 
        `id_product` INT(11) NOT NULL , 
        `use_specific` INT(1) NOT NULL , 
        `start_counting_total` INT(11) NOT NULL , 
        `cal_factor` INT(11) NOT NULL , PRIMARY KEY (`id_product`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci');
        return $res;
    }
    public static function unInstallDb()
    {
        $tables = array(
            'ets_tps_product'
        );
        if($tables)
        {
            foreach($tables as $table)
               Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . pSQL($table).'`'); 
        }
        return true;
    }
    public static function getOrderStates()
    {
        $context = Context::getContext();
        $sql ='SELECT os.id_order_state,osl.name FROM `'._DB_PREFIX_.'order_state` os 
        LEFT JOIN `'._DB_PREFIX_.'order_state_lang` osl ON (os.id_order_state = osl.id_order_state AND osl.id_lang="'.(int)$context->language->id.'")
        ';
        return Db::getInstance()->executeS($sql);
    }
    public static function getOrderStatesPaid()
    {
        $sql ='SELECT id_order_state FROM `'._DB_PREFIX_.'order_state` WHERE paid=1';
        $states = Db::getInstance()->executeS($sql);
        $result = array();
        if($states)
        {
            foreach($states as $state)
            {
                $result[] = $state['id_order_state'];
            } 
        }
        return $result;
    }
    public static function specificProduct($id_product)
    {
        return Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'ets_tps_product` WHERE id_product='.(int)$id_product);
    }
    public static function getTotalProductPaid($idProduct)
    {
        $status = Configuration::get('ETS_TPS_COUNT_PRODUCT_ORDER_STATUS');
        $sql = 'SELECT SUM(product_quantity) FROM `'._DB_PREFIX_.'order_detail` od
        INNER JOIN `'._DB_PREFIX_.'orders` o ON (o.id_order=od.id_order)
        WHERE od.product_id="'.(int)$idProduct.'"'.($status ? ' AND o.current_state IN ('.implode(',',array_map('intval',explode(',',$status))).')':'');
        return Db::getInstance()->getValue($sql);
    }
}