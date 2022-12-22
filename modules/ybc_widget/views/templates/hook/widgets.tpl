{if $widgets}
    {if $widget_hook == "display-top-column" }
        {if $page_name == "index"}
            <div class="home_widget_top_column">
                <div class="container">
                    <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'} row">
                        {foreach from=$widgets item='widget'}
                            <li class="ybc-widget-item">
                                {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                                {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                                {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                                {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        {/if}
    {elseif ($widget_hook == "display-left-column" || $widget_hook == "display-right-column")}
        <div class="block">
            <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'} block_content">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                    </li>
                {/foreach}
            </ul>
        </div>
    {elseif $widget_hook == "display-footer"}
        <section class="footer-block col-xs-12 col-sm-2">
            <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        <div class="block_content toggle-footer">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>
        </section>
    {elseif $widget_hook == "footer-showroom"}
        <ul class="ybc-widget-ybc-custom-1{if isset($tc_config.YBC_TC_ENABLE_BANNER) && $tc_config.YBC_TC_ENABLE_BANNER}{else} hidden-xs{/if}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    <div class="ybc-widget-item-content">
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}
                            {if $widget.link}
                                <a class="ybc_widget_link_img" href="{$widget.link|escape:'html':'UTF-8'}"
                                   {if $widget.show_image && $widget.image}{if isset($tc_config.YBC_TC_LAYOUT) && $tc_config.YBC_TC_LAYOUT == 'LAYOUT3'}style="background-image:url({$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'});"{/if}{/if}>
                                    <img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}"
                                         alt="{$widget.title|escape:'html':'UTF-8'}"/>
                                </a>
                            {/if}
                        {/if}
                        <div class="ybc-widget-description-content">
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}
                                <a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                            {if $widget.show_description && $widget.description}
                                <div class="ybc-widget-description">{$widget.description nofilter}</div>
                            {/if}
                        </div>
                    </div>
                </li>
            {/foreach}
        </ul>
    {elseif $widget_hook == "ybc-ybcpaymentlogo-hook"}
        <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                    </li>
                {/foreach}
            </ul>
    {elseif $widget_hook == "ybc-footer-links"}
        <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
            {foreach from=$widgets item='widget'}
                <li class="ybc-widget-item">
                    {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                    {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                    {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                    {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                </li>
            {/foreach}
        </ul>
    {elseif $widget_hook == "ybc-custom-3"}
        <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        <div class="content_toggle">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        </div>
                        </button>
                    </li>
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">  
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <div class="modal-body">
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                          </div>
                        </div>
                      </div>
                    </div>
                {/foreach}
            </ul>
    {elseif $widget_hook == "ybc-custom-2"}
        <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        <div class="content_toggle ybc_links_page_home">
                            {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                            {if $widget.show_image && $widget.image}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{/if}
                            {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                            {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        </div>
                    </li>
                {/foreach}
            </ul>    
    {else}
        <ul class="ybc-widget-{$widget_hook|escape:'html':'UTF-8'}">
                {foreach from=$widgets item='widget'}
                    <li class="ybc-widget-item">
                        {if $widget.icon}<i class="fa {$widget.icon|escape:'html':'UTF-8'}"></i>{/if}
                        {if $widget.show_image && $widget.image}{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}<img src="{$widget_module_path|escape:'html':'UTF-8'}images/widget/{$widget.image|escape:'html':'UTF-8'}" alt="{$widget.title|escape:'html':'UTF-8'}" />{if $widget.link}</a>{/if}{/if}
                        {if $widget.show_title && $widget.title}<h4 class="ybc-widget-title">{if $widget.link}<a href="{$widget.link|escape:'html':'UTF-8'}">{/if}{$widget.title|escape:'html':'UTF-8'}{if $widget.link}</a>{/if}</h4>{/if}
                        {if $widget.show_description && $widget.description}<div class="ybc-widget-description">{$widget.description nofilter}</div>{/if}
                    </li>
                {/foreach}
        </ul>
    {/if}
{/if}