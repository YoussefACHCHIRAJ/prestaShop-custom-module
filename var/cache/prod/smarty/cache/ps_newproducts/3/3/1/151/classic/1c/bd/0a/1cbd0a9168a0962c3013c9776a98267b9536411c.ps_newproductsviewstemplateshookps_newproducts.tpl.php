<?php
/* Smarty version 4.3.4, created on 2024-08-29 20:54:12
  from 'module:ps_newproductsviewstemplateshookps_newproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d0d1e4d0c7f5_17719109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproductsviewstemplateshookps_newproducts.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
    'c2b780f3ae2f90b11f9fc49fba4ca5648b881a87' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/productlist.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
    'df48b1a98e888bf830fbedcb7cd8b1fe6e0f773e' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
    '15aa83acba6b02586ae688628eb0d99367491731' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66d0d1e4d0c7f5_17719109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featured-products clearfix mt-3">
  <h2 class="h2 products-section-title text-uppercase">
    New products
  </h2>
  

<div class="products">
            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://localhost/prestashop/index.php?id_product=1&amp;rewrite=xyz-pc&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
              <picture>
                                                <img
                  src="http://localhost/prestashop/img/p/1/1-home_default.jpg"
                  alt="XYZ Pc"
                  loading="lazy"
                  data-full-size-image-url="http://localhost/prestashop/img/p/1/1-large_default.jpg"
                  width="250"
                  height="250"
                />
              </picture>
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="http://localhost/prestashop/index.php?id_product=1&amp;rewrite=xyz-pc&amp;controller=product&amp;id_lang=1" content="http://localhost/prestashop/index.php?id_product=1&amp;rewrite=xyz-pc&amp;controller=product&amp;id_lang=1">XYZ Pc</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  MAD33,000.00
                              </span>

              

              
            </div>
                  

        
          
<div class="product-list-reviews" data-id="1" data-url="http://localhost/prestashop/index.php?fc=module&module=productcomments&controller=CommentGrade&id_lang=1">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

        
      </div>

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

    </div>
  </article>
</div>

    </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="http://localhost/prestashop/index.php?controller=new-products">
    All new products<i class="material-icons">&#xE315;</i>
  </a>
</section>

<?php }
}
