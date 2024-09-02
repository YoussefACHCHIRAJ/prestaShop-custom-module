<?php
/* Smarty version 4.3.4, created on 2024-08-29 20:54:12
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d0d1e4e9b1e3_50889498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66d0d1e4e9b1e3_50889498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/2a/79/ae/2a79ae0bf8153895448a16a1e3a0345ee5e008c7_2.file.helpers.tpl.php',
    'uid' => '2a79ae0bf8153895448a16a1e3a0345ee5e008c7',
    'call_name' => 'smarty_template_function_renderLogo_52805176466d0d1e4d46599_80623458',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/prestashop/index.php?controller=identity" title="Information" rel="nofollow">Information</a></li>
                  <li><a href="http://localhost/prestashop/index.php?controller=address" title="Add first address" rel="nofollow">Add first address</a></li>
                          <li><a href="http://localhost/prestashop/index.php?controller=history" title="Orders" rel="nofollow">Orders</a></li>
                          <li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="Credit slips" rel="nofollow">Credit slips</a></li>
                                  <li>
    <a href="http://localhost/prestashop/index.php?fc=module&amp;module=blockwishlist&amp;controller=lists&amp;id_lang=1" title="My wishlists" rel="nofollow">
      Wishlist
    </a>
  </li>
<li>
  <a href="//localhost/prestashop/index.php?fc=module&module=ps_emailalerts&controller=account&id_lang=1" title="My alerts">
    My alerts
  </a>
</li>

        <li><a href="http://localhost/prestashop/index.php?mylogout=" title="Log me out" rel="nofollow">Sign out</a></li>
       
	</ul>
</div>
<?php }
}
