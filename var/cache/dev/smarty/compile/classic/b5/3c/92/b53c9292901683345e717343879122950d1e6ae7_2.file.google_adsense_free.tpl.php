<?php
/* Smarty version 3.1.43, created on 2022-12-22 14:08:18
  from 'C:\xampp\htdocs\pretashop\modules\google_adsense_free\views\templates\hook\google_adsense_free.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a4026251dce5_01727308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b53c9292901683345e717343879122950d1e6ae7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\modules\\google_adsense_free\\views\\templates\\hook\\google_adsense_free.tpl',
      1 => 1671348608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4026251dce5_01727308 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['D_ADSENSE_CODE_FREE']->value))) {?>
    <div class='google_adsense_ms'>
        <center>
            <?php echo $_smarty_tpl->tpl_vars['D_ADSENSE_CODE_FREE']->value;?>
        </center>
    </div>
<?php }
}
}
