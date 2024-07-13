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
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Paket Nikahan</a></li>
                            <li><a href="./blog.html">Paket Sunat</a></li>
                            <li><a href="./contact.html">Paket Ultah</a></li>
                            <li><a href="./contact.html">Paket Hemat</a></li>
                            <li><a href="./contact.html">Tumpeng dan Hantaran</a></li>
                        </ul>
                    </nav>
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
                        <h2>{{ $detail->nama }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ url('storage/gambar/' . $detail->gambar) }}"
                                alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $detail->nama }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>

                        </div>
                        <form action="{{route('order.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="text" value="{{$detail->harga}}" name="harga">
                            <input type="text" value="alamat" name="alamatkirim">
                        <div class="product__details__price" id="harga" value="{{$detail->harga}}">Rp {{ number_format($detail->harga, 0, ',', '.') }}</div>
                        <p>{{ $detail->deskripsi }}</p>
                        <label style="font-weight: bold;"><i class="fas fa-map-marker"></i> Alamat Pengiriman</label>
                       <div class="row">
                                <div class="col-sm-6">
                                    123123
                                </div>

                            </div>
                        <div class="product__details__quantity">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" id="qty" id="qty" oninput="calculateTotal()">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product__details__price" id="total">Rp. {{ number_format($detail->harga, 0, ',', '.') }}</div>
                                </div>

                            </div>




                        </div>

                        <ul>
                            <h3>Pesanan Tambahan</h3>
                           <div class="row">
    <div class="col-sm-9 mb-2">
    <label class="fw-bold" style="font-weight: bold; font-size:17;">Minuman</label>
      <select name="minuman" class="w-100">
        @foreach ($minuman as $x)
        <option value="{{$x->id}}">{{$x->nama}} - Rp. {{ number_format($x->harga, 0, ',', '.') }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-sm-9">
    <label class="fw-bold" style="font-weight: bold; font-size:17;">Kue</label>
      <select name="kue" class="w-100">
        @foreach ($kue as $x)
        <option value="{{$x->id}}">{{$x->nama}} - Rp. {{ number_format($x->harga, 0, ',', '.') }}</option>
        @endforeach
      </select>
    </div>
        <div class="col-sm-9">
    <label class="fw-bold" style="font-weight: bold; font-size:17;">Buah</label>
      <select name="buah" class="w-100">
        @foreach ($buah as $x)
        <option value="{{$x->id}}">{{$x->nama}} - Rp. {{ number_format($x->harga, 0, ',', '.') }}</option>
        @endforeach
      </select>
    </div>
            <div class="col-sm-9">
    <label class="fw-bold" style="font-weight: bold; font-size:17;">Bukti Bayar</label>
      <input type="file" name="buktibayar" style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
    </div>
     <div class="col-sm-9">
        <br>
        <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button><br/><br>
        <a href="" class="btn btn-primary w-100">Masukan Ke Keranjang</a>
    </div>

  </div>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </form>
    </section>

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
<script>
$(document).ready(function () {
    var harga = document.getElementById('harga').getAttribute('value');
    console.log($harga);
});
</script>
