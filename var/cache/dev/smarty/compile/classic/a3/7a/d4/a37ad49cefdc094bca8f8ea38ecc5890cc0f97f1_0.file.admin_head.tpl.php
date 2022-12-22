<?php
/* Smarty version 3.1.43, created on 2022-12-22 14:07:44
  from 'C:\xampp\htdocs\pretashop\modules\ph_sortbytrending\views\templates\hook\admin_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a4024011c2c1_50389010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37ad49cefdc094bca8f8ea38ecc5890cc0f97f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\modules\\ph_sortbytrending\\views\\templates\\hook\\admin_head.tpl',
      1 => 1670473202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4024011c2c1_50389010 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    const PH_SBT_LINK_AJAX_BO = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkAjaxBo']->value,'quotes','UTF-8' ));?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkJs']->value,'quotes','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['linkJsProduct16']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkJsProduct16']->value,'quotes','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
}
