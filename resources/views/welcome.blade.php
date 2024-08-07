<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clover</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('') }}assets/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('') }}assets/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                @if (Auth::check())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="fa fa-user"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                @endif
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#tentangkami">Tentang Kami</a></li>
                                <li><a href="{{ route('menu.allmenu') }}">Menu Catering</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">

                            <div class="header__top__right__language">
                                <img src="{{ asset('') }}assets/img/indonesia.png" alt="">
                                <div>Indonesia</div>
                                <span class="arrow_carrot-down"></span>

                            </div>
                            <div class="header__top__right__auth">
                                @if (Auth::check())
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="fa fa-user"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('') }}assets/img/food.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>

                            <li><a href="{{ route('order.cartview') }}"><i class="fa fa-shopping-bag"></i>
                                    <span>22</span></a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Paket</span>
                        </div>
                        <ul>
                            @foreach ($paket as $i)
                                <li><a href="{{ route('makanan.detailpaket', $i->id) }}">{{ $i->nama }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__form__text">
                                    <img src="{{ asset('assets/img/banner/clover.png') }}">
                                </div>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>087 875 327 739</h5>
                                <span>Ingin Bertanya ?</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg"
                        data-setbg="{{ asset('') }}assets/img/banner/AnekaJajanan.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us mb-3" id="tentangkami">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-us__image">
                        <img src="{{ asset('assets/img/banner/about.png') }}" alt="Gambaran Tentang Kami"
                            width="100%">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="text-end align-self-center">
                        <h2>Tentang Kami</h2>
                        <p>Sebagai perusahaan yang bergerak di bidang kuliner, kami berkomitmen untuk menyajikan
                            berbagai macam makanan dan minuman yang tidak hanya lezat tetapi juga berkualitas tinggi.
                            Dengan pengalaman yang telah kami miliki, kami berdedikasi untuk melayani kebutuhan kuliner
                            Anda dengan standar yang tinggi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories mt-4">
        <div class="container mt-4">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($makanan as $item)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg"
                                data-setbg="{{ url('storage/gambar/' . $item->gambar) }}">
                                <h5><a href="#">{{ $item->nama }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->

    <!-- Featured Section End -->


    <!-- Banner End -->

    <!-- Latest Product Section Begin -->

    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <!-- Blog Section End -->
    <br>
    <!-- Footer Section Begin -->
    @include('layouts.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('') }}assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('') }}assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery-ui.min.js"></script>
    <script src="{{ asset('') }}assets/js/jquery.slicknav.js"></script>
    <script src="{{ asset('') }}assets/js/mixitup.min.js"></script>
    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}assets/js/main.js"></script>



</body>

</html>
