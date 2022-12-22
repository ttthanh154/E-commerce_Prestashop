<?php
/* Smarty version 3.1.43, created on 2022-12-14 17:41:08
  from 'C:\xampp\htdocs\pretashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6399a844a55850_45368698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29630495ec9a4aa06c3f4180ef6666fb5ff3a4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\themes\\classic\\templates\\index.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399a844a55850_45368698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18899116646399a844a530f5_02183283', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_16318964556399a844a53692_91843042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20514255266399a844a54380_17217324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18378559476399a844a53ee6_18605192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20514255266399a844a54380_17217324', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18899116646399a844a530f5_02183283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18899116646399a844a530f5_02183283',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16318964556399a844a53692_91843042',
  ),
  'page_content' => 
  array (
    0 => 'Block_18378559476399a844a53ee6_18605192',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20514255266399a844a54380_17217324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16318964556399a844a53692_91843042', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18378559476399a844a53ee6_18605192', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
