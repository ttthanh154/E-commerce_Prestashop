{*
* 2007-2022  ETS-Soft
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
*  @copyright  2007-2022  ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
{extends file="helpers/form/form.tpl"}
{block name="input_row"}
    {$smarty.block.parent}
    {if $input.name=='ETS_CB_COOKIE_BT_BG_HOVER'}
        <div class="form-group">
            <label class="control-label col-lg-3"> &nbsp; </label>
            <div class="col-lg-9">
                <button class="btn btn-default ets-cb-reset-color"><i class="icon icon-refresh"></i> {l s='Reset color' mod='ets_cookie_banner'}</button>
            </div>
        </div>
    {/if}
{/block}
