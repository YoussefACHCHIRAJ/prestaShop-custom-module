<?php
/* Smarty version 4.3.4, created on 2024-08-29 20:54:15
  from '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d0d1e7433438_91270542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7172fd363f737789348a8130ff8bd0243b23548e' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d0d1e7433438_91270542 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
