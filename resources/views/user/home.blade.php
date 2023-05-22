@extends('index')

@section('content')
    <!-- =============== main-slider =============== -->
    <section class="s-main-slider">
        <div class="main-slide-navigation"></div>
        <ul class="main-soc-list">
            <li><a href="https://facebook.com/ciliwungcamp">facebook</a></li>
            <li><a href="https://twitter.com/ciliwungcamp">twitter</a></li>
            <li><a href="https://www.instagram.com/ciliwungcamp">instagram</a></li>
        </ul>
        <div class="main-slider">
            @foreach ($home as $hm)
            <div class="main-slide">
                <div class="main-slide-bg" style="background-image: url(assets/img/bg-slider-2.svg);"></div>
                <div class="container">
                    <div class="main-slide-info">
                        <h2 class="title">Ciliwung Camp</h2>
                        <p style="color: #ffd910;">Go far beyond the expectation</p>
                        <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                    </div>
                    <div class="slide-img-cover">
                        <a href="single-shop.html" class="lable-bike">
                            <div class="lable-bike-item">
                                <div class="model">{{$hm->nama}}</div>
                                <div class="price">Rp. {{$hm->harga}} / hari</div>
                            </div>
                        </a>
                        <img src="{{asset('storage/' . $hm->foto)}}" alt="img" class="slide-img">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- ============= main-slider end ============= -->

    <!--================ S-FIND-BIKE ================-->
    <section class="s-find-bike">
        <div class="container">
            <form class="find-bike-form">
                <h2 class="title">Apa Yang Kamu Cari?</h2>
                <ul class="form-wrap" style="justify-content: center;">
                    <li>
                        <label>Kategori</label>
                        <select class="nice-select">
                            @foreach ($kategori as $kt)
                            <option value="{{$kt->id}}">{{$kt->nama}}</option>
                            @endforeach
                        </select>
                    </li>
                    <!-- <li>
                        <label>Wheel Size</label>
                        <select class="nice-select">
                            <option selected="selected">20</option>
                            <option>24</option>
                            <option>26</option>
                            <option>27</option>
                            <option>27.5</option>
                            <option>28</option>
                        </select>
                    </li>
                    <li>
                        <label>Brand</label>
                        <select class="nice-select">
                            <option selected="selected">Pinarello</option>
                            <option>Eddy Merckx</option>
                            <option>Specialized</option>
                            <option>Giant</option>
                            <option>Trek</option>
                            <option>BMC</option>
                        </select>
                    </li> -->
                    <li><a href="shop.html" class="btn"><span>Cari</span></a></li>
                </ul>
            </form>
        </div>
    </section>
    <!--============== S-FIND-BIKE END ==============-->

    <!--============== S-CATEGORY-BICYKLE ==============-->
    <section class="s-category-bicycle">
        <div class="container">
            <div class="slider-categ-bicycle">
                @foreach($kategori as $kt)
                <div class="slide-categ-bicycle">
                    <div class="categ-bicycle-item">
                        <img src="{{asset ('assets/user/img/categ-3.png')}}" alt="category">
                        <div class="categ-bicycle-info">
                            <h4 class="title">{{$kt->nama}}</h4>
                            <a href="shop.html" class="btn"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--============ S-CATEGORY-BICYKLE END ============-->

    <!--=============== S-OUR-ADVANTAGES ===============-->
    <section class="s-our-advantages" style="background-color: #323a44">
        <span class="mask"></span>
        <div class="container">
            <h2 class="title">Kelebihan Kami</h2>
            <div class="our-advantages-wrap">
                <div class="our-advantages-item">
                    <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/advantages-1.svg')}}"
                        alt="icon">
                    <h5>Free shipping <br>from $500</h5>
                </div>
                <div class="our-advantages-item">
                    <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/advantages-2.svg')}}"
                        alt="icon">
                    <h5>Warranty service <br>for 3 months</h5>
                </div>
                <div class="our-advantages-item">
                    <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/advantages-3.svg')}}"
                        alt="icon">
                    <h5>Exchange and return <br>within 14 days</h5>
                </div>
                <div class="our-advantages-item">
                    <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/advantages-4.svg')}}"
                        alt="icon">
                    <h5>Discounts for <br>customers</h5>
                </div>
            </div>
        </div>
    </section>
    <!--============= S-OUR-ADVANTAGES END =============-->

    <!--================== S-PRODUCTS ==================-->
    <section class="s-products">
        <div class="container-fluid">
            <div class="tab-wrap">
                <div class="products-title-cover">
                    <h2 class="title">Top Rent</h2>
                    <ul class="tab-nav product-tabs">
                        <li class="item" rel="tab1"><span>All</span></li>
                        {{-- <li class="item" rel="tab2"><span>Road bike</span></li>
                        <li class="item" rel="tab3"><span>City bike</span></li>
                        <li class="item" rel="tab4"><span>BMX bike</span></li> --}}
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab tab1">
                        <div class="row product-cover">
                            @foreach ($home as $key => $hm)
                            @if($key < 4)
                            <div class="col-6 col-md-3 prod-item-col">
                                <div class="product-item">
                                    <a href="single-shop.html" class="product-img">
                                        <img src="{{asset('storage/'.$hm->foto)}}"
                                            alt="product"></a>
                                    <div class="product-item-wrap">
                                        <div class="product-item-cover">
                                            <h6 class="prod-title product-name"><a href="single-shop.html">{{$hm->nama}}</a></h6>
                                            <div class="price-cover">
                                                <div class="new-price">Rp. {{$hm->harga}}</div>
                                                <div class="old-price">/ Hari</div>
                                            </div>
                                            <a class="btn btn-add-to-cart"><span>Add To Cart</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <!-- <li>Frame Size: <span>17</span></li>
                                                                                            <li>Class: <span>City</span></li>
                                                                                            <li>Number of speeds: <span>7</span></li>
                                                                                            <li>Type: <span>Rigid</span></li> -->
                                                <li>Keterangan: <p>{{$hm->keterangan}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="product-icon-top">
                                            <!-- <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="tab tab2">
                            <div class="row product-cover">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="top-sale">top rent</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls
                                                    Mountain Bike</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="top-sale">top rent</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Aluminum and Fork
                                                    <br>Mountain
                                                    Sr-26omg</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="top-sale">top rent</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">$1.799</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls
                                                    Mountain Bike</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-2.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Hyper E-Ride Bike 700C
                                                    <br>20+
                                                    Mile Range</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="sale">11%</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">$1.799</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Lightweight M370-27speed
                                                    <br>Aluminum Alloy Mantis</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">New Spring Beach Cruiser
                                                    <br>Bicycle Chrome</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Steel Frame MTB Bike
                                                    <br>with
                                                    21 Speed</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Leopard Rider No Chain
                                                    <br>Mountain Bicycle</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab tab3">
                            <div class="row product-cover">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="sale">11%</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">$1.799</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Lightweight M370-27speed
                                                    <br>Aluminum Alloy Mantis</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">New Spring Beach Cruiser
                                                    <br>Bicycle Chrome</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls
                                                    Mountain Bike</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Aluminum and Fork
                                                    <br>Mountain
                                                    Sr-26omg</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="top-sale">top rent</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">$1.799</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls
                                                    Mountain Bike</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-2.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Hyper E-Ride Bike 700C
                                                    <br>20+
                                                    Mile Range</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Steel Frame MTB Bike
                                                    <br>with
                                                    21 Speed</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Leopard Rider No Chain
                                                    <br>Mountain Bicycle</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab tab4">
                            <div class="row product-cover">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls
                                                    Mountain Bike</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Aluminum and Fork
                                                    <br>Mountain
                                                    Sr-26omg</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="top-sale">top rent</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">$1.799</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls
                                                    Mountain Bike</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-2.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Hyper E-Ride Bike 700C
                                                    <br>20+
                                                    Mile Range</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <span class="sale">11%</span>
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">$1.799</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Lightweight M370-27speed
                                                    <br>Aluminum Alloy Mantis</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">New Spring Beach Cruiser
                                                    <br>Bicycle Chrome</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Steel Frame MTB Bike
                                                    <br>with
                                                    21 Speed</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-item">
                                        <ul class="product-icon-top">
                                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png"
                                                alt="product"></a>
                                        <div class="product-item-cover">
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                            </div>
                                            <h6 class="prod-title"><a href="single-shop.html">Leopard Rider No Chain
                                                    <br>Mountain Bicycle</a></h6>
                                            <a href="single-shop.html" class="btn"><span>Rent Now</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <li>Frame Size: <span>17</span></li>
                                                <li>Class: <span>City</span></li>
                                                <li>Number of speeds: <span>7</span></li>
                                                <li>Type: <span>Rigid</span></li>
                                                <li>Country registration: <span>USA</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--================ S-PRODUCTS END ================-->

    <!--================== S-FEEDBACK ==================-->
    <section class="s-feedback" style="background-color: #323a44">
        <span class="effwct-bg-feedback" style="background-image: url(assets/img/effect-bg-feedback.svg);"></span>
        <span class="mask"></span>
        <div class="container">
            <h2 class="title">feedback</h2>
            <div class="feedback-slider">
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt
                                ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="{{asset ('assets/user/img/feedback-photo-1.png')}}" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Li piters</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt
                                ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="{{asset ('assets/user/img/feedback-photo-2.png')}}" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Sam Barton</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt
                                ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="{{asset ('assets/user/img/feedback-photo-3.png')}}" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Zoe Tyler</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt
                                ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="{{asset ('assets/user/img/feedback-photo-2.png')}}" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Sam Barton</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ S-FEEDBACK END ================-->

    <!--================== S-OUR-NEWS ==================-->
    <section class="s-our-news">
        <div class="container">
            <h2 class="title">Berita Kami</h2>
            <div class="news-cover row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-item">
                        <h6 class="title"><a href="news.html">doloremque laudantium, totam rem aperiam, eaque ipsa
                                quae</a></h6>
                        <div class="news-post-thumbnail">
                            <a href="news.html"><img class="lazy" src="assets/img/placeholder-all.png"
                                    data-src="{{asset ('assets/user/img/news-1.jpg')}}" alt="news"></a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a
                                    href="#">Samson</a></span>
                        </div>
                        <div class="post-content">
                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque lauda
                                ntium, totam rem aperiam, eaque.</p>
                        </div>
                        <a href="news.html" class="btn-news">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-item">
                        <h6 class="title"><a href="news.html">At vero eos et accusamus et iusto odio dignissimos
                                ducim</a></h6>
                        <div class="news-post-thumbnail">
                            <a href="single-news.html"><img class="lazy" src="assets/img/placeholder-all.png"
                                    data-src="{{asset ('assets/user/img/news-2.jpg')}}" alt="news"></a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a
                                    href="#">Samson</a></span>
                        </div>
                        <div class="post-content">
                            <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique sunt in culpa qui.</p>
                        </div>
                        <a href="single-news.html" class="btn-news">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-item">
                        <h6 class="title"><a href="news.html">On the other hand, we denounce with righteous indignation
                                a</a></h6>
                        <div class="news-post-thumbnail">
                            <a href="news.html"><img class="lazy" src="assets/img/placeholder-all.png"
                                    data-src="{{asset ('assets/user/img/news-3.jpg')}}" alt="news"></a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a
                                    href="#">Samson</a></span>
                        </div>
                        <div class="post-content">
                            <p>Blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue;
                                and equal blame belongs to those.</p>
                        </div>
                        <a href="single-news.html" class="btn-news">read more</a>
                    </div>
                </div>
            </div>
            <div class="btn-cover"><a class="btn" href="news.html"><span>view more</span></a></div>
        </div>
    </section>
    <!--================ S-OUR-NEWS END ================-->

    <!--=================== S-CLIENTS ===================-->
    <section class="s-clients">
        <h2 class="title">Klien Kami</h2>
        <div class="container">
            <div class="clients-cover">
                <div class="client-slide">
                    <div class="client-slide-cover">
                        <img src="{{asset ('assets/user/img/client-1.svg')}}" alt="img">
                    </div>
                </div>
                <div class="client-slide">
                    <div class="client-slide-cover">
                        <img src="{{asset ('assets/user/img/client-2.svg')}}" alt="img">
                    </div>
                </div>
                <div class="client-slide">
                    <div class="client-slide-cover">
                        <img src="{{asset ('assets/user/img/client-4.svg')}}" alt="img">
                    </div>
                </div>
                <div class="client-slide">
                    <div class="client-slide-cover">
                        <img src="{{asset ('assets/user/img/client-5.svg')}}" alt="img">
                    </div>
                </div>
                <div class="client-slide">
                    <div class="client-slide-cover">
                        <img src="{{asset ('assets/user/img/client-6.svg')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= S-CLIENTS END =================-->

    <!--================== S-INSTAGRAM ==================-->
    <section class="s-instagram">
        <div class="instagram-cover">
            <a href="#" class="instagram-item">
                <ul>
                    <li class="comments">234 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
                    <li class="like">134 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                </ul>
                <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/instagram-1.jpg')}}"
                    alt="img">
            </a>
            <a href="#" class="instagram-item">
                <ul>
                    <li class="comments">222 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
                    <li class="like">118 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                </ul>
                <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/instagram-2.jpg')}}"
                    alt="img">
            </a>
            <a href="#" class="instagram-item">
                <ul>
                    <li class="comments">224 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
                    <li class="like">124 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                </ul>
                <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/instagram-3.jpg')}}"
                    alt="img">
            </a>
            <a href="#" class="instagram-item">
                <ul>
                    <li class="comments">155 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
                    <li class="like">107 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                </ul>
                <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/instagram-4.jpg')}}"
                    alt="img">
            </a>
            <a href="#" class="instagram-item">
                <ul>
                    <li class="comments">350 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
                    <li class="like">140 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
                </ul>
                <img class="lazy" src="{{asset('assets/user/img/placeholder-all.png')}}" data-src="{{asset('assets/user/img/instagram-5.jpg')}}"
                    alt="img">
            </a>
        </div>
    </section>
    <!--================ S-INSTAGRAM END ================-->
@endsection
