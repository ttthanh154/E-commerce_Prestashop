<?php
/* Smarty version 3.1.43, created on 2022-12-22 14:08:29
  from 'C:\xampp\htdocs\pretashop\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a4026d320a31_74790308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '998340104597567b5d303bb3fefa86d74a755e0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pretashop\\themes\\classic\\templates\\checkout\\checkout.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/header.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
  ),
),false)) {
function content_63a4026d320a31_74790308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128931122463a4026d319873_35534435', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142305964163a4026d31c2b1_09931657', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157734664363a4026d3201c4_04756522', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
class Block_128931122463a4026d319873_35534435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_128931122463a4026d319873_35534435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'checkout_process'} */
class Block_110030254563a4026d31c5f3_09116599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'cart_summary'} */
class Block_144954704963a4026d31e918_97965084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_142305964163a4026d31c2b1_09931657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142305964163a4026d31c2b1_09931657',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_110030254563a4026d31c5f3_09116599',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_144954704963a4026d31e918_97965084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row">
      <div class="cart-grid-body col-xs-12 col-lg-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110030254563a4026d31c5f3_09116599', 'checkout_process', $this->tplIndex);
?>

      </div>
      <div class="cart-grid-right col-xs-12 col-lg-4">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144954704963a4026d31e918_97965084', 'cart_summary', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_157734664363a4026d3201c4_04756522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_157734664363a4026d3201c4_04756522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
