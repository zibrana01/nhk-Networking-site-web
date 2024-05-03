<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Content navbar + Sidebar - Layouts |
    Materio -
    Bootstrap 5 HTML + Laravel Admin Template</title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 + Laravel HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="eI78kDKcQqOLtDmT2TBcClXadmteJMULYeXNweny">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/materio-bootstrap-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />

  
      <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
  <!-- End Google Tag Manager -->
    

  <!-- Include Styles -->
  <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/materialdesignicons.css?id=6dcb6840ed1b54e81c4279112d07827e" />
<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/fonts/flag-icons.css?id=121bcc3078c6c2f608037fb9ca8bce8d" />
<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc" />
<!-- Core CSS -->
<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=844d8848f059310b5530fe2f16a8521a" class="template-customizer-core-css" />
<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=52fab3455fdcaff9f4acefe519ec216b" class="template-customizer-theme-css" />
<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/css/demo.css?id=e0dd12b480da2fee900cf30c26103f98" />

<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=f83e2378d0545f439cbfea281f4852dd" />
<link rel="stylesheet" href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.css?id=97b6e7a4d886c3d71a065c4b0d0d5f54" />

<!-- Vendor Styles -->


<!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/helpers.js"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/js/config.js"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultStyle: "light",
      defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
      displayCustomizer: "true",
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=844d8848f059310b5530fe2f16a8521a',
            'core-dark.css': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=e02525be49a99197a4c9d5a84947fc8b',
          
          // Themes
                      'theme-default.css': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=52fab3455fdcaff9f4acefe519ec216b',
            'theme-default-dark.css':
            'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=c8fd4937f51751cb21fc1b850985e28d',
                      'theme-bordered.css': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=2e360cd4013a77f41e5735180028af47',
            'theme-bordered-dark.css':
            'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=0fd70b0f8c51077b53c94c534b6dea08',
                      'theme-semi-dark.css': 'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=7eb0cf231320db79df76c9cc343a9c64',
            'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=0d086bfea4ae48a5c1384981979967ac',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
    });
  </script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link">
      <span class="app-brand-logo demo me-1">
        <span style="color:#9055FD;">
  <svg width="30" height="20" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3" />
  </svg>
</span>
      </span>
      <span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
    </a>
  </div>
  
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div>Dashboards</div>
                <div class="badge bg-danger rounded-pill ms-auto">5</div>

              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../dashboard/crm.html" class="menu-link" >
                    <div>CRM</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1" class="menu-link" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/dashboard.html" class="menu-link" >
                    <div>eCommerce</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/logistics/dashboard.html" class="menu-link" >
                    <div>Logistics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/academy/dashboard.html" class="menu-link" >
                    <div>Academy</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item active open">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                <div>Layouts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="collapsed-menu.html" class="menu-link" >
                    <div>Collapsed menu</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="content-navbar.html" class="menu-link" >
                    <div>Content navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item active">
        <a href="content-nav-sidebar.html" class="menu-link" >
                    <div>Content nav + Sidebar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="horizontal.html" class="menu-link"  target="_blank" >
                    <div>Horizontal</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="without-menu.html" class="menu-link" >
                    <div>Without menu</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="without-navbar.html" class="menu-link" >
                    <div>Without navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="fluid.html" class="menu-link" >
                    <div>Fluid</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="container.html" class="menu-link" >
                    <div>Container</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="blank.html" class="menu-link"  target="_blank" >
                    <div>Blank</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                <div>Front Pages</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../front-pages/landing.html" class="menu-link"  target="_blank" >
                    <div>Landing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../front-pages/pricing.html" class="menu-link"  target="_blank" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../front-pages/payment.html" class="menu-link"  target="_blank" >
                    <div>Payment</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../front-pages/checkout.html" class="menu-link"  target="_blank" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../front-pages/help-center.html" class="menu-link"  target="_blank" >
                    <div>Help Center</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-language-php"></i>
                <div>Laravel Example</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../laravel/user-management.html" class="menu-link" >
                    <div>User Management</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header fw-medium mt-4">
      <span class="menu-header-text">Apps &amp; Pages</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../app/email.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                <div>Email</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../app/chat.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                <div>Chat</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../app/calendar.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                <div>Calendar</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../app/kanban.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                <div>Kanban</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-cart-outline"></i>
                <div>eCommerce</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Products</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/product/list.html" class="menu-link" >
                    <div>Product List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/product/add.html" class="menu-link" >
                    <div>Add Product</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/product/category.html" class="menu-link" >
                    <div>Category List</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Order</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/order/list.html" class="menu-link" >
                    <div>Order List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/order/details.html" class="menu-link" >
                    <div> Order Details</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/customer/all.html" class="menu-link" >
                    <div>All Customers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer Details</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/customer/details/overview.html" class="menu-link" >
                    <div>Overview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/customer/details/security.html" class="menu-link" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/customer/details/billing.html" class="menu-link" >
                    <div>Address &amp; Billing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/customer/details/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/manage/reviews.html" class="menu-link" >
                    <div>Manage Reviews</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/referrals.html" class="menu-link" >
                    <div>Referrals</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Settings</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/settings/details.html" class="menu-link" >
                    <div>Store details</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/settings/payments.html" class="menu-link" >
                    <div>Payments</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/settings/checkout.html" class="menu-link" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/settings/shipping.html" class="menu-link" >
                    <div>Shipping &amp; Delivery</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/settings/locations.html" class="menu-link" >
                    <div>Locations</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/ecommerce/settings/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
                <div>Academy</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/academy/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/academy/course.html" class="menu-link" >
                    <div>My Course</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/academy/course-details.html" class="menu-link" >
                    <div>Course Details</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
                <div>Logistics</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/logistics/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/logistics/fleet.html" class="menu-link" >
                    <div>Fleet</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-content-paste"></i>
                <div>Invoice</div>
                <div class="badge bg-danger rounded-pill ms-auto">4</div>

              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/invoice/list.html" class="menu-link" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/invoice/preview.html" class="menu-link" >
                    <div>Preview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/invoice/edit.html" class="menu-link" >
                    <div>Edit</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/invoice/add.html" class="menu-link" >
                    <div>Add</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                <div>Users</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/user/list.html" class="menu-link" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>View</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/user/view/account.html" class="menu-link" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/user/view/security.html" class="menu-link" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/user/view/billing.html" class="menu-link" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/user/view/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/user/view/connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-cog-outline"></i>
                <div>Roles &amp; Permissions</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../app/access-roles.html" class="menu-link" >
                    <div>Roles</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../app/access-permission.html" class="menu-link" >
                    <div>Permission</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div>Pages</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>User Profile</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../pages/profile-user.html" class="menu-link" >
                    <div>Profile</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/profile-teams.html" class="menu-link" >
                    <div>Teams</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/profile-projects.html" class="menu-link" >
                    <div>Projects</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/profile-connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Account Settings</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../pages/account-settings-account.html" class="menu-link" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/account-settings-security.html" class="menu-link" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/account-settings-billing.html" class="menu-link" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/account-settings-notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/account-settings-connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/faq.html" class="menu-link" >
                    <div>FAQ</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/pricing.html" class="menu-link" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Misc</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../pages/misc-error.html" class="menu-link"  target="_blank" >
                    <div>Error</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/misc-under-maintenance.html" class="menu-link"  target="_blank" >
                    <div>Under Maintenance</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/misc-comingsoon.html" class="menu-link"  target="_blank" >
                    <div>Coming Soon</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/misc-not-authorized.html" class="menu-link"  target="_blank" >
                    <div>Not Authorized</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../pages/misc-server-error.html" class="menu-link"  target="_blank" >
                    <div>Server Error</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-lock-open-outline"></i>
                <div>Authentications</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Login</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../auth/login-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/login-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Register</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../auth/register-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/register-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/register-multisteps.html" class="menu-link"  target="_blank" >
                    <div>Multi-steps</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Verify Email</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../auth/verify-email-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/verify-email-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Reset Password</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../auth/reset-password-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/reset-password-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Forgot Password</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../auth/forgot-password-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/forgot-password-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Two Steps</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../auth/two-steps-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../auth/two-steps-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-dots-horizontal"></i>
                <div>Wizard Examples</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../wizard/ex-checkout.html" class="menu-link" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../wizard/ex-property-listing.html" class="menu-link" >
                    <div>Property Listing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../wizard/ex-create-deal.html" class="menu-link" >
                    <div>Create Deal</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../modal-examples.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-open-in-new"></i>
                <div>Modal Examples</div>
              </a>

      
          </li>
        
    

    
        <li class="menu-header fw-medium mt-4">
      <span class="menu-header-text">Components</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                <div>Cards</div>
                <div class="badge bg-primary rounded-pill ms-auto">6</div>

              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../cards/basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../cards/advance.html" class="menu-link" >
                    <div>Advance</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../cards/statistics.html" class="menu-link" >
                    <div>Statistics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../cards/analytics.html" class="menu-link" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../cards/gamifications.html" class="menu-link" >
                    <div>Gamifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../cards/actions.html" class="menu-link" >
                    <div>Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                <div>User interface</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../ui/accordion.html" class="menu-link" >
                    <div>Accordion</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/alerts.html" class="menu-link" >
                    <div>Alerts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/badges.html" class="menu-link" >
                    <div>Badges</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/buttons.html" class="menu-link" >
                    <div>Buttons</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/carousel.html" class="menu-link" >
                    <div>Carousel</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/collapse.html" class="menu-link" >
                    <div>Collapse</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/dropdowns.html" class="menu-link" >
                    <div>Dropdowns</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/footer.html" class="menu-link" >
                    <div>Footer</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/list-groups.html" class="menu-link" >
                    <div>List groups</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/modals.html" class="menu-link" >
                    <div>Modals</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/navbar.html" class="menu-link" >
                    <div>Navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/offcanvas.html" class="menu-link" >
                    <div>Offcanvas</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/pagination-breadcrumbs.html" class="menu-link" >
                    <div>Pagination &amp; Breadcrumbs</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/progress.html" class="menu-link" >
                    <div>Progress</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/spinners.html" class="menu-link" >
                    <div>Spinners</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/tabs-pills.html" class="menu-link" >
                    <div>Tabs &amp; Pills</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/toasts.html" class="menu-link" >
                    <div>Toasts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/tooltips-popovers.html" class="menu-link" >
                    <div>Tooltips &amp; popovers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../ui/typography.html" class="menu-link" >
                    <div>Typography</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                <div>Extended UI</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../extended/ui-avatar.html" class="menu-link" >
                    <div>Avatar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-blockui.html" class="menu-link" >
                    <div>BlockUI</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-drag-and-drop.html" class="menu-link" >
                    <div>Drag &amp; Drop</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-media-player.html" class="menu-link" >
                    <div>Media Player</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-perfect-scrollbar.html" class="menu-link" >
                    <div>Perfect scrollbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-star-ratings.html" class="menu-link" >
                    <div>Star Ratings</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-sweetalert2.html" class="menu-link" >
                    <div>SweetAlert2</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-text-divider.html" class="menu-link" >
                    <div>Text Divider</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Timeline</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../extended/ui-timeline-basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-timeline-fullscreen.html" class="menu-link" >
                    <div>Fullscreen</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-tour.html" class="menu-link" >
                    <div>Tour</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-treeview.html" class="menu-link" >
                    <div>Treeview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../extended/ui-misc.html" class="menu-link" >
                    <div>Miscellaneous</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../icons/icons-mdi.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                <div>Icons</div>
              </a>

      
          </li>
        
    

    
        <li class="menu-header fw-medium mt-4">
      <span class="menu-header-text">Forms &amp; Tables</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                <div>Form Elements</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../forms/basic-inputs.html" class="menu-link" >
                    <div>Basic Inputs</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/input-groups.html" class="menu-link" >
                    <div>Input groups</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/custom-options.html" class="menu-link" >
                    <div>Custom Options</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/editors.html" class="menu-link" >
                    <div>Editors</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/file-upload.html" class="menu-link" >
                    <div>File Upload</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/pickers.html" class="menu-link" >
                    <div>Pickers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/selects.html" class="menu-link" >
                    <div>Select &amp; Tags</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/sliders.html" class="menu-link" >
                    <div>Sliders</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/switches.html" class="menu-link" >
                    <div>Switches</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../forms/extras.html" class="menu-link" >
                    <div>Extras</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                <div>Form Layouts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../form/layouts-vertical.html" class="menu-link" >
                    <div>Vertical Form</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../form/layouts-horizontal.html" class="menu-link" >
                    <div>Horizontal Form</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../form/layouts-sticky.html" class="menu-link" >
                    <div>Sticky Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-dots-horizontal"></i>
                <div>Form Wizard</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../form/wizard-numbered.html" class="menu-link" >
                    <div>Numbered</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../form/wizard-icons.html" class="menu-link" >
                    <div>Icons</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../form/validation.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                <div>Form Validation</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../tables/basic.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-table"></i>
                <div>Tables</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-grid"></i>
                <div>Datatables</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../tables/datatables-basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../tables/datatables-advanced.html" class="menu-link" >
                    <div>Advanced</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../tables/datatables-extensions.html" class="menu-link" >
                    <div>Extensions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header fw-medium mt-4">
      <span class="menu-header-text">Charts &amp; Maps</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                <div>Charts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="../charts/apex.html" class="menu-link" >
                    <div>Apex Charts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="../charts/chartjs.html" class="menu-link" >
                    <div>ChartJS</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="../maps/leaflet.html" class="menu-link" >
                <i class="menu-icon tf-icons mdi mdi-map-outline"></i>
                <div>Leaflet Maps</div>
              </a>

      
          </li>
        
    

    
        <li class="menu-header fw-medium mt-4">
      <span class="menu-header-text">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="https://themeselection.com/support/" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                <div>Support</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a data-dir="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/aewsome" href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/laravel-introduction.html" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div>Documentation</div>
              </a>

      
          </li>
          </ul>

</aside>
    

    <!-- Layout page -->
    <div class="layout-page">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="mdi mdi-menu mdi-24px"></i>
        </a>
      </div>
      
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
              <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
              <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          
          <!-- Language -->
          <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='mdi mdi-translate mdi-24px'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-2">
              <li>
                <a class="dropdown-item active" href="../lang/en.html" data-language="en">
                  <span class="align-middle">English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item " href="../lang/fr.html" data-language="fr">
                  <span class="align-middle">French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item " href="../lang/de.html" data-language="de">
                  <span class="align-middle">German</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item " href="../lang/pt.html" data-language="pt">
                  <span class="align-middle">Portuguese</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ Language -->

                    <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='mdi mdi-24px'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='mdi mdi-weather-sunny me-2'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->
          
          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class='mdi mdi-view-grid-outline mdi-24px'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="mb-0 me-auto">Shortcuts</h6>
                  <a href="javascript:void(0)" class="dropdown-shortcuts-add text-heading" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="mdi mdi-plus mdi-24px"></i></a>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-calendar-blank mdi-24px"></i>
                    </span>
                    <a href="../app/calendar.html" class="stretched-link">Calendar</a>
                    <small>Appointments</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi mdi-content-paste mdi-24px"></i>
                    </span>
                    <a href="../app/invoice/list.html" class="stretched-link">Invoice App</a>
                    <small>Manage Accounts</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-account-outline mdi-24px"></i>
                    </span>
                    <a href="../app/user/list.html" class="stretched-link">User App</a>
                    <small>Manage Users</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-shield-check-outline mdi-24px"></i>
                    </span>
                    <a href="../app/access-roles.html" class="stretched-link">Role Management</a>
                    <small>Permission</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-monitor mdi-24px"></i>
                    </span>
                    <a href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                    <small>Analytics</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-cog-outline mdi-24px"></i>
                    </span>
                    <a href="../pages/account-settings-account.html" class="stretched-link">Setting</a>
                    <small>Account Settings</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-help-circle-outline mdi-24px"></i>
                    </span>
                    <a href="../pages/faq.html" class="stretched-link">FAQs</a>
                    <small class="text-muted mb-0">FAQs & Articles</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon bg-label-secondary text-heading rounded-circle mb-3">
                      <i class="mdi mdi-dock-window mdi-24px"></i>
                    </span>
                    <a href="../modal-examples.html" class="stretched-link">Modals</a>
                    <small>Useful Popups</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="mdi mdi-bell-outline mdi-24px"></i>
              <span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h6 class="fw-normal mb-0 me-auto">Notification</h6>
                  <span class="badge rounded-pill bg-label-primary">8 New</span>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                        <small class="text-truncate text-body">Won the monthly best seller gold badge</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">1h ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                        <small class="text-truncate text-body">Accepted your connection</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">12hr ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                        <small class="text-truncate text-body">You have new message from Natalie</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">1h ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-cart-outline"></i></span>
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒 </h6>
                        <small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">1 day ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">Application has been approved 🚀 </h6>
                        <small class="text-truncate text-body">Your ABC project application has been approved.</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">2 days ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-chart-pie-outline"></i></span>
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                        <small class="text-truncate text-body">July monthly financial report is generated </small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">3 days ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">Send connection request</h6>
                        <small class="text-truncate text-body">Peter sent you connection request</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">4 days ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1 text-truncate">New message from Jane</h6>
                        <small class="text-truncate text-body">Your have new message from Jane</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">5 days ago</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex align-items-center gap-2">
                      <div class="flex-shrink-0">
                        <div class="avatar me-1">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="mdi mdi-alert-circle-outline"></i></span>
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-250">
                        <h6 class="mb-1">CPU is running high</h6>
                        <small class="text-truncate text-body">CPU Utilization Percent is currently at 88.63%,</small>
                      </div>
                      <div class="flex-shrink-0 dropdown-notifications-actions">
                        <small class="text-muted">5 days ago</small>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown-menu-footer border-top p-3">
                <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">Read all notifications</a>
              </li>
            </ul>
          </li>
          <!--/ Notification -->

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
              <li>
                <a class="dropdown-item pb-2 mb-1" href="../pages/profile-user.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2 pe-1">
                      <div class="avatar avatar-online">
                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0">
                                                John Doe
                                              </h6>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-0"></div>
              </li>
              <li>
                <a class="dropdown-item" href="../pages/profile-user.html">
                  <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
                            <li>
                <a class="dropdown-item" href="../pages/account-settings-billing.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                    <span class="flex-grow-1 align-middle ms-1">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                  </span>
                </a>
              </li>
                            <li>
                <div class="dropdown-divider"></div>
              </li>
                            <li>
                <a class="dropdown-item" href="../auth/login-basic.html">
                  <i class="mdi mdi-logout me-1 mdi-20px"></i>
                  <span class="align-middle">Login</span>
                </a>
              </li>
                          </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="mdi mdi-close search-toggler cursor-pointer"></i>
      </div>
      <!--/ Search Small Screens -->
        </nav>
  <!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                <div class="container-xxl d-flex align-items-stretch flex-grow-1 p-0">
          
            <div class="flex-shrink-1 flex-grow-0 w-px-350 border-end container-p-x container-p-y">
  <div class="layout-example-sidebar layout-example-content-inner">
    Sidebar
  </div>
</div>

<div class="flex-shrink-1 flex-grow-1 container-p-x container-p-y">
  <!-- Layout Demo -->
  <div class="layout-demo-wrapper">
    <div class="layout-demo-placeholder">
      <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/layouts/layout-content-navbar-and-sidebar-light.png" class="img-fluid" alt="Layout content navbar + sidebar" data-app-light-img="layouts/layout-content-navbar-and-sidebar-light.png" data-app-dark-img="layouts/layout-content-navbar-and-sidebar-dark.png">
    </div>
    <div class="layout-demo-info">
      <h4>Layout content navbar + sidebar</h4>
      <p>Container layout sets a <code>max-width</code> at each responsive breakpoint.</p>
    </div>
  </div>
  <!--/ Layout Demo -->
</div>

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
      <div class="text-body mb-2 mb-md-0">
        © <script>
          document.write(new Date().getFullYear())
        </script>, made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
      </div>
      <div  class="d-none d-lg-inline-block">
        <a href="https://themeselection.com/license/" class="footer-link me-3" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-3">More Themes</a>
        <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-3">Documentation</a>
        <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  
  <div class="buy-now">
    <a href="https://themeselection.com/item/materio-bootstrap-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/jquery/jquery.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/popper/popper.js?id=baf82d96b7771efbcc05c3b77135d24c"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/bootstrap.js?id=4b1a450d7bd34439656711e022110b65"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/node-waves/node-waves.js?id=4fae469a3ded69fb59fce3dcc14cd638"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=44b8e955848dc0c56597c09f6aebf89a"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/hammer/hammer.js?id=0a520e103384b609e3c9eb3b732d1be8"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/typeahead-js/typeahead.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/vendor/js/menu.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/js/main.js?id=e46da52cc43e079943fb6810bf346c25"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>

</html>
