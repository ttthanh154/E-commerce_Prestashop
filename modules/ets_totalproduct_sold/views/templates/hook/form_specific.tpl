{*
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
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<div class="form-group row">
    <label class="control-label col-lg-3 ">{l s='Use specific settings for this product' mod='ets_totalproduct_sold'}</label>
    <div class="col-lg-9">
        <div class="input-group">
        <span class="ps-switch switch prestashop-switch fixed-width-lg">
            <input class="ps-switch" name="ets_tps_use_specific" id="ets_tps_use_specific_off" value="0" type="radio" {if !$specific_product || !$specific_product['use_specific']} checked{/if} />
            <label for="ets_tps_use_specific_off">{l s='No' mod='ets_totalproduct_sold'}</label>
            <input class="ps-switch" name="ets_tps_use_specific" id="ets_tps_use_specific_on" value="1"{if $specific_product && $specific_product['use_specific']} checked{/if} type="radio" />
            <label for="ets_tps_use_specific_on">{l s='Yes' mod='ets_totalproduct_sold'}</label>
            <a class="slide-button btn"></a>
        </span>
        </div>
    </div>
</div>
<div class="form-group row tps_use_specific">
    <label for="ets_tps_start_counting_total" class="control-label col-lg-3">{l s='Set the initial total product sold for your product' mod='ets_totalproduct_sold'}</label>
    <div class="col-lg-9">
        <input style="width:100px" name="ets_tps_start_counting_total" id="ets_tps_start_counting_total" value="{if isset($specific_product.start_counting_total) && $specific_product.start_counting_total}{$specific_product.start_counting_total|intval}{/if}" class="form-control" type="text" />
        <p class="help-block">{l s='For example, if you enter "2" , the total product sold displayed on the front office will be counted as "2 + the actual total product sold". Leave this field blank to show the actual sold quantity of the product ' mod='ets_totalproduct_sold'}</p>
    </div>
</div>
<div class="form-group row tps_use_specific">
    <label for="ets_tps_cal_factor" class="control-label col-lg-3 required">{l s='Sold factor when ONE product item is successfully sold' mod='ets_totalproduct_sold'}</label>
    <div class="col-lg-9">
        <input style="width:100px" name="ets_tps_cal_factor" id="ets_tps_cal_factor" value="{if isset($specific_product.cal_factor) && $specific_product.cal_factor}{$specific_product.cal_factor|intval}{else}1{/if}" class="form-control" type="text" />
        <p class="help-block">{l s='Enter an integer such as 1, 3, 5, 10, etc. to be the calculated value when 1 item of the product is sold. For example, if you enter "5", when there are 2 items sold, the total product sold displayed on the front end will be "10" items. ' mod='ets_totalproduct_sold'}</p>
    </div>
</div>