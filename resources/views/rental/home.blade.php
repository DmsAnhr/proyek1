@extends('rental')

@section('content')
<main>
    <div class="header-video">
        <div id="hero_video">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6">
                            <div class="slide-text white">
                                <h3>Ciliwung<br>Camping Rental</h3>
                                <p>Adventure with all your passion</p>
                                <a class="btn_1" href="#0" role="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset ('assets/userNew/img/bg-kosong.jpg')}}" alt="" class="header-video--media" data-video-src="assets/userNew/video/intro" data-teaser-source="assets/userNew/video/intro" data-provider="" data-video-width="1920" data-video-height="960">
    </div>
    <!-- /header-video -->

    <div class="feat">
        <div class="container">
            <ul>
                <li>
                    <div class="box">
                        <i class="ti-gift"></i>
                        <div class="justify-content-center">
                            <h3>Free Shipping</h3>
                            <p>For all oders over 20k</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-wallet"></i>
                        <div class="justify-content-center">
                            <h3>Secure Payment</h3>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->

    <hr class="mb-0">
    
    <div class="container margin_60_35">
        <div class="main_title mb-4">
            <h2>New Arrival</h2>
            <span>Products</span>
            <p>Discover for your adventure.</p>
        </div>
        <div class="isotope_filter">
            <ul>
                <li><a href="#0" id="all" data-filter="*">All</a></li>
                <li><a href="#0" id="popular" data-filter=".popular">Tenda</a></li>
                <li><a href="#0" id="sale" data-filter=".sale">Carrier</a></li>
            </ul>
        </div>
        <div class="isotope-wrapper">
            <div class="row small-gutters">
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <figure>
                            <span class="ribbon off">-30%</span>
                            <a href="{{url('singleRental')}}">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/tenda4.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/1.jpg')}}" alt="">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/tenda4.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/1_b.jpg')}}" alt="">
                            </a>
                            {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="{{url('singleRental')}}">
                            <h3>Tenda The North Face</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">Rp. 55.000</span>
                            <span class="old_price">75.000</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <div class="col-6 col-md-4 col-xl-3 isotope-item">
                    <div class="grid_item">
                        <figure>
                            <span class="ribbon off">-30%</span>
                            <a href="{{url('singleRental')}}">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/lampu1.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/1.jpg')}}" alt="">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/lampu1.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/1_b.jpg')}}" alt="">
                            </a>
                            {{-- <div data-countdown="2019/05/15" class="countdown"></div> --}}
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="{{url('singleRental')}}">
                            <h3>Lampu Lentera</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">Rp. 15.000</span>
                            <span class="old_price">30.000</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="{{url('singleRental')}}">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/kursi1.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/8.jpg')}}" alt="">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/kursi1.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/8_b.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="{{url('singleRental')}}">
                            <h3>Kursi Camping</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">Rp. 10.000</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="{{url('singleRental')}}">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/sleeping1.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/8.jpg')}}" alt="">
                                <img class="img-fluid " src="{{asset ('assets/userNew/img/products/sleeping1.png')}}" data-src="{{asset ('assets/userNew/img/products/shoes/8_b.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="{{url('singleRental')}}">
                            <h3>Sleeping Bag</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">Rp. 50.000</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->
    </div>
    <!-- /container -->
    
    {{-- <div class="featured " data-bg="url(img/featured_home.jpg)">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container margin_60">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <h3>Armor<br>Air Color 720</h3>
                        <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                        <div class="feat_text_block">
                            <div class="price_box">
                                <span class="new_price">$90.00</span>
                                <span class="old_price">$170.00</span>
                            </div>
                            <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /featured -->
    
    <div class="bg_gray">
        <div class="container margin_30">
            <div id="brands" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#0"><img src="{{asset ('assets/userNew/img/brands/placeholder_brands.png')}}" data-src="{{('assets/userNew/img/brands/logo_1.png')}}" alt="" class="owl-"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset ('assets/userNew/img/brands/placeholder_brands.png')}}" data-src="{{('assets/userNew/img/brands/logo_2.png')}}" alt="" class="owl-"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset ('assets/userNew/img/brands/placeholder_brands.png')}}" data-src="{{('assets/userNew/img/brands/logo_3.png')}}" alt="" class="owl-"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset ('assets/userNew/img/brands/placeholder_brands.png')}}" data-src="{{('assets/userNew/img/brands/logo_4.png')}}" alt="" class="owl-"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset ('assets/userNew/img/brands/placeholder_brands.png')}}" data-src="{{('assets/userNew/img/brands/logo_5.png')}}" alt="" class="owl-"></a>
                </div><!-- /item -->
                <div class="item">
                    <a href="#0"><img src="{{asset ('assets/userNew/img/brands/placeholder_brands.png')}}" data-src="{{('assets/userNew/img/brands/logo_6.png')}}" alt="" class="owl-"></a>
                </div><!-- /item --> 
            </div><!-- /carousel -->
        </div><!-- /container -->
    </div> --}}
    <!-- /bg_gray -->
    
    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Latest News</h2>
            <span>Blog</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="{{asset ('assets/userNew/img/blog-thumb-placeholder.jpg')}}" data-src="assets/userNew/img/blog-thumb-1.jpg" alt="" width="400" height="266" class="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>by Mark Twain</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Pri oportere scribentur eu</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="{{asset ('assets/userNew/img/blog-thumb-placeholder.jpg')}}" data-src="assets/userNew/img/blog-thumb-2.jpg" alt="" width="400" height="266" class="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Jhon Doe</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Duo eius postea suscipit ad</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="{{asset ('assets/userNew/img/blog-thumb-placeholder.jpg')}}" data-src="assets/userNew/img/blog-thumb-3.jpg" alt="" width="400" height="266" class="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Luca Robinson</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Elitr mandamus cu has</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
            <div class="col-lg-6">
                <a class="box_news" href="blog.html">
                    <figure>
                        <img src="{{asset ('assets/userNew/img/blog-thumb-placeholder.jpg')}}" data-src="assets/userNew/img/blog-thumb-4.jpg" alt="" width="400" height="266" class="">
                        <figcaption><strong>28</strong>Dec</figcaption>
                    </figure>
                    <ul>
                        <li>By Paula Rodrigez</li>
                        <li>20.11.2017</li>
                    </ul>
                    <h4>Id est adhuc ignota delenit</h4>
                    <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                </a>
            </div>
            <!-- /box_news -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
@endsection

@push('css')
<link href="{{asset ('assets/userNew/css/home_1.css')}}" rel="stylesheet">
<style>
    .grid_item img{
        height: 245px;
        aspec-ratio: 2/3;
        object-fit: contain;
    }
</style>
@endpush

@push('js')
    <!-- SPECIFIC SCRIPTS -->
	<script src="{{asset ('assets/userNew/js/modernizr.js')}}"></script>
	<script src="{{asset ('assets/userNew/js/video_header.min.js')}}"></script>
	<script>
		// Video Header
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
	<script src="{{asset ('assets/userNew/js/isotope.min.js')}}"></script>
	<script>
		// Isotope filter
		$(window).on('load',function(){
		  var $container = $('.isotope-wrapper');
		  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
		});
		$('.isotope_filter').on( 'click', 'a', 'change', function(){
		  var selector = $(this).attr('data-filter');
		  $('.isotope-wrapper').isotope({ filter: selector });
		});
	</script>

    {{-- <script type="text/javascript">
        $.ajax({
            url: "/get-data",
            type: "GET",
            dataType: "json",
            success: function(data) {
                // Manipulasi data yang diterima dari server

                // Menampilkan daftar kategori
                var kategori = data.kategori;
                var kategoriSelect = $(".isotope_filter ul");
                $.each(kategori, function(index, kat) {
                    // kategoriSelect.append('<option value="' + kat.id + '">' + kat.nama + '</option>');
                    kategoriSelect.append('<li><a href="#0" id="' + kat.nama + '" data-filter=".' + kat.nama + '">' + kat.nama + '</a></li>');
                });
                
                // Menampilkan daftar barang
                var html = "";
                $.each(data.barang, function(index, item) {

                    // html += '<div class="col-lg-3 col-md-6 p-0 nf-item '+ item.kategori.nama +'">';
                    //     html += '<div class="item-box">';
                    //         html += '<a class="cbox-gallary1 items-rent" title="' + item.nama + '" data-idBarang="' + item.id + '">';
                    //             html += '<img class="item-container" src="'+ ('storage/' + item.foto) +'" alt="1" />';
                    //             html += '<div class="item-mask">';
                    //                 html += '<div class="item-caption">';
                    //                     html += '<h6 class="text-light">' + item.nama + '</h6>';
                    //                     html += '<p class="text-light">Rp. ' + item.harga + '</p>';
                    //                 html += '</div>';
                    //             html += '</div>';
                    //         html += '</a>';
                    //     html += '</div>';
                    // html += '</div>';

                    html+='<div class="col-6 col-md-4 col-xl-3 isotope-item '+ item.kategori.nama +'">';
                        html+='<div class="grid_item">';
                            html+='<span class="ribbon hot">Hot</span>';
                            html+='<figure>';
                                html+='<a href="{{url('singleRental')}}">';
                                    html+='<img class="img-fluid "  src="'+ ('storage/' + item.foto) +'" data-src="'+ ('storage/' + item.foto) +'" alt="">';
                                    html+='<img class="img-fluid "  src="'+ ('storage/' + item.foto) +'" data-src="'+ ('storage/' + item.foto) +'" alt="">';
                                html+='</a>';
                            html+='</figure>';
                            html+='<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>';
                            html+='<a href="{{url('singleRental')}}">';
                                html+='<h3>' + item.nama + '</h3>';
                            html+='</a>';
                            html+='<div class="price_box">';
                                html+='<span class="new_price">Rp.' + item.harga + '</span>';
                            html+='</div>';
                            html+='<ul>';
                                html+='<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>';
                                html+='<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>';
                                html+='<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>';
                            html+='</ul>';
                        html+='</div>';
                    html+='</div>';
                    
                    var $container = $('.isotope-wrapper');
                    $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
                    
                });
                $(".isotope-wrapper .small-gutters").append(html);
            }
        });
    </script> --}}
@endpush

