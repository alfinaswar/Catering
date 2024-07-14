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
            <a href="{{ route('order.cartview') }}"><img src="{{ asset('') }}assets/img/logo.png" alt=""></a>
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
        {{-- <nav class="humberger__menu__nav mobile-menu">
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
        </nav> --}}
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
                                <li><a href="{{ route('order.history') }}">Keranjang ku</a></li>
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
                        <h2>{{ $paket->nama }}</h2>
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
                                src="{{ asset('assets/img/banner/bgcover.png') }}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $paket->nama }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>

                        </div>
                        <form action="{{ route('order.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $paket->harga }}" name="harga">
                            <input type="hidden" value="{{ $user->customer->alamat }}" name="alamatkirim"
                                id="alamatkirim">
                            <input type="hidden" value="{{ $paket->id }}" name="idmakananhidden">
                            <div class="product__details__price" id="harga" value="{{ $paket->harga }}">Rp
                                {{ number_format($paket->harga, 0, ',', '.') }}</div>
                            <p>{{ $paket->deskripsi }}</p>
                            <label style="font-weight: bold;"><i class="fas fa-map-marker"></i> Alamat
                                Pengiriman</label>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    {{ $user->customer->alamat }}
                                </div>

                            </div>
                            <div class="product__details__quantity">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <input type="text" id="qty" name="qty" class="form-control"
                                            oninput="calculateTotal()">


                                    </div>
                                    <div class="col-sm-6">
                                        <div class="product__details__price" id="total">Rp.
                                            {{ number_format($paket->harga, 0, ',', '.') }}</div>
                                    </div>

                                </div>




                            </div>

                            <ul>
                                <h3>Paket</h3>
                                <div class="row">
                                    <div class="col-sm-9 mb-2">
                                        <label class="fw-bold"
                                            style="font-weight: bold; font-size:17;">Minuman</label>
                                        <select name="minuman" class="w-100">

                                            <option value="{{ $paket->idminuman }}">{{ $paket->nama }} - Rp.
                                                {{ number_format($paket->harga, 0, ',', '.') }}</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="fw-bold" style="font-weight: bold; font-size:17;">Kue</label>
                                        <select name="kue" class="w-100">
                                            <option value="{{ $paket->idkue }}">{{ $paket->nama }} - Rp.
                                                {{ number_format($paket->harga, 0, ',', '.') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="fw-bold" style="font-weight: bold; font-size:17;">Buah</label>
                                        <select name="buah" class="w-100">
                                            <option value="{{ $paket->idbuah }}">{{ $paket->nama }} - Rp.
                                                {{ number_format($paket->harga, 0, ',', '.') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="fw-bold"
                                            style="font-weight: bold; font-size:17;">Makanan</label>
                                        <select name="buah" class="w-100">
                                            <option value="{{ $paket->idmakanan }}">{{ $paket->nama }} - Rp.
                                                {{ number_format($paket->harga, 0, ',', '.') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="fw-bold" style="font-weight: bold; font-size:17;">Bukti
                                            Bayar</label>
                                        <input type="file" name="buktibayar"
                                            style="width: 100%; padding: 10px; margin-top: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                                    </div>
                                    <div class="col-sm-9">
                                        <br>
                                        <button type="submit" class="btn btn-primary w-100">Pesan
                                            Sekarang</button><br /><br>
                        </form>
                        <button type="button" class="btn btn-primary w-100" id="addToCart">Masukan Ke
                            Keranjang</button>


                    </div>

                </div>
                </ul>

            </div>
        </div>

        </div>
        </div>

    </section>

    @include('layouts.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    {{-- <script src="{{ asset('') }}assets/js/jquery-3.3.1.min.js"></script> --}}
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
    $(document).ready(function() {
        $('#addToCart').click(function() {
            var alamatKirim = document.getElementById('alamatkirim').value;
            var userId = {{ Auth::user()->id }};
            var idMakanan = {{ $paket->id }};
            var idMinuman = $('select[name="minuman"]').val();
            var idKue = $('select[name="kue"]').val();
            var idBuah = $('select[name="buah"]').val();
            var jumlah = document.getElementById('qty').value;
            var total = document.getElementById('total').innerText;
            total = total.replace('Rp. ', '').replace('.', '');

            $.ajax({
                url: '{{ route('order.cart') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    user_id: userId,
                    idmakanan: idMakanan,
                    jumlah: jumlah,
                    idminuman: idMinuman,
                    idkue: idKue,
                    idbuah: idBuah,
                    total: total,
                    alamatkirim: alamatKirim
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Berhasil ditambahkan ke keranjang',
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan',
                    });
                }
            });
        });
    });
</script>
<script>
    function calculateTotal() {
        var qty = document.getElementById('qty').value;
        var harga = {{ $paket->harga }};
        var total = qty * harga;

        document.getElementById('total').innerHTML = 'Rp. ' + total.toLocaleString('id-ID');
    }
</script>
