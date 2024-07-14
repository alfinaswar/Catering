<!DOCTYPE html>
<html lang="zxx">
@include('layouts.head')

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
                    <a href="{{ route('logout') }}"><i class="fa fa-user"></i> Logout</a>
                @else
                    <a href="#"><i class="fa fa-user"></i> Login</a>
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
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="{{ route('menu.allmenu') }}">Menu Catering</a></li>
                                <li><a href="{{ route('order.history') }}">Riwayat Order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">

                            <div class="header__top__right__language">
                                <img src="{{ asset('') }}assets/img/indonesia.png" alt="">
                                <div>Indonesia</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Inggris</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
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

                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
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
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('') }}assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Riwayat Pesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Order History Section Begin -->
    <section class="order-history spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="order-history__table">


                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Alamat Kirim</th>
                                    <th>Total</th>
                                    <th>Bukti Bayar</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($history as $order)
                                    <tr>
                                        <td>{{ $order->idtransaksi }}</td>
                                        <td>{{ $order->alamatKirim }}</td>
                                        <td>Rp. {{ number_format($order->total, 0, ',', '.') }}</td>
                                        <td>
                                            @if ($order->buktibayar)
                                                <a href="{{ url('storage/buktibayar/' . $order->buktibayar) }}"
                                                    target="_blank">Lihat Bukti</a>
                                            @else
                                                Tidak ada bukti
                                            @endif
                                        </td>
                                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            $(document).ready(function() {
                                $('#orderHistoryTable').DataTable();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order History Section End -->

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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


</body>

</html>
