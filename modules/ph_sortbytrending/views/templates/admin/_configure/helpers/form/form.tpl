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

{extends file="helpers/form/form.tpl"}
{block name="description"}
    {if $input.name == 'PH_SBT_CRONJOB_TOKEN'}
        {$smarty.block.parent}
        <p class="ph-sbt-cronjob-code">{l s='Cronjob command to set on your server (recommended frequency is once per day)' mod='ph_sortbytrending'}: <code>{$cronjobPath|escape:'quotes':'UTF-8'}</code></p>
        <button class="btn btn-default btn-ph-sbt-run-sort js-btn-ph-sbt-run-sort">{l s='Run cronjob command manually now!' mod='ph_sortbytrending'}</button>

        {if $cronjobOverrideTime > 0 || $cronjobTime}
            <div class="ph-sbt-cron-box">
                <div class="box-content">
                    {if $cronjobTime}
                        <div class="alert alert-info">
                            <p><span>{l s='The last time Cronjob was executed: %s ago' sprintf=[$cronjobTime] mod='ph_sortbytrending'}.</span></p>
                        </div>
                    {/if}
                    {if $cronjobOverrideTime > 0}
                    <div class="alert alert-warning">
                        <p>{l s=' It has been 24 hours since the last time cronjob was executed. Sort by trending for products is not updated.' mod='ph_sortbytrending'} </div>
                </div>
                {/if}
            </div>
            </div>

        {/if}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}