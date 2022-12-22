<?php
/* Smarty version 3.1.43, created on 2022-12-22 14:08:29
  from 'C:\xampp\htdocs\pretashop\themes\classic\templates\checkout\checkout-process.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a4026d5845e8_56893554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aca75a222bc9f62e523a03e11686eaf45ca10a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\themes\\classic\\templates\\checkout\\checkout-process.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4026d5845e8_56893554 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value, 'step', false, 'index');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl ) );?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
