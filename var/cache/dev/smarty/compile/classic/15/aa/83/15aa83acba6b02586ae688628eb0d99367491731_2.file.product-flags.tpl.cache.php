<?php
/* Smarty version 4.3.4, created on 2024-09-02 08:57:32
  from '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d56fec3f6cb0_61419665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15aa83acba6b02586ae688628eb0d99367491731' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d56fec3f6cb0_61419665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '208494287966d56fec3f3870_06676800';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30187065466d56fec3f4d07_78766595', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_30187065466d56fec3f4d07_78766595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_30187065466d56fec3f4d07_78766595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
