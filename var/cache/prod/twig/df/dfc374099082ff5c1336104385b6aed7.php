<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__6f34b98af6fb9168b8ff13db8af0a9ce */
class __TwigTemplate_06f1d5a2f59eb6c92b5a5522a8811072 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Themes • youssefShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignThemeGeneral';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '5dfb11b3d0c48dc3a9b57a0ad8e8f091';
    var currentIndex = 'index.php?controller=AdminPsxDesignThemeGeneral';
    var employee_token = 'e7870d857721de02f7cadd7f7cbd766d';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/modules/manage?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas';
    var admin_notification_get_link = '/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/common/notifications?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/common/notifications/ack?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas';
    var tab_mo";
        // line 41
        echo "dules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin273fvzbn8f8ncqzcn3h\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin273fvzbn8f8ncqzcn3h\\/index.php\\/configure\\/advanced\\/emplo";
        // line 70
        echo "yees\\/change-form-language?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\";
var currency = {\"iso_code\":\"MAD\",\"sign\":\"MAD\",\"name\":\"Moroccan Dirham\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MAD\",\"currencySymbol\":\"MAD\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var getUuidAjaxUrl = \"\\/prestashop\\/admin273fvzbn8f8ncqzcn3h\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\";
var importThemeLink = \"\\/prestashop\\/admin273fvzbn8f8ncqzcn3h\\/index.php\\/modules\\/improve\\/design\\/themes\\/import?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.7\"></script>
<script type=";
        // line 87
        echo "\"text/javascript\" src=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin273fvzbn8f8ncqzcn3h/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin273fvzbn8f8ncqzcn3h\\/index.php?controller=AdminGamification&token=ae9291b40a7f0b325ec6c443a89dd819\";
            var current_id_tab = 156;
        </script>    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/index-themes.js\"></script>
<script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundC";
        // line 111
        echo "olor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/common/notifications?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 123
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminpsxdesignthemegeneral\"
  data-base-url=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php\"  data-token=\"EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/pseditionbasic/homepage?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fe63262b41ee7fcdeff1ca27a44abfd7\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/modules/manage?token=5dde5241893521a71314641f67af991f\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/categories/new?token=5dde5241893521a71314641f67af991f\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/products-v2/create?token=5dde524189";
        // line 157
        echo "3521a71314641f67af991f\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=97ed89cb5110370de37ad0457b6f790e\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders?token=5dde5241893521a71314641f67af991f\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"106\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/themes?-IbJ9JLUPCgZcTPkseog0JAVas\"
        data-post-link=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminQuickAccesses&token=139f58683166dddcde5f48cfd897f0ff\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Themes - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminQuickAccesses&token=139f58683166dddcde5f48cfd897f0ff\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminSearch&amp;token=333e7dc077bb088d034b1";
        // line 196
        echo "00379fb7078\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\">";
        // line 213
        echo "<i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fe63262b41ee7fcdeff1ca27a44abfd7\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/modules/manage?token=5dde5241893521a71314641f67af991f\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/categories/new?token=5dde5241893521a71314641f67af991f\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/products-v2/create?token=5dde5241893521a71314641f67af991f\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCartRules&amp;a";
        // line 250
        echo "ddcart_rule&amp;token=97ed89cb5110370de37ad0457b6f790e\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders?token=5dde5241893521a71314641f67af991f\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"47\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/themes?-IbJ9JLUPCgZcTPkseog0JAVas\"
      data-post-link=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminQuickAccesses&token=139f58683166dddcde5f48cfd897f0ff\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Themes - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminQuickAccesses&token=139f58683166dddcde5f48cfd897f0ff\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropd";
        // line 295
        echo "own\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=1c76f28ce3043e44a66645bd0a78e0de\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
        ";
        // line 347
        echo "    <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee";
        // line 398
        echo "-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Youssef\" /></span>
        <span class=\"employee_profile\">Welcome back Youssef</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/employees/1/edit?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mb";
        // line 421
        echo "o_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminLogin&amp;logout=1&amp;token=ec828480eeedcb1603f2f72e6a3cb804\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/employees/toggle-navigation?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/pseditionbasic/homepage?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"133\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  ";
        // line 462
        echo "
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"134\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/pseditionbasic/homepage?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminDashboard&amp;token=40c9c7f6d005429b6e41afeb2e5413fd\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                ";
        // line 498
        echo "<span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders/invoices/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Invoices
                                </a>
       ";
        // line 530
        echo "                       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders/credit-slips/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/orders/delivery-slips/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCarts&amp;token=1c76f28ce3043e44a66645bd0a78e0de\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submen";
        // line 562
        echo "u=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/products?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/products?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/categories?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <";
        // line 592
        echo "li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/monitoring/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminAttributesGroups&amp;token=ba253e170faf4f02ce9df38f1952b666\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/catalog/brands/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/attachments/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Files
                                </a>
                            ";
        // line 619
        echo "  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCartRules&amp;token=97ed89cb5110370de37ad0457b6f790e\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/stocks/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/customers/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
             ";
        // line 651
        echo "                                               </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/customers/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/addresses/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCustomerThreads&amp;token=9f730abb42e84fe16000abd0e0e8ae5c\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
             ";
        // line 681
        echo "         </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCustomerThreads&amp;token=9f730abb42e84fe16000abd0e0e8ae5c\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/sell/customer-service/order-messages/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminReturn&amp;token=f64d15a6f74d83e2c07bd19ce6ecbc4e\" class=\"link\"> Merchandise Returns
        ";
        // line 708
        echo "                        </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/metrics/legacy/stats?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/metrics/legacy/stats?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminMetricsController\">
                  ";
        // line 740
        echo "              <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/metrics?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/mbo/modules/catalog/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsMboModuleParent\">
";
        // line 775
        echo "                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/mbo/modules/catalog/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/modules/manage?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/themes?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
       ";
        // line 803
        echo "                                       <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"155\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/themes?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=2b839d7d238aba3a2533368c52d034cf\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/mbo/themes/catalog/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submen";
        // line 831
        echo "u=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/design/mail_theme/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/design/cms-pages/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/design/modules/positions/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminImages&amp;token=bd3e9971e05853e7ac1eb45919f98408\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                  ";
        // line 860
        echo "                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/link-widget/list?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCarriers&amp;token=5819ff2e578c12091aaffacdd27eb713\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminCarriers&amp;token";
        // line 889
        echo "=5819ff2e578c12091aaffacdd27eb713\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/shipping/preferences/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/payment/payment_methods?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 921
        echo "54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/payment/payment_methods?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/payment/preferences?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/international/localization/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                       ";
        // line 951
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/international/localization/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/international/zones/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/international/taxes/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/improve/international/transl";
        // line 979
        echo "ations/settings?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"125\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e495162b04966456896c58a81a8413bd\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-125\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e495162b04966456896c58a81a8413bd\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                    ";
        // line 1010
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminPsfacebookModule&amp;token=7a693e4c156c2429e5bebbb61d3203e4\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/pseditionbasic/settings?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
         ";
        // line 1048
        echo "           <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/preferences/preferences?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/preferences/preferences?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/order-preferences/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                  ";
        // line 1076
        echo "          
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/product-preferences/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/customer-preferences/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/contacts/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/shop/seo-urls/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Traffic &amp; SEO
           ";
        // line 1103
        echo "                     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminSearchConf&amp;token=b34f092216ef77fa30abe2a16f18fbc3\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/system-information/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"s";
        // line 1134
        echo "ubtab-AdminInformation\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/system-information/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/performance/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/administration/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/emails/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> E-mail
                                </a>
                              </li>

                                               ";
        // line 1163
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/import/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/employees/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/sql-requests/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/logs/?_token=EsSBInooRP2SKsvzx";
        // line 1191
        echo "-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/webservice-keys/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/feature-flags/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/configure/advanced/security/?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"link\"> Security
                                </a>
                              </li>

                                        ";
        // line 1219
        echo "                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin273fvzbn8f8ncqzcn3h/index.php?controller=AdminKlaviyoPsConfig&amp;token=82f6fee9510c017a3c773b4bd0497821\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Customization</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/themes?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" aria-current=\"page\">Themes</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Themes          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/en/doc/Ad";
        // line 1272
        echo "minPsxDesignThemeGeneral?version=8.1.7&amp;country=en\" title=\"Help\">
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/themes?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab active current\" data-submenu=\"156\">
                      Themes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/logos?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab \" data-submenu=\"157\">
                      Logos
         ";
        // line 1296
        echo "             <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/colors?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" id=\"subtab-AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"158\">
                      Colors
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/improve/design/fonts?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"159\">
                      Fonts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ";
        // line 1317
        echo "                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminPsxDesignThemeGeneral?version=8.1.7&amp;country=en\" title=\"Help\">
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1348
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/prestashop/admin273fvzbn8f8ncqzcn3h/index.php/modules/pseditionbasic/homepage?_token=EsSBInooRP2SKsvzx-IbJ9JLUPCgZcTPkseog0JAVas\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1382
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 123
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1348
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1382
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__6f34b98af6fb9168b8ff13db8af0a9ce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1563 => 1382,  1542 => 1348,  1531 => 123,  1522 => 1382,  1482 => 1348,  1449 => 1317,  1426 => 1296,  1400 => 1272,  1345 => 1219,  1315 => 1191,  1285 => 1163,  1254 => 1134,  1221 => 1103,  1192 => 1076,  1162 => 1048,  1122 => 1010,  1089 => 979,  1059 => 951,  1027 => 921,  993 => 889,  962 => 860,  931 => 831,  901 => 803,  871 => 775,  834 => 740,  800 => 708,  771 => 681,  739 => 651,  705 => 619,  676 => 592,  644 => 562,  610 => 530,  576 => 498,  538 => 462,  495 => 421,  470 => 398,  417 => 347,  363 => 295,  316 => 250,  277 => 213,  258 => 196,  217 => 157,  178 => 123,  164 => 111,  138 => 87,  119 => 70,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6f34b98af6fb9168b8ff13db8af0a9ce", "");
    }
}
