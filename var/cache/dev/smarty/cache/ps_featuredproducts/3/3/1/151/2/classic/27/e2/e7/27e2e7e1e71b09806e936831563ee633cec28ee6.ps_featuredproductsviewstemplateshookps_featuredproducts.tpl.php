<?php
/* Smarty version 4.3.4, created on 2024-09-02 08:57:32
  from 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d56fec3f9550_25901245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl',
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
function content_66d56fec3f9550_25901245 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/prestashop/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    Popular Products
  </h2>
  

<div class="products row">
            
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
                  

        
          
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/prestashop/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="1" data-url="http://localhost/prestashop/index.php?fc=module&module=productcomments&controller=CommentGrade&id_lang=1">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

        
      </div>

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

    </div>
  </article>
</div>

    </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="http://localhost/prestashop/index.php?id_category=2&amp;controller=category&amp;id_lang=1">
    All products<i class="material-icons">&#xE315;</i>
  </a>
</section>
<!-- end /var/www/html/prestashop/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
}
