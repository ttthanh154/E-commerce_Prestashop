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

class PhSbtTrending
{
    public static function updateSortOrderProduct()
    {
        $products = Db::getInstance()->executeS(self::buildSqlTrending());
        if(!$products){
            return false;
        }

        $categoryProducts = Db::getInstance()->executeS("SELECT * FROM `"._DB_PREFIX_."category_product` ORDER BY id_category ASC");
        if(!$categoryProducts){
            return false;
        }
        foreach ($products as $k=>$product){
            if(Db::getInstance()->getValue("SELECT `id_product` FROM `"._DB_PREFIX_."ph_sbt_product_position` WHERE id_product=".(int)$product['id_product'])){
                Db::getInstance()->execute("UPDATE `"._DB_PREFIX_."ph_sbt_product_position` SET `position`=".($k+1)." WHERE id_product=".(int)$product['id_product']);
            }
            else{
                Db::getInstance()->execute("INSERT INTO `"._DB_PREFIX_."ph_sbt_product_position` (`id_product`, `position`) VALUES(".(int)$product['id_product'].", ".($k+1).")");
            }
            foreach ($categoryProducts as $cp){
                if($cp['id_product'] == $product['id_product']){
                    $position = $k+1;
                    Db::getInstance()->execute("UPDATE `"._DB_PREFIX_."category_product` SET `position`=".(int)$position." 
                                                        WHERE `id_category`=".(int)$cp['id_category']." AND `id_product`=".(int)$cp['id_product']);
                }
            }
        }
        return true;
    }

    public static function buildSqlTrending()
    {
        $timeTrendingLimit = (float)Configuration::get('PH_SBT_NB_DAY_TREDING');
        $select = "";
        $select2 = "";
        $join = "";
        $extraDownload = "";
        $extraDownload2 = "";
        if(Module::isEnabled('ets_productcomments')){
            $select .= " + (COALESCE(epc.total_rating, 0) * ".(float)Configuration::get('PH_SBT_PRIORITY_NB_RATING').")";
            if($timeTrendingLimit)
                $select2 .= " + (COALESCE(epc.total_rating2, 0) * ".(float)Configuration::get('PH_SBT_PRIORITY_NB_RATING').")";
            $join .=" LEFT JOIN (
                    SELECT
                        id_product,
                        ".($timeTrendingLimit ? "SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - 30 DAY), grade, 0)) * (SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - 30 DAY), grade, 0)) / SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - 30 DAY), 1, 0))) / 5 AS total_rating2," : "")."
                        SUM(grade)* AVG(grade) / 5 AS total_rating
                        
                    FROM
                        `"._DB_PREFIX_."ets_pc_product_comment`
                        WHERE `deleted`=0 AND `validate`=1 AND `question`=0
                        GROUP BY id_product
                ) epc ON p.id_product = epc.id_product";
        }
        elseif(Module::isEnabled('ets_reviews')){
            $select .= " + (COALESCE(epc.total_rating, 0) * ".(float)Configuration::get('PH_SBT_PRIORITY_NB_RATING').")";
            if($timeTrendingLimit)
                $select2 .= " + (COALESCE(epc.total_rating2, 0) * ".(float)Configuration::get('PH_SBT_PRIORITY_NB_RATING').")";
            $join .=" LEFT JOIN (
                    SELECT
                        id_product,
                        ".($timeTrendingLimit ? "SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - ".(float)$timeTrendingLimit." DAY), grade, 0)) * (SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - ".(float)$timeTrendingLimit." DAY), grade, 0)) / SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - ".(float)$timeTrendingLimit." DAY), 1, 0))) / 5 AS total_rating2," : "")."
                        SUM(grade)* AVG(grade) / 5 AS total_rating
                        
                    FROM
                        `"._DB_PREFIX_."ets_rv_product_comment`
                        WHERE `deleted`=0 AND ".((int)Configuration::get('ETS_RV_MODERATE') ? '`validate`=1':' `validate`!=2')."  AND `question`=0
                        GROUP BY id_product
                ) epc ON p.id_product = epc.id_product";
        }
        elseif(Module::isEnabled('productcomments')){
            $select .= " + (COALESCE(epc.total_rating, 0) * ".(float)Configuration::get('PH_SBT_PRIORITY_NB_RATING').")";
            if($timeTrendingLimit)
                $select2 .= " + (COALESCE(epc.total_rating2, 0) * ".(float)Configuration::get('PH_SBT_PRIORITY_NB_RATING').")";
            $join .=" LEFT JOIN (
                    SELECT
                        id_product,
                        ".($timeTrendingLimit ? "SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - 30 DAY), grade, 0)) * (SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - 30 DAY), grade, 0)) / SUM(IF(date_add >= DATE_ADD(CURDATE(), INTERVAL - 30 DAY), 1, 0))) / 5 AS total_rating2," : "")."
                        SUM(grade)* AVG(grade) / 5 AS total_rating
                        
                    FROM
                        `"._DB_PREFIX_."product_comment`
                        WHERE `deleted`=0 AND `validate`=1
                        GROUP BY id_product
                ) epc ON p.id_product = epc.id_product";
        }

        $priorityFactor = (float)Configuration::get('PH_SBT_PRIORITY');
        return "SELECT
            p.id_product,
            (SUM(COALESCE (od.product_quantity, 0)) * IF(".((int)Configuration::get('PH_SBT_IGNORE_SALE_FACTOR_FREE_PRODUCT') ? 'p.price > 0' : 1).",".(float)Configuration::get('PH_SBT_PRIORITY_NB_ORDER').", 0)) +
            (SUM(COALESCE (od.download_nb, 0))".pSQL($extraDownload)." )"."*".(float)Configuration::get('PH_SBT_PRIORITY_NB_DOWNLOAD').pSQL($select)." + (COALESCE(spp.priority, 0) * ".(float)$priorityFactor.") as ranking
            ".($timeTrendingLimit ? ", 
            (COALESCE (SUM(IF(o.date_add >= ( CURDATE() - INTERVAL ".(float)$timeTrendingLimit." DAY ),od.product_quantity, 0)), 0) * IF(".((int)Configuration::get('PH_SBT_IGNORE_SALE_FACTOR_FREE_PRODUCT') ? 'p.price > 0' : 1).", ".(float)Configuration::get('PH_SBT_PRIORITY_NB_ORDER').", 0)) +
            (COALESCE (SUM(IF(o.date_add >= ( CURDATE() - INTERVAL ".(float)$timeTrendingLimit." DAY ),od.download_nb, 0)))".pSQL($extraDownload2)." )"."*".(float)Configuration::get('PH_SBT_PRIORITY_NB_DOWNLOAD').pSQL($select2)." + (COALESCE(spp.priority, 0) * ".(float)$priorityFactor.") as ranking2 " : "")."
            
        FROM
            `"._DB_PREFIX_."product` p
        LEFT JOIN `"._DB_PREFIX_."order_detail` od ON p.id_product = od.product_id
        LEFT JOIN `"._DB_PREFIX_."orders` o ON od.id_order = o.id_order ".(string)$join."
        LEFT JOIN `"._DB_PREFIX_."ph_sbt_product_position` spp ON p.id_product=spp.id_product
        GROUP BY
            p.id_product
        ORDER BY ".($timeTrendingLimit ? "ranking2 DESC, ranking DESC," : "ranking DESC,")." p.id_product ASC";
    }

    public static function updatePriorityProduct($idProduct, $priority)
    {
        if(Db::getInstance()->getRow("SELECT `id_product` FROM `"._DB_PREFIX_."ph_sbt_product_position` WHERE id_product=".(int)$idProduct)){
            return Db::getInstance()->execute("UPDATE `"._DB_PREFIX_."ph_sbt_product_position` SET `priority`=".($priority === null ? 'NULL' : (float)$priority)." WHERE id_product=".(int)$idProduct);
        }
        return Db::getInstance()->execute("INSERT INTO `"._DB_PREFIX_."ph_sbt_product_position` (`id_product`,`position`, `priority`) VALUES(".$idProduct.", 0, ".($priority === null ? 'NULL' : (float)$priority).")");
    }

    public static function getPriorityProduct($idProduct)
    {
        return Db::getInstance()->getValue("SELECT `priority` FROM `"._DB_PREFIX_."ph_sbt_product_position` WHERE id_product=".(int)$idProduct);
    }
}