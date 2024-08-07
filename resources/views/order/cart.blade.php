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
            <a href="#"><img src="img/logo.png" alt=""></a>
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
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
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
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li class="active"><a href="./shop-grid.html">Shop</a></li>
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
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
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
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
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
                        <h2>Keranjang Belanja</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Keranjang Belanja</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Makanan</th>
                                    <th>Minuman</th>
                                    <th>Kue</th>
                                    <th>Buah</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($keranjang as $item)
                                    @foreach ($item->details as $detail)
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <h5>
                                                    @php
                                                        $makananNama = collect($makanan)->firstWhere(
                                                            'id',
                                                            $detail->idmakanan,
                                                        );
                                                    @endphp
                                                    @if ($makananNama)
                                                        {{ $makananNama->nama }} - Rp.
                                                        {{ $makananNama->harga }} X {{ $detail->jumlah }}
                                                    @endif
                                                </h5>
                                            </td>
                                            <td class="shoping__cart__item">
                                                <h5> @php
                                                    $minuman = collect($makanan)->firstWhere('id', $detail->idminuman);
                                                @endphp
                                                    @if ($minuman)
                                                        {{ $minuman->nama }} - Rp.
                                                        {{ $minuman->harga }}
                                                    @endif
                                                </h5>
                                            </td>
                                            <td class="shoping__cart__item">
                                                <h5> @php
                                                    $kue = collect($makanan)->firstWhere('id', $detail->idkue);
                                                @endphp
                                                    @if ($kue)
                                                        {{ $kue->nama }} - Rp.
                                                        {{ $kue->harga }}
                                                    @endif
                                                </h5>
                                            </td>
                                            <td class="shoping__cart__item">
                                                <h5> @php
                                                    $buah = collect($makanan)->firstWhere('id', $detail->idbuah);
                                                @endphp
                                                    @if ($buah)
                                                        {{ $buah->nama }} - Rp.
                                                        {{ $buah->harga }}
                                                    @endif
                                                </h5>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">


                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <form method="POST" action="{{ route('order.gantistatus') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @foreach ($keranjang as $keranjang1)
                                <input type="hidden" value="{{ $keranjang1->idtransaksi }}" name="idtrx[]">
                            @endforeach
                            <h5>Total Keranjang</h5>
                            <ul>
                                <li>Total <span>
                                        @if (empty($detail))
                                            Keranjang Anda Kosong
                                        @else
                                            Rp. {{ $detail->sum('harga') }}
                                        @endif
                                    </span></li>
                                <input type="hidden" value="{{ $keranjang->sum('harga') }}" name="total">
                            </ul>
                            <h5>Bukti Bayar</h5>
                            <ul>
                                <input type="file" class="form-control" name="buktibayar">
                            </ul>
                            <button type="submit" class="primary-btn">CHECKOUT</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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
