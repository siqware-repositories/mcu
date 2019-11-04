<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siqware - @yield('page-title')</title>
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    @stack('css')
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('backend/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('backend/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    @stack('js')
    <!-- /core JS files -->
    @routes
    <!-- Theme JS files -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('page-script')
    <!-- /theme JS files -->

</head>

<body>

@include('layouts.backend-nav')

<!-- Page content -->
<div class="page-content">
    @include('layouts.backend-sidebar')
    <!-- Main content -->
    <div class="content-wrapper">
        @yield('page-content')
        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">Text link</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">
                            <i class="icon-lifebuoy"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold">
								<span class="text-pink-400">
									<i class="icon-cart2 mr-2"></i>
									Purchase
								</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
