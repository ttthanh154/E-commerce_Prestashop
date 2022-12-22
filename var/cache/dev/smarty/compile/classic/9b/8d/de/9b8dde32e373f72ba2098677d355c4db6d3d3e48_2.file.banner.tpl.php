<?php
/* Smarty version 3.1.43, created on 2022-12-22 14:08:20
  from 'C:\xampp\htdocs\pretashop\modules\ets_banneranywhere\views\templates\hook\banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a4026485a612_10175259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8dde32e373f72ba2098677d355c4db6d3d3e48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\modules\\ets_banneranywhere\\views\\templates\\hook\\banner.tpl',
      1 => 1670474153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4026485a612_10175259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ets_baw_display_banner <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_class']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['content_before_image']) {?>
        <div class="content_before_image">
            <?php echo $_smarty_tpl->tpl_vars['banner']->value['content_before_image'];?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['image']) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['banner']->value['image_url'])) && $_smarty_tpl->tpl_vars['banner']->value['image_url'] != '') {?><a class="banner_image_url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['position']->value == 'displaybanner') {?>
                    <div<?php if ($_smarty_tpl->tpl_vars['banner']->value['title']) {?> title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="banner_top_site" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_ETS_BAW_IMG_') ? constant('_PS_ETS_BAW_IMG_') : null)).((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
)"></div>
            <?php } else { ?>
                    <img <?php if ($_smarty_tpl->tpl_vars['banner']->value['title']) {?> title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_ETS_BAW_IMG_') ? constant('_PS_ETS_BAW_IMG_') : null)).((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value['image'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['banner']->value['image_alt']) {?> alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner']->value['image_alt'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
            <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['banner']->value['image_url'])) && $_smarty_tpl->tpl_vars['banner']->value['image_url'] != '') {?></a><?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['content_after_image']) {?>
        <div class="content_after_image">
            <?php echo $_smarty_tpl->tpl_vars['banner']->value['content_after_image'];?>

        </div>
    <?php }?>
</div>
<div class="clearfix"></div><?php }
}
