@php
    $normal_gallary_notice = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', 'Normal')
    
        ->orderBy('position', 'ASC')
        ->get();
    
    $menus = App\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    $global_setting = App\Models\GlobalSetting::all()->first();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
@endphp

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - SRS OVERSEAS PRIVATE LIMITED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/website/images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/website/images/favicon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/website/assets/css/bootstrap.css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/website/assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="/website/assets/css/main.css">
</head>

<body>
    @if (Session::has('contact'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Sucessfully Applyed !!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif


    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header site-header">
            <div class="header__outer">
                <div class="header__inner header--fixed">
                    <div class="header__middle">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="header__middle-inner">
                                        <div class="header__middle-left">
                                            <div class="logo">
                                                <a href="/" class="logo--normal">
                                                    <img src="/uploads/icons/{{ $global_setting->site_logo }}"
                                                        alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="header__middle-center">
                                            <nav class="main-navigation text-center d-none d-lg-block">
                                                @foreach ($menus as $menu)
                                                    <li class="mainmenu__item menu-item-has-children">

                                                        @if ($menu->nav_name == 'aboutus' || $menu->nav_name == 'gallery')
                                                            <a href="#"
                                                                class="mainmenu__link">{{ $menu->caption }}</a>
                                                        @else
                                                            <a href="/{{ $menu->nav_name }}" class="mainmenu__link">
                                                                <span data-hover="About Us"
                                                                    class="mm-text">{{ $menu->caption }}</span>
                                                            </a>
                                                        @endif



                                                        @if ($menu->childs->count() > 0)
                                                            <ul class="sub-menu">
                                                                @foreach ($menu->childs as $submenu)
                                                                    <li>
                                                                        <a
                                                                            href="/{{ $menu->nav_name }}/{{ $submenu->nav_name }}">
                                                                            <span data-hover="About Us"
                                                                                class="mm-text">{{ $submenu->caption }}</span>
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                                <li class="mainmenu__item">
                                                    <a href="/contact" class="mainmenu__link">
                                                        <span data-hover="Contact Us" class="mm-text">Contact Us</span>
                                                    </a>
                                                </li>
                                            </nav>
                                        </div>
                                        <div class="header__middle-right">
                                            <div class="site-info--wrapper d-none d-lg-block">
                                                <div class="site-info">
                                                    <div class="site-info__item">
                                                        <a
                                                            href="tel:{{ $global_setting->phone }}"><strong>{{ $global_setting->phone }}</strong></a>,
                                                        <a
                                                            href="tel:{{ $global_setting->nepali_phone }}"><strong>{{ $global_setting->phone_ne }}</strong></a>
                                                        <a
                                                            href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header-toolbar-wrap d-block d-lg-none">
                                                <div class="header-toolbar">
                                                    <a href="#offcanvasMenu"
                                                        class="header-toolbar__btn toolbar-btn menu-btn">
                                                        <div class="hamburger-icon">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sticky-header-height"></div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">

            @yield('content')
            <!-- Slider area Start -->

            <!-- About Area Start -->

            <!-- Job Category Area Start -->

            <!-- Job Category Area End -->

            <!-- Message Area Start -->

            <!-- Latest Job Area Start -->

            <!-- Brand Logo Area Start -->
        </main>
        <!-- Main Content Wrapper End -->

        <!-- Footer Start-->
        <footer class="footer bg-color" data-bg-color="#F6F7FA">
            <div class="footer-top border-bottom pt--70 pb--65 pb-sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 mb-md--35">
                            <div class="footer-widget">
                                <div class="textwidget mb--21">
                                    <figure class="footer-logo">
                                        <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="Logo">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 offset-md-1 mb-md--35 mb-sm--25">
                            <div class="footer-widget">
                                <h3 class="widget-title mb--20 mb-sm--20">About Us</h3>
                                <div class="footer-widget">
                                    <ul class="footer-menu">
                                        <li><a href="/about-one">About Company</a></li>
                                        <li><a href="/legal-document">Legal Documents</a></li>
                                        <li><a href="/organization-chart">Organization Chart</a></li>
                                        <li><a href="/terms-and-conditions">Terms & Condition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-7 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title mb--20 mb-sm--20">Useful Links</h3>
                                <div class="footer-widget">
                                    <ul class="footer-menu">
                                        <li><a href="/job">Job</a></li>
                                        <li><a href="/photo-gallery">Gallery</a></li>
                                        {{-- <li><a href="/photogallery">Gallery</a></li> --}}
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-widget">
                                <h3 class="widget-title mb--20 mb-sm--20">Get in Touch</h3>
                                <div class="footer-widget">
                                    <ul class="footer-menu">
                                        <li>{{ $global_setting->website_full_address }}</li>
                                        <li><a href="tel:014418667">{{ $global_setting->phone }}</a>, <a
                                                href="tel:014430423">{{ $global_setting->phone_ne }}</a></li>
                                        <li><a
                                                href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>,
                                            <a
                                                href="mailto:{{ $global_setting->page_description }}">{{ $global_setting->page_description }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb--17">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copyright-text">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                SRS Overseas Pvt. Ltd. All Rights Reserved. Developed by <a
                                    href="http://radiantnepal.com/" target="_blank">Radiant Infotech Nepal</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
            <div class="offcanvas-menu-inner">
                <a href="" class="btn-close">
                    <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="Cross">
                </a>
                <nav class="offcanvas-navigation">
                    @foreach ($menus as $menu)
                        <ul class="offcanvas-menu">
                            <li class="menu-item-has-children">
                                 {{-- @if ($menu->nav_name == 'aboutus' || $menu->nav_name == 'jobs'(for nabin understand)) --}} 
                                @if ($menu->nav_name == 'aboutus' || $menu->nav_name == 'gallery')
                                    <a href="#" class="mm-text">{{ $menu->caption }}</a>
                                @else
                                    <a href="/{{ $menu->nav_name }}" class="menu-item-has-children">
                                        <span data-hover="About Us" class="mm-text">{{ $menu->caption }}</span>
                                    </a>
                                @endif
                                @if ($menu->childs->count() > 0)   
                                    <ul class="sub-menu">
                                        @foreach ($menu->childs as $submenu) 
                                            <li> 
                                                <a href="/{{ $menu->nav_name }}/{{ $submenu->nav_name }}">
                                                    <span data-hover="About Us"
                                                        class="mm-text">{{ $submenu->caption }}</span>
                                                </a> 
                                            </li> 
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        </ul>
                       
                    @endforeach
                    
                    <a style="font-size: 15px" href="/contact">
                        <span class="mm-text">Contact Us</span>
                    </a>
                  
                    
                    <div class="site-info vertical">
                        <div class="site-info__item">
                            <a href="tel:{{ $global_setting->phone }}"><strong>{{ $global_setting->phone }}</strong></a>
                            <a href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- OffCanvas Menu End -->

        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Global Overlay Start -->
        <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
        <!-- Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->


    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <!-- Global Overlay End -->

    <!-- Global Overlay Start -->
    <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
    <!-- Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->


    <!-- jQuery JS -->
    <script src="/website/assets/js/vendor.js"></script>
    <script src="http://www.loginoverseas.com/website/js/popper.min.js"></script>
    <!-- Main JS -->
    <script src="/website/assets/js/main.js"></script>

    <script type="text/javascript">
        function closeForm() {
            $('.form-popup-bg').removeClass('is-visible');
        }

        $(document).ready(function($) {

            /* Contact Form Interactions */
            $('#btnOpenForm').on('click', function(event) {
                event.preventDefault();

                $('.form-popup-bg').addClass('is-visible');
            });

            //close popup when clicking x or off popup
            $('.form-popup-bg').on('click', function(event) {
                if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });



        });
        $(document).ready(function($) {

            /* Contact Form Interactions */
            $('#btnOpenFormbutton').on('click', function(event) {
                event.preventDefault();

                $('.form-popup-bg').addClass('is-visible');
            });

            //close popup when clicking x or off popup
            $('.form-popup-bg').on('click', function(event) {
                if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });



        });
    </script>

 <!-- gllery js -->
 <script src="/website/assets/js/gallery/picturefill.min.js"></script>
 <script src="/website/assets/js/gallery/lightgallery.js"></script>
 <script src="/website/assets/js/gallery/lg-pager.js"></script>
 <script src="/website/assets/js/gallery/lg-autoplay.js"></script>
 <script src="/website/assets/js/gallery/lg-fullscreen.js"></script>
 <script src="/website/assets/js/gallery/lg-zoom.js"></script>
 <script src="/website/assets/js/gallery/lg-hash.js"></script>
 <script src="/website/assets/js/gallery/lg-share.js"></script>

 <script type="text/javascript">lightGallery(document.getElementById('lightgallery'));</script>


</body>

</html>
