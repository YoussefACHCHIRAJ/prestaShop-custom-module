<?php
/* Smarty version 4.3.4, created on 2024-08-29 20:54:06
  from '/var/www/html/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d0d1ded54865_41754661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0506cf45edd4ee11040d09862254abab520a388' => 
    array (
      0 => '/var/www/html/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1711032354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d0d1ded54865_41754661 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
