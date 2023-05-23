@extends('index')

@section('content')
    <!-- ================ HEADER-TITLE ================ -->
    <section class="s-header-title">
        <div class="container">
            <h1>Ciliwung Camp</h1>
            <ul class="breadcrambs">
                <li><a href="index.html">Rental</a></li>
                <li>Produk</li>
            </ul>
        </div>
    </section>
    <!-- ============== HEADER-TITLE END ============== -->

    <!-- ============== S-SINGLE-PRODUCT ============== -->
    <section class="s-single-product" style="padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <!--===== SLIDER-SINGLE-FOR =====-->
                    <div class="slider-single-for">
                        <div class="slide-single-for">
                            <a href="{{asset ('storage/'.$barang->foto)}}" class="single-for-img" data-fancybox="prod1">
                                <img src="{{asset ('storage/'.$barang->foto)}}" alt="img">
                            </a>
                        </div>
                        {{-- <div class="slide-single-for">
                            <a href="assets/img/single-slider-2.jpg" class="single-for-img" data-fancybox="prod1">
                                <img src="{{asset ('assets/user/img/single-slider-2.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="slide-single-for">
                            <a href="assets/img/single-slider-3.jpg" class="single-for-img" data-fancybox="prod1">
                                <img src="{{asset ('assets/user/img/single-slider-3.jpg')}}" alt="img">
                            </a>
                        </div>
                        <div class="slide-single-for">
                            <a href="assets/img/single-slider-4.jpg" class="single-for-img" data-fancybox="prod1">
                                <img src="{{asset ('assets/user/img/single-slider-4.jpg')}}" alt="img">
                            </a>
                        </div> --}}
                    </div>
                    <!--=== SLIDER-SINGLE-FOR END ===-->
                </div>
                <div class="col-12 col-md-7 single-shop-left">
                    <h2 class="title">{{$barang->nama}}</h2>
                    <div class="single-price">
                        <div class="new-price">Rp. {{$barang->harga}}</div>
                        <div class="old-price">/ Hari</div>
                    </div>
                    <div class="keterangan-box">
                        <label><b>Keterangan:</b></label>
                        <p>{{$barang->keterangan}}</p>
                    </div>
                    <div class="keterangan-box">
                        <label><b>Status :</b></label>
                        <p>{{$barang->status}}</p>
                    </div>
                    <div class="keterangan-box">
                        <label><b>Stock :</b></label>
                        <p>{{$barang->jumlah}}</p>
                    </div>
                    <div class="single-quanity">
                        <label><b> Quantity:</b></label>
                        <input id="quantity" name="value" value="1">
                    </div>
                    <div class="single-btn-cover">
                        <a href="#" class="btn btn-buy-now"><span>Add To Chart</span></a>
                        <!-- <a href="#" class="btn btn-wishlist"><span>add to wishlist</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============ S-SINGLE-PRODUCT END ============ -->

    <!--=============== RELATED PRODUCTS ===============-->
    <section class="s-related-products">
        <div class="container-fluid">
            <h2 class="title">Related Products</h2>
            <div class="row product-cover">
                @foreach($barangAll as $brg)
                    @if($brg->kategori_id == $barang->kategori_id && $brg->id != $id)
                <div class="col-6 col-md-3 prod-item-col">
                    <div class="product-item">
                        <a href="{{ url('shop/single_shop', ['id' => $brg->id]) }}" class="product-img">
                            <img src="{{asset ('storage/'.$brg->foto)}}" alt="product"></a>
                        <div class="product-item-wrap">
                            <div class="product-item-cover">
                                <h6 class="prod-title product-name"><a href="{{ url('shop/single_shop', ['id' => $brg->id]) }}">
                                    {{$brg->nama}}</a></h6>
                                <div class="price-cover">
                                    <div class="new-price">Rp. {{$brg->harga}}</div>
                                    <div class="old-price">/ Hari</div>
                                </div>
                                <a class="btn btn-add-to-cart"><span>Add To Cart</span></a>
                            </div>
                            <div class="prod-info">
                                <ul class="prod-list">
                                    <li>Keterangan: <p>{{$brg->keterangan}}</p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="product-icon-top">
                                <!-- <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                {{-- <div class="col-6 col-md-3 prod-item-col">
                    <div class="product-item">
                        <a href="single-shop.html" class="product-img">
                            <img src="{{asset ('assets/user/img/prod-5.png')}}" alt="product"></a>
                        <div class="product-item-wrap">
                            <div class="product-item-cover">
                                <h6 class="prod-title product-name"><a href="single-shop.html">Granite Peak
                                        24" <br>Girls
                                        Mountain Bike</a></h6>
                                <div class="price-cover">
                                    <div class="new-price">$1.699</div>
                                    <div class="old-price">/Hari</div>
                                </div>
                                <a class="btn btn-add-to-cart"><span>Add To Cart</span></a>
                            </div>
                            <div class="prod-info">
                                <ul class="prod-list">
                                    <li>Keterangan: <p>Produk untuk Gunung</p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="product-icon-top">
                                <!-- <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li> -->
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--============= RELATED PRODUCTS END =============-->
@endsection
