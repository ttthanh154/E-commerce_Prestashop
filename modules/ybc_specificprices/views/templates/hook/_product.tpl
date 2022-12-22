{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{block name='product_miniature_item'}
    <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product|escape:'html':'UTF-8'}"
             data-id-product-attribute="{$product.id_product_attribute|escape:'html':'UTF-8'}" itemscope itemtype="http://schema.org/Product">
        <div class="thumbnail-container">
            <div class="countdown_content_wrapper">
                 {if $product.has_discount}
                    <p class="reduction_percent"><span class="reduction_percent_display">{$product.discount_percentage|escape:'html':'UTF-8'}</span></p>
                {/if}
            </div>
            {block name='product_thumbnail'}
                <div class="product_special_img">
                    <a href="{$product.url|escape:'html':'UTF-8'}" class="thumbnail product-thumbnail">
                        <img src="{$product.cover.bySize.home_default.url|escape:'html':'UTF-8'}" alt="{$product.cover.legend|escape:'html':'UTF-8'}"
                             data-full-size-image-url="{$product.cover.large.url|escape:'html':'UTF-8'}">
                    </a>
                </div>
            {/block}
            {block name='product_name'}
                <h4 class="h4 product-title" itemprop="name"><a
                            href="{$product.url|escape:'html':'UTF-8'}">{$product.name|truncate:30:'...'}</a></h4>
            {/block}
            {if isset($product.specific_prices) && $product.specific_prices}
            <div id="ets_clock_{$product.id_product|intval}" data-id-product="{$product.id_product|intval}"
                 data-date-to="{$product.specific_prices.to|escape:'html':'UTF-8'}" class="ets_clock"></div>
            {/if}
        </div>
    </article>
{/block}

