<?php
/* Smarty version 4.3.4, created on 2024-08-29 20:54:08
  from '/var/www/html/prestashop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d0d1e054eed7_09733589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a614a008d6da10c2f8e32f35c883d4dbf8b5ac' => 
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
function content_66d0d1e054eed7_09733589 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
