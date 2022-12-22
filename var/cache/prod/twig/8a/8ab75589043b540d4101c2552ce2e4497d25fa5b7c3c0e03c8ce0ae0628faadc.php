<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8508f69fe2d396e429787550d21eedb19fbed8fe705f112cdd1fe234b2fd4e86 */
class __TwigTemplate_7f274194d224f696684043f3c904423dc2af7f6c7ee3977eba4c126cbdd5c08d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/pretashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/pretashop/img/app_icon.png\" />

<title>Positions • Subachao</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesPositions';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'VNM';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '3da3a24e01477e6bd9dd8d7bc1d84ab1';
    var token_admin_orders = tokenAdminOrders = '2b1659bb0dfec83e62b15f7d34d18440';
    var token_admin_customers = '3cb0740e1cb1a3ea639afb0ce48884f2';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '2236c14715b4e420ea41ecf70a8a85f7';
    var currentIndex = 'index.php?controller=AdminModulesPositions';
    var employee_token = 'cdc6cb8ab7837ddec38c7db9261829a1';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/pretashop/admin101xn55sx/index.php/improve/modules/catalog/recommended?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg';
    var admin_notification_get_link = '/pretashop/admin101xn55sx/index.php/common/notifications?_token=QCrDhmANBgBh4IM9t2_";
        // line 42
        echo "gM1MYTeanF8eSTqjizYgy8Zg';
    var admin_notification_push_link = adminNotificationPushLink = '/pretashop/admin101xn55sx/index.php/common/notifications/ack?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/pretashop/admin101xn55sx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/admin101xn55sx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/ybc_themeconfig/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/ybc_blog_free/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/ybc_widget/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/ph_sortbytrending/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/pretashop/modules/ets_htmlbox/views/css/admin_all.css\" rel=\"stylesheet\" type=";
        // line 63
        echo "\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/pretashop\\/admin101xn55sx\\/\";
var baseDir = \"\\/pretashop\\/\";
var changeFormLanguageUrl = \"\\/pretashop\\/admin101xn55sx\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"Vietnamese Dong\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"VND\",\"currencySymbol\":\"\\u20ab\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/pretashop/admin101xn55sx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/pretashop/admin101xn55sx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/pretashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascr";
        // line 85
        echo "ipt\" src=\"/pretashop/admin101xn55sx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/pretashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/pretashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/pretashop/admin101xn55sx/index.php/common/notifications?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/pretashop\\/admin101xn55sx\\/index.php?controller=AdminGamification&token=2198d51d7b4269f08895f891ee37f1c9\";
            var current_id_tab = 58;
        </script><script type=\"text/javascript\">
    const PH_SBT_LINK_AJAX_BO = \"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminModules&token=5588ff7fb8cb851f855a0e19dfa8159b&configure=ph_sortbytrending\";
</script>
<script type=\"text/javascript\" src=\"/pretashop/modules/ph_sortbytrending/views/js/admin.js\"></script>


";
        // line 114
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulespositions\"
  data-base-url=\"/pretashop/admin101xn55sx/index.php\"  data-token=\"QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminDashboard&amp;token=759d979744ac509fe697ee3a10a145be\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f1a84f68f2f4190f89b812c9a935783d\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pretashop/admin101xn55sx/index.php/improve/modules/manage?token=0ac3dfdca15a0b572b933adec209257a\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pretashop/admin101xn55sx/index.php/sell/catalog/categories/new?token=0ac3dfdca15a0b572b933adec209257a\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pretashop/admin101xn55sx/index.php/sell/catalog/products/new?token=0ac3dfdca15a0b572b933adec209257a\"
                 data-item=\"New product\"
      >New product</a>
       ";
        // line 151
        echo "   <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cd82614743d1fb6ddcf9427f154bfc82\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminOrders&amp;token=2b1659bb0dfec83e62b15f7d34d18440\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"15\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/modules/positions\"
        data-post-link=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminQuickAccesses&token=fdced591eeaf6e58a4a0e660bd90e7a8\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Positions - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminQuickAccesses&token=fdced591eeaf6e58a4a0e660bd90e7a8\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/pretashop/admin101xn55sx/index.php?controller=AdminSearch&amp;token=862ced47fa3bc9407466c67d57658e14\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e";
        // line 189
        echo ".g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button clas";
        // line 205
        echo "s=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/pretashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
                                 ";
        // line 262
        echo "   <li class=\"nav-item\">
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
              Have you checked your <strong><a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ff308c1926db0b64b610da5887a9893e\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
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

  <scrip";
        // line 312
        echo "t type=\"text/html\" id=\"customer-notification-template\">
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
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/pretashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Thanh</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/employees/1/edit?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdow";
        // line 347
        echo "n-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminLogin&amp;logout=1&amp;token=a4490ca4a5d6d439008fc5e55a4e24d6\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/pretashop/admin101xn55sx/index.php/configure/advanced/employees/toggle-navigation?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminDashboard&amp;token=759d979744ac509fe697ee3a10a145be\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
    ";
        // line 377
        echo "        </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/sell/orders/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
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
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/orders/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=";
        // line 415
        echo "\"/pretashop/admin101xn55sx/index.php/sell/orders/invoices/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/orders/credit-slips/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/orders/delivery-slips/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCarts&amp;token=ff308c1926db0b64b610da5887a9893e\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
               ";
        // line 446
        echo "   
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/sell/catalog/products?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
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
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/catalog/products?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/catalog/categories?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
           ";
        // line 477
        echo "                   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/catalog/monitoring/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminAttributesGroups&amp;token=e5694951922a5bff12b04273d6b6a340\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/catalog/brands/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/attachments/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Fil";
        // line 504
        echo "es
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCartRules&amp;token=cd82614743d1fb6ddcf9427f154bfc82\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/stocks/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/sell/customers/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                  ";
        // line 537
        echo "  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/customers/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/addresses/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCustomerThreads&amp;token=2236c14715b4e420ea41ecf70a8a85f7\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
           ";
        // line 568
        echo "           </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCustomerThreads&amp;token=2236c14715b4e420ea41ecf70a8a85f7\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/sell/customer-service/order-messages/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminReturn&amp;token=3917408d78bd0bdf8e218549bc500452\" class=\"link\"> Merchandise Returns
                                </a>
  ";
        // line 596
        echo "                            </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/modules/metrics/legacy/stats?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/modules/metrics/legacy/stats?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/pretashop/admin101xn55sx/inde";
        // line 627
        echo "x.php/modules/metrics?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/improve/modules/manage?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/modules/manage?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Mo";
        // line 662
        echo "dule Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/modules/addons/modules/catalog?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/improve/design/themes/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
              ";
        // line 693
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/design/themes/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/modules/addons/themes/catalog?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/design/mail_theme/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/design/cms-pages/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Pages
    ";
        // line 720
        echo "                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/design/modules/positions/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminImages&amp;token=988cfe04683650cf76497b4336f29ff1\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/modules/link-widget/list?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-l";
        // line 753
        echo "evelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCarriers&amp;token=08d4924c61b08bb8eccfa451765c5196\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminCarriers&amp;token=08d4924c61b08bb8eccfa451765c5196\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/shipping/preferences/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                      ";
        // line 782
        echo "                        
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/improve/payment/payment_methods?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/payment/payment_methods?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/payment/preferences?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Preferences
                                </a>
                              </li>

   ";
        // line 813
        echo "                                                                           </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/improve/international/localization/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/international/localization/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/inter";
        // line 842
        echo "national/zones/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/international/taxes/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/improve/international/translations/settings?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminPsfacebookModule&amp;token=b4533cfca316234a588e3e6a8a9684bb\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                             ";
        // line 874
        echo "       <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminPsfacebookModule&amp;token=b4533cfca316234a588e3e6a8a9684bb\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=730e92dec5a15351352f40adff447e38\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  ";
        // line 911
        echo "<li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/preferences/preferences?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/preferences/preferences?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/order-preferences/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                     ";
        // line 939
        echo "         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/product-preferences/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/customer-preferences/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/contacts/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/shop/seo-urls/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Traffic &amp;";
        // line 966
        echo " SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminSearchConf&amp;token=b3c6880510416c1316b0f94a50ccb1f7\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminGamification&amp;token=2198d51d7b4269f08895f891ee37f1c9\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/system-information/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-";
        // line 998
        echo "icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/system-information/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/performance/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/administration/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                              ";
        // line 1027
        echo "                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/emails/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/import/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/employees/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/sql-requests/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Database
    ";
        // line 1056
        echo "                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/logs/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/webservice-keys/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/pretashop/admin101xn55sx/index.php/configure/advanced/feature-flags/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
           ";
        // line 1088
        echo "                               
                    
          
            <li class=\"category-title\" data-submenu=\"122\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"177\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminSelfUpgrade&amp;token=058a49d40a1ad6fb9c6af066b50b7463\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
                      <li class=\"breadcrumb-item active\">
              <a";
        // line 1145
        echo " href=\"/pretashop/admin101xn55sx/index.php/improve/design/modules/positions/?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\" aria-current=\"page\">Positions</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Positions          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-save\"
                  href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=3da3a24e01477e6bd9dd8d7bc1d84ab1\"                  title=\"Transplant a module\"                >
                                    Transplant a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/pretashop/admin101xn55sx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminModulesPositions%253Fversion%253D1.7.8.7%2526country%253Den/Help?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn bt";
        // line 1194
        echo "n-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-save\"
              href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=3da3a24e01477e6bd9dd8d7bc1d84ab1\"              title=\"Transplant a module\"            >
              Transplant a module
                          </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/pretashop/admin101xn55sx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminModulesPositions%253Fversion%253D1.7.8.7%2526country%253Den/Help?_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended Modules and Services',
        'Close': 'Close',
      },
      recommendedModulesUrl: '/pretashop/admin101xn55sx/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesPositions&_token=QCrDhmANBgBh4IM9t2_gM1MYTeanF8eSTqjizYgy8Zg',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1239
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

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
  <a href=\"http://localhost/pretashop/admin101xn55sx/index.php?controller=AdminDashboard&amp;token=759d979744ac509fe697ee3a10a145be\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=ttthanh154%40gmail.com&amp;firstname=Thanh&amp;lastname=Truong&amp;website=http%3A%2F%2Flocalhost%2Fpretashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/pretashop/admin101xn55sx/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 1289
        echo "\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=ttthanh154%40gmail.com&amp;firstname=Thanh&amp;lastname=Truong&amp;website=http%3A%2F%2Flocalhost%2Fpretashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t";
        // line 1328
        echo "\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1347
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 114
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1239
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1347
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8508f69fe2d396e429787550d21eedb19fbed8fe705f112cdd1fe234b2fd4e86";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1507 => 1347,  1490 => 1239,  1481 => 114,  1472 => 1347,  1451 => 1328,  1410 => 1289,  1354 => 1239,  1307 => 1194,  1256 => 1145,  1197 => 1088,  1163 => 1056,  1132 => 1027,  1101 => 998,  1067 => 966,  1038 => 939,  1008 => 911,  969 => 874,  935 => 842,  904 => 813,  871 => 782,  840 => 753,  805 => 720,  776 => 693,  743 => 662,  706 => 627,  673 => 596,  643 => 568,  610 => 537,  575 => 504,  546 => 477,  513 => 446,  480 => 415,  440 => 377,  408 => 347,  371 => 312,  319 => 262,  260 => 205,  242 => 189,  202 => 151,  160 => 114,  129 => 85,  105 => 63,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8508f69fe2d396e429787550d21eedb19fbed8fe705f112cdd1fe234b2fd4e86", "");
    }
}
