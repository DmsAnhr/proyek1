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
                <img src="{{ asset('assets/userNew/img/bg_cat_shoes.jpg') }}" class="img-fluid" alt="">
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
                            <a data-bs-toggle="collapse" href="#filters" role="button" aria-expanded="false"
                                aria-controls="filters">
                                <i class="ti-filter"></i><span>Filters</span>
                            </a>
                        </li>
                    </ul>
                    <div class="collapse" id="filters">
                        <div class="row small-gutters filters_listing_1">
                            <div class="col-6">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="drop">Categories</a>
                                    <div class="dropdown-menu">
                                        <div class="filter_type filter-category">
                                            <ul>

                                            </ul>
                                            <a href="#0" class="apply_filter">Apply</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /dropdown -->
                            </div>
                            <div class="col-6">
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
            <div class="row small-gutters item-row-list">

            </div>
            <!-- /row -->


        </div>
        <!-- /container -->
    </main>
    <div class="modal" tabindex="-1" id="modal-alert-login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Oopss...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Silahkan Login / Register terlebih dahulu.</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/login" class="btn btn-primary">Login / Register</a>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>
    <div class="alert alert-success d-none align-items-center"
        role="alert"style="position: fixed;bottom: 20px;z-index: 99;right: 20px;">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            Barang Berhasil Ditambah ke cart
        </div>
    </div>
@endsection

@push('css')
    <link href="{{ asset('assets/userNew/css/listing.css') }}" rel="stylesheet">
    <style>
        .grid_item img {
            height: 245px;
            aspec-ratio: 2/3;
            object-fit: contain;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('assets/userNew/js/sticky_sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/userNew/js/specific_listing.js') }}"></script>

    <script type="text/javascript">
        $.ajax({
            url: "/barangShop",
            type: "GET",
            dataType: "json",
            success: function(data) {
                // Manipulasi data yang diterima dari server

                // Menampilkan daftar kategori
                var kategori = data.kategori;
                var kategoriSelect = $(".filter-category ul");
                $.each(kategori, function(index, kat) {
                    var jumlahBarang = kat.barang_count;
                    var html = '<li>';
                    html += '<label class="container_check">' + kat.nama + ' <small>' + jumlahBarang +
                        '</small>';
                    html += '<input type="checkbox">';
                    html += '<span class="checkmark"></span>';
                    html += '</label>';
                    html += '</li>';
                    kategoriSelect.append(html);
                });

                // Menampilkan daftar barang
                $.each(data.barang, function(index, item) {

                    var html = '<div class="col-6 col-md-4 col-xl-3 item-rental ' + item.kategori.nama +
                        '" data-id="' + item.id + '" data-name="' + item.nama + '">';
                    html += '<div class="grid_item">';
                    html += '<figure>';
                    html += '<a type="button" class="btn-item-single" barang-id="' + item.id + '">';
                    html += '<img class="img-fluid " src="' + ('storage/' + item.foto) +
                        '" data-src="' + ('storage/' + item.foto) + '" alt="">';
                    html += '</a>';
                    html += '</figure>';
                    html += '<a type="button" class="btn-item-single" barang-id="' + item.id + '">';
                    html += '<h3>' + item.nama + '</h3>';
                    html += '</a>';
                    html += '<div class="price_box">';
                    html += '<span class="new_price">' + formatRupiah(item.harga, 'Rp. ') + '</span>';
                    html += '</div>';
                    html += '<ul>';
                    html +=
                        '<li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>';
                    html +=
                        '<li><a type="button" class="tooltip-1 btn-add-cart" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart" barang-id="' +
                        item.id + '"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>';
                    html += '</ul>';
                    html += '</div>';
                    html += '</div>';

                    $(".item-row-list").append(html);
                });
            }
        });

        $('.item-row-list').on('click', '.item-rental', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            window.location.href = '/product?' + name + '%20product=' + id;
        });
    </script>
    @guest
        <script>
            $(document).on('click', '.btn-add-cart', function() {
                $('#modal-alert-login').modal('show');
            });
        </script>
    @endguest
    @auth
        <script>
            $(document).on('click', '.btn-add-cart', function() {
                var barangId = $(this).attr('barang-id');

                $.ajax({
                    url: "/add-to-cart",
                    type: "POST",
                    dataType: "json",
                    data: {
                        barang_id: barangId
                    },
                    success: function(response) {
                        reloadCart();
                        $('.alert-success').removeClass('d-none').addClass('d-flex');
                        setTimeout(() => {
                            $('.alert-success').removeClass('d-flex').addClass('d-none');
                        }, 2000);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        </script>
    @endauth
@endpush
