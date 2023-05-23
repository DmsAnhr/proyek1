@extends('rental')

@section('content')
<main>
		
    <div class="container margin_30">
        <div class="top_banner version_2">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <h1>Product - Rental</h1>
                    </div>
                </div>
            </div>
            <img src="{{asset ('assets/userNew/img/bg_cat_shoes.jpg')}}" class="img-fluid" alt="">
        </div>
        <!-- /top_banner -->
        <div id="stick_here"></div>
        <div class="toolbox elemento_stick version_2">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <div class="sort_select">
                            <select name="sort" id="sort">
                                <option value="popularity" selected="selected">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to
                            </select>
                        </div>
                    </li>
                    <li>
                        <a href="#0"><i class="ti-view-grid"></i></a>
                        <a href="#"><i class="ti-view-list"></i></a>
                    </li>
                    <li>
                        <a data-bs-toggle="collapse" href="#filters" role="button" aria-expanded="false" aria-controls="filters">
                            <i class="ti-filter"></i><span>Filters</span>
                        </a>
                    </li>
                </ul>
                <div class="collapse" id="filters">
                    <div class="row small-gutters filters_listing_1">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="drop">Categories</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">Men <small>12</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Women <small>24</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Running <small>23</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Training <small>11</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="drop">Color</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">Blue <small>06</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Red <small>12</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Orange <small>17</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Black <small>43</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="drop">Brand</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">Adidas <small>11</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Nike <small>08</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Vans <small>05</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Puma <small>18</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="drop">Price</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">$0 — $50<small>11</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">$50 — $100<small>08</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">$100 — $150<small>05</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">$150 — $200<small>18</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /toolbox -->
        <div class="row small-gutters">
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    <figure>
                        {{-- <span class="ribbon off">-30%</span> --}}
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/kursi1.png')}}" data-src="assets/userNew/img/products/shoes/1.jpg" alt="">
                        </a>
                        {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Kursi Camping</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 10.000</span>
                        {{-- <span class="old_price">$60.00</span> --}}
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon off">-30%</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/lampu1.png')}}" data-src="assets/userNew/img/products/shoes/2.jpg" alt="">
                        </a>
                        {{-- <div data-countdown="2019/05/10" class="countdown"></div> --}}
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Lampu Lentera</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 15.000</span>
                        {{-- <span class="old_price">$170.00</span> --}}
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon off">-50%</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/matras1.png')}}" data-src="assets/userNew/img/products/shoes/3.jpg" alt="">
                        </a>
                        {{-- <div data-countdown="2019/05/21" class="countdown"></div> --}}
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Matras</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 20.000</span>
                        {{-- <span class="old_price">$155.00</span> --}}
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon new">New</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/tenda4.png')}}" data-src="assets/userNew/img/products/shoes/4.jpg" alt="">
                        </a>
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Tenda The North Face</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 55.000</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon new">New</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/tas2.png')}}" data-src="assets/userNew/img/products/shoes/5.jpg" alt="">
                        </a>
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Tas Jinjing</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 18.000</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon new">New</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/sepatu2.png')}}" data-src="assets/userNew/img/products/shoes/6.jpg" alt="">
                        </a>
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Sepatu Gunung</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 35.000</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon hot">Hot</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/senter1.png')}}" data-src="assets/userNew/img/products/shoes/7.jpg" alt="">
                        </a>
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Senter</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp. 5.000</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->
            
            <div class="col-6 col-md-4 col-xl-3">
                <div class="grid_item">
                    {{-- <span class="ribbon hot">Hot</span> --}}
                    <figure>
                        <a href="{{url('singleRental')}}">
                            <img class="img-fluid " src="{{asset ('assets/userNew/img/products/sleeping1.png')}}" data-src="assets/userNew/img/products/shoes/8.jpg" alt="">
                        </a>
                    </figure>
                    <a href="{{url('singleRental')}}">
                        <h3>Sleeping Bag</h3>
                    </a>
                    <div class="price_box">
                        <span class="new_price">Rp 50.000</span>
                    </div>
                    <ul>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                        <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                    </ul>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /col -->				
        </div>
        <!-- /row -->
            
        <div class="pagination__wrapper">
            <ul class="pagination">
                <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                <li>
                    <a href="#0" class="active">1</a>
                </li>
                <li>
                    <a href="#0">2</a>
                </li>
                <li>
                    <a href="#0">3</a>
                </li>
                <li>
                    <a href="#0">4</a>
                </li>
                <li><a href="#0" class="next" title="next page">&#10095;</a></li>
            </ul>
        </div>
            
    </div>
    <!-- /container -->
</main>
@endsection

@push('css')
<link href="{{asset ('assets/userNew/css/listing.css')}}" rel="stylesheet">
<style>
    .grid_item img{
        height: 245px;
        aspec-ratio: 2/3;
        object-fit: contain;
    }
</style>
@endpush

@push('js')
<script src="{{asset ('assets/userNew/js/sticky_sidebar.min.js')}}"></script>
<script src="{{asset ('assets/userNew/js/specific_listing.js')}}"></script>
@endpush