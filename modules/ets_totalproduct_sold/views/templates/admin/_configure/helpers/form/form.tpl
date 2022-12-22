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
{block name="input"}
    {if $input.type == 'checkbox'}
        {if isset($input.values.query) && $input.values.query}
            {assign var=id_checkbox value=$input.name|cat:'_'|cat:'all'}
            {if !isset($input.select_all) || (isset($input.select_all) && $input.select_all )}
                {assign var=checkall value=true}
    			{if !(isset($fields_value[$input.name]) && is_array($fields_value[$input.name]) && $fields_value[$input.name] && in_array('all',$fields_value[$input.name]))} 
                    {assign var=checkall value=false}
                {/if}
                <div class="checkbox_all checkbox">
    				{strip}
    					<label for="{$id_checkbox|escape:'html':'UTF-8'}">                                
    						<input type="checkbox" name="{$input.name|escape:'html':'UTF-8'}[]" id="{$id_checkbox|escape:'html':'UTF-8'}" value="all" {if $checkall} checked="checked"{/if} />
    						{l s='Select/Unselect all' mod='ets_totalproduct_sold'}
    					</label>
    				{/strip}
    			</div>
            {/if}
            {foreach $input.values.query as $value}
				{assign var=id_checkbox value=$input.name|cat:'_'|cat:$value[$input.values.id]|escape:'html':'UTF-8'}
				<div class="checkbox{if isset($input.expand) && strtolower($input.expand.default) == 'show'} hidden{/if}">
					{strip}
						<label for="{$id_checkbox|escape:'html':'UTF-8'}">                                
							<input type="checkbox" name="{$input.name|escape:'html':'UTF-8'}[]" id="{$id_checkbox|escape:'html':'UTF-8'}" {if isset($value[$input.values.id])} value="{$value[$input.values.id]|escape:'html':'UTF-8'}"{/if}{if isset($fields_value[$input.name]) && is_array($fields_value[$input.name]) && $fields_value[$input.name] && (in_array($value[$input.values.id],$fields_value[$input.name]) || in_array('all',$fields_value[$input.name])) } checked="checked"{/if} {if isset($value.class) && $value.class} class="{$value.class|escape:'html':'UTF-8'}"{/if}/>
							{$value[$input.values.name]|replace:'[highlight]':'<strong>'|replace:'[end_highlight]':'</strong>' nofilter}
						</label>
					{/strip}
				</div>
			{/foreach} 
        {/if}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}