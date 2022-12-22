<?php
/* Smarty version 3.1.43, created on 2022-12-22 14:08:18
  from 'C:\xampp\htdocs\pretashop\modules\ets_htmlbox\views\templates\hook\display-hooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a40262574b35_05645203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4793bb1f8dd54d34e9a5461a6d1306df75cdc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\modules\\ets_htmlbox\\views\\templates\\hook\\display-hooks.tpl',
      1 => 1671351562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a40262574b35_05645203 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['hooks']->value)) && sizeof($_smarty_tpl->tpl_vars['hooks']->value) > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
        <style>
            <?php echo $_smarty_tpl->tpl_vars['hook']->value['style'];?>

        </style>
        <?php echo $_smarty_tpl->tpl_vars['hook']->value['html'];?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
