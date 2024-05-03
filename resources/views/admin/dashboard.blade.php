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
     </a>    
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
