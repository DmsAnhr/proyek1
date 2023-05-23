@extends('index')

@section('content')
    <!-- ================ HEADER-TITLE ================ -->
    <section class="s-header-title">
        <div class="container">
            <h1>Ciliwung Camp</h1>
            <ul class="breadcrambs">
                <li><a href="index.html">Home</a></li>
                <li>Rental</li>
            </ul>
        </div>
    </section>
    <!-- ============== HEADER-TITLE END ============== -->

    <!--===================== SHOP =====================-->
    <section class="s-shop" id="sec-shop">
        <div class="container">
            <div class="shop-sidebar-btn btn"><span>filter</span></div>
            <div class="row">
                <div class="col-12 col-lg-3 shop-sidebar">
                    <div class="con-sticky">
                        <ul class="widgets wigets-shop">
                            <li class="widget wiget-cart">
                                <h5 class="title">Cart</h5>
                                <!-- <p class="not-product">Tidak Ada Barang di keranjang.</p> -->
                                <div class="isi-cart">
                                    <ul>
                                        <li class="item-box"
                                            style="display: flex;align-items: center;justify-content: space-between;">
                                            <p>- Tenda 5x5</p>
                                            <div>
                                                <input type="number" min="1" max="" value="1"
                                                    style="width: 40px;border: none;background-color: #fafafa;font-size: 19px;">
                                                <i class="fa fa-trash delete-item" onclick="deleteItem(this)"
                                                    aria-hidden="true" style="cursor: pointer;"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="widget wiget-shop-category">
                                <h5 class="title">Kategori</h5>
                                <ul>
                                    <li>
                                        <p><input type="checkbox" value="0" checked><span>Semua</span></p>
                                    </li>
                                    @foreach($kategori as $kt)
                                    <li>
                                        <p><input type="checkbox" value="{{$kt->id}}"><span>{{$kt->nama}}</span></p>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <!-- <li class="widget wiget-price">
                    <h5 class="title">price($)</h5>
                    <div id="slider-range"></div>
                    <div class="amount-cover">
                     <input type="text" id="amount-min">
                     <span>&mdash;</span>
                     <input type="text" id="amount-max">
                    </div>
                   </li>
                   <li class="widget wiget-gender">
                    <h5 class="title">gender</h5>
                    <ul>
                     <li>
                      <p><input type="checkbox"><span>Men’s</span></p>
                     </li>
                     <li>
                      <p><input type="checkbox"><span>Women’s</span></p>
                     </li>
                     <li>
                      <p><input type="checkbox"><span>Kids</span></p>
                     </li>
                    </ul>
                   </li>
                   <li class="widget wiget-brand">
                    <h5 class="title">brand</h5>
                    <ul>
                     <li>
                      <p><input type="checkbox"><span>Focus</span></p>
                     </li>
                     <li>
                      <p><input type="checkbox"><span>Radon</span></p>
                     </li>
                     <li>
                      <p><input type="checkbox"><span>Cube</span></p>
                     </li>
                     <li>
                      <p><input type="checkbox"><span>Bikes</span></p>
                     </li>
                     <li>
                      <p><input type="checkbox"><span>Cruzee</span></p>
                     </li>
                    </ul>
                   </li>
                   <li class="widget wiget-color">
                    <h5 class="title">color</h5>
                    <ul>
                     <li style="background: #f3deca"></li>
                     <li style="background: #fa9483"></li>
                     <li style="background: #2d4057"></li>
                     <li style="background: #4097aa"></li>
                     <li style="background: #0ac693"></li>
                     <li style="background: #0c5061"></li>
                     <li style="background: #f74440"></li>
                     <li style="background: #e0e44a"></li>
                    </ul>
                   </li> -->
                        </ul>
                        <!-- <a href="#" class="btn" style="padding: 8px 20px;margin-top: 20px;"><span>Reset
                    Filter</span></a> -->
                    </div>
                </div>
                <div class="col-12 col-lg-9 shop-cover">
                    <!-- <div class="baner-shop">
                  <span class="mask"></span>
                  <img src="assets/img/banner-shopalt="img">
                  <div class="baner-item-content">
                   <h2>our discount program</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut
                    labore et dolore magna aliqua.</p>
                   <a href="single-shop.html" class="btn"><span>read more</span></a>
                   <div class="banner-sale-cover">
                    <div class="banner-sale">30% off</div>
                    <p>Lorem ipsum dolor sit amet</p>
                   </div>
                  </div>
                 </div> -->
                    <h2 class="title">Semua</h2>
                    <div class="shop-sort-cover">
                        @php
                            $dataCount = DB::table('barang')->count();
                        @endphp
                        <div class="sort-left">{{ $dataCount }}</div>
                        <div class="sort-right">
                            <div class="sort-by">
                                <span class="sort-name">sort by:</span>
                                <select class="nice-select">
                                    <option selected="selected" disabled>Terlaris</option>
                                    <option>Terbaru</option>
                                    <option>Promo</option>
                                </select>
                            </div>
                            <ul class="sort-form">
                                <li data-atr="large" class="btn-list"><i class="fa fa-th-large" aria-hidden="true"></i>
                                </li>
                                <li data-atr="block" class="active btn-list"><i class="fa fa-th" aria-hidden="true"></i>
                                </li>
                                <li data-atr="list" class="btn-list"><i class="fa fa-list" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-product-cover">
                        <div class="row product-cover block">
                            @foreach($barang as $brg)
                            <div class="col-12 col-sm-4 prod-item-col">
                                <div class="product-item">
                                    <a href="{{ url('shop/single_shop', ['id' => $brg->id]) }}" class="product-img">
                                        <img src="{{asset ('storage/'.$brg->foto)}}"alt="product"></a>
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
                                                <!-- <li>Frame Size: <span>17</span></li>
                                                    <li>Class: <span>City</span></li>
                                                    <li>Number of speeds: <span>7</span></li>
                                                    <li>Type: <span>Rigid</span></li> -->
                                                <li>Keterangan: <p>{{$brg->keterangan}}</p>
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
                            @endforeach
                            {{-- <div class="col-12 col-sm-4 prod-item-col">
                                <div class="product-item">
                                    <a href="single-shop.html" class="product-img">
                                        <img src="{{asset ('assets/user/img/prod-8.png')}}"alt="product"></a>
                                    <div class="product-item-wrap">
                                        <div class="product-item-cover">
                                            <h6 class="prod-title product-name"><a href="single-shop.html">Leopard Rider
                                                    No Chain
                                                    <br>Mountain Bicycle</a></h6>
                                            <div class="price-cover">
                                                <div class="new-price">$1.699</div>
                                                <div class="old-price">/Hari</div>
                                            </div>
                                            <a class="btn btn-add-to-cart"><span>Add To Cart</span></a>
                                        </div>
                                        <div class="prod-info">
                                            <ul class="prod-list">
                                                <!-- <li>Frame Size: <span>17</span></li>
                                                    <li>Class: <span>City</span></li>
                                                    <li>Number of speeds: <span>7</span></li>
                                                    <li>Type: <span>Rigid</span></li> -->
                                                <li>Keterangan: <p>Produk untuk Gunung</p>
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
                            </div> --}}
                        </div>
                        <div class="pagination-cover">
                            <ul class="pagination">
                                <li class="pagination-item item-prev"><a href="#"><i class="fa fa-angle-left"
                                            aria-hidden="true"></i></a></li>
                                <li class="pagination-item active"><a href="#">1</a></li>
                                <li class="pagination-item"><a href="#">2</a></li>
                                <li class="pagination-item"><a href="#">3</a></li>
                                <li class="pagination-item"><a href="#">4</a></li>
                                <li class="pagination-item"><a href="#">5</a></li>
                                <li class="pagination-item item-next"><a href="#"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================== SHOP END ===================-->
@endsection
