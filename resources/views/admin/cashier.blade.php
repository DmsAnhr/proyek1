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
                                    <ul class="col container-filter categories-filter containerFilterKat mb-0 text-left"
                                        id="filter">
                                        <li><a class="categories active" data-filter="*">All</a></li>
                                        {{-- <li><a class="categories" data-filter=".branding">Branding</a></li>
                                    <li><a class="categories" data-filter=".design">Design</a></li>
                                    <li><a class="categories" data-filter=".photo">Photo</a></li>
                                    <li><a class="categories" data-filter=".coffee">coffee</a></li> --}}
                                    </ul>
                                </div><!-- End portfolio  -->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->

                        <div class="card">
                            <div class="card-body" style="min-height: 245px;">
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
                                                <img class="item-container"
                                                    src="{{ asset('assets/admin/images/small/img-6.jpg') }}"
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
                                <div class="col-12 invoice-item-box" style="overflow-y: auto;">
                                    <h4>Invoice</h4>

                                </div>
                                <hr>
                                <div class="w-100 pb-2 d-flex justify-content-between align-items-start border-top">
                                    <div class="w-50">
                                        <label class="mt-3">Jumlah Hari</label>
                                        <input class="form-control" type="number" id="jumlahHari" name="hari"
                                            value="1" min="1" max="15" style="width: 43%">
                                    </div>
                                    <div class="w-50 text-right">
                                        <h5 class="mt-3">Total Harga</h5>
                                        <h6 class="totalHarga mt-3" value="0">Rp. 0</h6>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <button class="btn btn-block btn-gradient-danger btn-sm btn-modal-alamat" type="button"
                                        data-toggle="modal" data-target="#modalAlamat">ALAMAT</button>
                                    <button class="btn btn-block btn-gradient-primary btn-md btn-checkout" type="submit">C
                                        H E C K O U T</button>
                                </div>
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

    <div class="modal fade" id="modalAlamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalLabel">Alamat Pelanggan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="mt-3">Nama Pelanggan</label>
                            <input class="form-control" type="text" id="namaPelanggan" name="namaPelanggan">
                        </div>
                        <div class="col-12">
                            <label class="mt-3">Alamat</label>
                            <textarea class="form-control" id="alamatPelanggan" rows="5" name="alamatPelanggan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-alamat" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/admin/plugins/filter/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/filter/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/filter/jquery.magnific-popup.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/admin/pages/jquery.gallery.init.js') }}"></script> --}}
    <script>
        var alamat = '';
        var nama = '';
        var hargaSehari = 0;
        var $container = $('.projects-wrapper');
        $('.invoice-item-box').css('max-height', ($('.page-content').innerHeight() - 200));
        
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
                    kategoriSelect.append('<li><a class="categories" data-filter=".' + kat.nama + '">' +
                        kat.nama + '</a></li>');
                });

                // Menampilkan daftar barang
                var html = "";
                $.each(data.barang, function(index, item) {

                    html += '<div class="col-lg-3 col-md-6 p-0 nf-item ' + item.kategori.nama + '">';
                    html += '<div class="item-box">';
                    html += '<a class="cbox-gallary1 items-rent" title="' + item.nama +
                        '" data-idBarang="' + item.id + '">';
                    html += '<img class="item-container" src="' + ('storage/' + item.foto) +
                        '"alt="1" />';
                    html += '<div class="item-mask">';
                    html += '<div class="item-caption">';
                    html += '<h6 class="text-light">' + item.nama + '</h6>';
                    html += '<p class="text-light">Rp. ' + item.harga + '</p>';
                    html += '</div>';
                    html += '</div>';
                    html += '</a>';
                    html += '</div>';
                    html += '</div>';
                });

                // Tampilkan daftar barang awal
                $(".barang-wrapper-kasir").append(html);

                // Inisialisasi Isotope setelah menambahkan daftar barang
                var $container = $(".barang-wrapper-kasir");
                $container.isotope({
                    itemSelector: '.nf-item',
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });

                // Filter items when filter link is clicked
                var $filter = $('#filter');
                $filter.on('click', 'a', function() {
                    var selector = $(this).attr('data-filter');
                    $filter.find('a').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false,
                        }
                    });
                    return false;
                });
            }
        });

        function addZeroPrefix(number) {
            return number < 10 ? '0' + number : number;
        }

        function getCurrentTimestamp() {
            var now = new Date();
            var timestamp = now.getFullYear() + '-' + addZeroPrefix(now.getMonth() + 1) + '-' + addZeroPrefix(now
                    .getDate()) + ' ' + addZeroPrefix(now.getHours()) + ':' + addZeroPrefix(now.getMinutes()) + ':' +
                addZeroPrefix(
                    now.getSeconds());
            return timestamp;
        }

        function hitungHarga(perintah, nilai) {
            var hari = $('#jumlahHari').val();
            if (perintah === "tambah") {

                hargaSehari = hargaSehari + nilai;
                var totalHarga = hargaSehari * hari;
                $('.totalHarga').attr('value', totalHarga).text('Rp. ' + totalHarga);

            } else if (perintah === "kurang") {

                hargaSehari = hargaSehari - nilai;
                var totalHarga = hargaSehari * hari;
                $('.totalHarga').attr('value', totalHarga).text('Rp. ' + totalHarga);

            } else {

                var totalHarga = hargaSehari * nilai;
                $('.totalHarga').attr('value', totalHarga).text('Rp. ' + totalHarga);

            }
        };

        function generateId(length) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            const charactersLength = characters.length;
            let counter = 0;
            while (counter < length) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                counter += 1;
            }
            return result;
        };

        $('.barang-wrapper-kasir').on('click', '.items-rent', function() {
            var idBarang = $(this).attr('data-idBarang');
            var namaBarang = $(this).attr('title');
            var hargaBarang = $(this).find('p').text();
            hargaBarang = hargaBarang.replace(/Rp. /g, "");

            if ($('.invoice-item-box .items[data-idBarang="' + idBarang + '"]').length) {
                var jumlah = parseInt($('.items[data-idBarang="' + idBarang + '"] .text-count').attr('data-count'));
                jumlah += 1;
                $('.items[data-idBarang="' + idBarang + '"] .text-count').attr('data-count', jumlah).text('x' +
                    jumlah);
                // $('.items[data-idBarang="'+idBarang+'"].h6[data-count]').attr('', '');
            } else {
                $('.invoice-item-box').append('<div class="items d-flex justify-content-between" data-idBarang="' +
                    idBarang + '" data-namaBarang="' + namaBarang + '" data-hargaBarang="' + hargaBarang +
                    '"><span><h5>' + namaBarang + '</h5><h6 style="font-size:10px">(@Rp.' + hargaBarang +
                    ')</h6></span> <div> <h6 class="text-count text-right mb-0" data-count="1">x1</h6> <div class="d-flex"> <a class="btn-kurang"><i class="ti-minus mr-2"></i></a> <a class="btn-buang"><i class="ti-trash"></i></a> </div> </div> </div>'
                )
            }

            hitungHarga('tambah', parseInt(hargaBarang));
        });

        $('.invoice-item-box').on('click', '.items .btn-kurang', function() {
            var item = $(this).closest('.items');
            var nilai = parseInt(item.attr('data-hargaBarang'));

            var jumlah = parseInt(item.find('.text-count').attr('data-count'));
            jumlah -= 1;
            item.find('.text-count').attr('data-count', jumlah).text('x' + jumlah);

            hitungHarga('kurang', nilai);
        });

        $('.invoice-item-box').on('click', '.items .btn-buang', function() {
            var item = $(this).closest('.items');
            var nilai = parseInt(item.attr('data-hargaBarang'));
            var jumlah = parseInt(item.find('.text-count').attr('data-count'));

            nilai = nilai * jumlah;

            hitungHarga('kurang', nilai);
            item.remove();
        });

        $('#jumlahHari').change(function() {
            var hari = $(this).val();
            hitungHarga('hari', hari);
        })


        // isi alamat
        $('.btn-alamat').click(function() {
            nama = $('#namaPelanggan').val();
            alamat = $('#alamatPelanggan').val();
            $('.btn-modal-alamat').removeClass('btn-gradient-danger').addClass('btn-gradient-success');
        });

        // checkout
        $('.btn-checkout').click(function() {
            var idShop = generateId(10);
            var idUserShop = 1;
            var alamatShop = alamat;
            var namaShop = nama;
            var hargaShop = $('.totalHarga').attr('value');
            var tanggalShop = getCurrentTimestamp();
            var barangShop = [];
            var lamaShop = $('#jumlahHari').val();
            var paymentShop = 'COD';
            var shippingShop = 'Pickup';
            var statusShop = 'Berlangsung';

            $('.items').each(function() {
                var barangId = $(this).attr('data-idBarang');
                var barangJumlah = parseInt($(this).find('.text-count').attr('data-count'));
                barangShop.push({
                    id: barangId,
                    jumlah: barangJumlah
                });
            });

            var dataShop = {
                kode_transaksi: idShop,
                id_user: idUserShop,
                alamat: alamatShop,
                namaPeminjam: namaShop,
                totalHarga: hargaShop,
                tanggalStart: tanggalShop,
                barangs: barangShop,
                lama_sewa: lamaShop,
                payment: paymentShop,
                shipping: shippingShop,
                status: statusShop,
            }

            $.ajax({
                url: "/checkout-kasir",
                type: "POST",
                data: JSON.stringify(dataShop),
                contentType: 'application/json',
                success: function(response) {
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        $('.items').remove();
                        $('.totalHarga').val('0').html('Rp. 0');
                    });
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });

        });
    </script>
@endpush
