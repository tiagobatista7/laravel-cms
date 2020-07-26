<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
</head>

<body>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <div class="titulo-site-logo-grande">{{$front_config['title']}}</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">

                                        @foreach ($front_menu as $menuslug => $menutitle)
                                            <li>
                                            <a href="{{$menuslug}}">{{$menuslug}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->


    @yield('content')

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <div class="titulo-site-logo-pequeno">{{$front_config['title']}}</div>
                                </a>
                            </div>


                                <p>
                                    <strong>Endereço: </strong> {{$front_config['endereco']}}
                                </p><br/>

                                <p>
                                    E-mail: {{$front_config['email']}}
                                </p>

                                <p>
                                    Telefone: {{$front_config['telefone']}}
                                </p>
                                <p>
                                    Whatsapp: {{$front_config['whatsapp']}}
                                </p>

                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="{{$front_config['facebook']}}" target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$front_config['twitter']}}" target="_blank">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$front_config['instagram']}}" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Menu
                            </h3>
                            <ul>
                                @foreach ($front_menu as $menuslug => $menutitle)
                                    <li>
                                    <a href="{{$menuslug}}">{{$menuslug}}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Downloads
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Download na Apple Store

                                    </a>
                                </li>
                                <li><a href="#">
                                        Download no Play Store
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Desenvolvido por <a href="http://www.tsbtecnologia.info/" target="_blank">Tiago Batista</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="{{asset('/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/assets/js/scrollIt.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('/assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins.js')}}"></script>
    <script src="{{asset('/assets/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('/assets/js/contact.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/assets/js/mail-script.js')}}"></script>

    <script src="{{asset('/assets/js/main.js')}}"></script>

</body>

</html>
