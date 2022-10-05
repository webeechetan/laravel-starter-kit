<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('admin/') }}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <title>@yield('title','Starter Kit Admin')</title>

    <meta name="description" content="@yield('metaDescription')" />
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/') }}/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/config.js"></script>
    @yield('header')
  </head>
  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <x-sidebar />
        <div class="layout-page">
          <x-navbar />
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <x-footer />
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <x-toast />
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/js/menu.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/main.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/dashboards-analytics.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/ui-toasts.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @stack('scripts')
    @if(session()->has('toast'))
      @php
          $toast = Session::get('toast');
          $toastHead = $toast['head'];
          $toastBody = $toast['body'];
          $toastType = $toast['type'];
      @endphp
      <script>
        toast('{{ $toastHead }}','{{ $toastBody }}','{{ $toastType }}');
      </script>
    @endif
    @yield('footer')
  </body>
</html>
