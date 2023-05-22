@extends('admin')

@section('content')
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Ciliwung Camp</a></li>
                                <li class="breadcrumb-item active">Kasir</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Transaksi</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="mt-0">Filter</h4>
                                </div>
                                <ul class="col container-filter categories-filter containerFilterKat mb-0 text-left" id="filter">
                                    <li><a class="categories active" data-filter="*">All</a></li>
                                    <li><a class="categories" data-filter=".branding">Branding</a></li>
                                    {{-- <li><a class="categories" data-filter=".design">Design</a></li>
                                    <li><a class="categories" data-filter=".photo">Photo</a></li>
                                    <li><a class="categories" data-filter=".coffee">coffee</a></li> --}}
                                </ul>
                            </div><!-- End portfolio  -->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="row container-grid nf-col-3  projects-wrapper barang-wrapper-kasir">
                                {{-- <div class="col-lg-3 col-md-6 p-0 nf-item branding design coffee spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Consequat massa quis">
                                            <img class="item-container " src="{{asset ('assets/admin/images/small/img-1.jpg')}}"
                                                alt="7" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-white">Consequat massa quis</h5>
                                                    <p class="text-white">Branding, Design, Coffee</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-3 col-md-6 p-0 nf-item photo spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Vivamus elementum semper">
                                            <img class="item-container mfp-fade"
                                                src="{{asset ('assets/admin/images/small/img-2.jpg')}}" alt="2" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-light">Vivamus elementum semper</h5>
                                                    <p class="text-light">Photo</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-3 col-md-6 p-0 nf-item branding coffee spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Quisque rutrum">
                                            <img class="item-container" src="{{asset ('assets/admin/images/small/img-3.jpg')}}"
                                                alt="4" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-light">Quisque rutrum</h5>
                                                    <p class="text-light">Branding, Design, Coffee</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-3 col-md-6 p-0 nf-item branding design spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Tellus eget condimentum">
                                            <img class="item-container" src="{{asset ('assets/admin/images/small/img-4.jpg')}}"
                                                alt="5" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-light">Tellus eget condimentum</h5>
                                                    <p class="text-light">Design</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 p-0 nf-item branding">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Nullam quis ant">
                                            <img class="item-container" src="{{asset ('assets/admin/images/small/img-5.jpg')}}"
                                                alt="6" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-light">Nullam quis ant</h5>
                                                    <p class="text-light">Branding, Design</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-md-6 p-0 nf-item spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Nullam quis ant">
                                            <img class="item-container" src="{{asset ('assets/admin/images/small/img-5.jpg')}}"
                                                alt="6" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-light">Nullam quis ant</h5>
                                                    <p class="text-light">Branding, Design</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->

                                <div class="col-lg-3 col-md-6 p-0 nf-item branding design spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Nullam quis ant">
                                            <img class="item-container" src="{{asset ('assets/admin/images/small/img-5.jpg')}}"
                                                alt="6" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h5 class="text-light">Nullam quis ant</h5>
                                                    <p class="text-light">Branding, Design</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col--> --}}

                                <div class="col-lg-3 col-md-6 p-0 nf-item photo spacing">
                                    <div class="item-box">
                                        <a class="cbox-gallary1 items-rent" title="Sed fringilla mauris">
                                            <img class="item-container" src="{{asset ('assets/admin/images/small/img-6.jpg')}}"
                                                alt="1" />
                                            <div class="item-mask">
                                                <div class="item-caption">
                                                    <h6 class="text-light">Sed fringilla mauris</h6>
                                                    <p class="text-light">Photo</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end item-box-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-4 d-flex flex-column">
                    <div class="card flex-grow-1">
                        <div class="card-body d-flex flex-wrap">
                            <form  id="formTransaksi">
                                <div class="col-12 invoice-item-box" style="overflow-y: auto;">
                                    <h4>Invoice</h4>
                                    <div class="items d-flex justify-content-between">
                                        <h6>Kompor</h6>
                                        <h6>x2</h6>
                                    </div>
                                    <div class="items d-flex justify-content-between">
                                        <h6>Tali</h6>
                                        <h6>x9</h6>
                                    </div>
                                    <div class="items d-flex justify-content-between">
                                        <h6>cangkir</h6>
                                        <h6>x3</h6>
                                    </div>
                                </div>
                                <div class="col-12 mt-auto text-right">
                                    <hr>
                                    <h5>Total Biaya</h5>
                                    <h6>Rp.100.000</h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container -->
    </div>
    <!-- end page content -->
</div>
@endsection

@push('js')
<script src="{{ asset('assets/admin/plugins/filter/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/filter/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/filter/jquery.magnific-popup.min.js') }}"></script>
{{-- <script src="{{ asset('assets/admin/pages/jquery.gallery.init.js') }}"></script> --}}
<script>
    //get barang on cashier
    $.ajax({
        url: "/get-data",
        type: "GET",
        dataType: "json",
        success: function(data) {
            // Manipulasi data yang diterima dari server

            // Menampilkan daftar kategori
            var kategori = data.kategori;
            var kategoriSelect = $(".containerFilterKat");
            $.each(kategori, function(index, kat) {
                // kategoriSelect.append('<option value="' + kat.id + '">' + kat.nama + '</option>');
                kategoriSelect.append('<li><a class="categories" data-filter=".' + kat.nama + '">' + kat.nama + '</a></li>');
            });
            
            // Menampilkan daftar barang
            var html = "";
            $.each(data.barang, function(index, item) {
                // html += "<tr>";
                // html += "<td>" + item.id + "</td>";
                // html += "<td><img src='" + item.gambar + "' alt='Gambar'></td>";
                // html += "<td>" + item.nama + "</td>";
                // html += "<td>" + item.harga + "</td>";
                // html += "<td>" + item.kategori.nama + "</td>";
                // html += "</tr>";

                html += '<div class="col-lg-3 col-md-6 p-0 nf-item '+ item.kategori.nama +'" data-idBarang="' + item.id + '">';
                    html += '<div class="item-box">';
                        html += '<a class="cbox-gallary1 items-rent" title="' + item.nama + '">';
                            html += '<img class="item-container" src="'+ ('storage/' + item.foto) +'"alt="1" />';
                            html += '<div class="item-mask">';
                                html += '<div class="item-caption">';
                                    html += '<h6 class="text-light">' + item.nama + '</h6>';
                                    html += '<p class="text-light">Rp. ' + item.harga + '</p>';
                                html += '</div>';
                            html += '</div>';
                        html += '</a>';
                    html += '</div>';
                html += '</div>';
                
                $(".barang-wrapper-kasir").append(html);

                var $container = $('.projects-wrapper');
                var $filter = $('#filter');
                // Initialize isotope 
                $container.isotope({
                    filter: '*',
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
                // Filter items when filter link is clicked
                $filter.find('a').click(function() {
                    var selector = $(this).attr('data-filter');
                    $filter.find('a').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            animationDuration: 750,
                            easing: 'linear',
                            queue: false,
                        }
                    });
                    return false;
                });

            });
        }
    });

    $('.barang-wrapper-kasir').on('click', '.items-rent',function () {
        $('.invoice-item-box').append('<div class="items d-flex justify-content-between"><h6>Tenda gunung</h6><h6>x1</h6></div >')
    })
</script>
@endpush
