<?php
/* Smarty version 3.1.43, created on 2022-12-14 17:41:09
  from 'C:\xampp\htdocs\pretashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6399a8451a0db2_71006507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3378cd752418498b7105f3f4bd1627fb0082435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399a8451a0db2_71006507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\pretashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\f3\\37\\8c\\f3378cd752418498b7105f3f4bd1627fb0082435_2.file.helpers.tpl.php',
    'uid' => 'f3378cd752418498b7105f3f4bd1627fb0082435',
    'call_name' => 'smarty_template_function_renderLogo_9379381686399a845198329_97489947',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_9379381686399a845198329_97489947 */
if (!function_exists('smarty_template_function_renderLogo_9379381686399a845198329_97489947')) {
function smarty_template_function_renderLogo_9379381686399a845198329_97489947(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_9379381686399a845198329_97489947 */
}
