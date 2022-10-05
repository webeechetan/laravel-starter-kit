<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('admin/') }}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Admin Register Basic</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
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
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css" />
    <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/config.js"></script>
  </head>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <img height="40" width="40" src="{{ asset('admin/assets/img') }}/logo.png">
                  <span class="app-brand-text demo text-body fw-bolder">Starter Kit</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Laravel Starter Kit! 👋</h4>
              <p class="mb-4">Please sign-up to your account and start the adventure</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('auth.register') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    autofocus
                  />
                  @error('username')    
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email or username"
                    autofocus
                  />
                  @error('email')    
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')    
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign up</button>
                </div>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('auth.login') }}">
                  <span>Login</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <script src="{{ asset('admin/') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('admin/') }}/assets/vendor/js/menu.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
