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
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-eco">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h4 class="title-text mt-0">Visits</h4>
                                        <h3 class="font-weight-semibold mb-1" id="userCount">0</h3>
                                        <p class="mb-0 text-muted text-truncate"><span class="text-success"><i
                                                    class="mdi mdi-trending-up"></i>8.5%</span>Up From Yesterday</p>
                                    </div>
                                    <!--end col-->
                                    <div class="col-4 text-center align-self-center">
                                        <!-- <span class="card-eco-icon">👳🏻</span> -->
                                        <i class="dripicons-user-group card-eco-icon  align-self-center"></i>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="bg-pattern"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="card card-eco">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h4 class="title-text mt-0">New Orders</h4>
                                        <h3 class="font-weight-semibold mb-1" id="prosesCount">0</h3>
                                        <p class="mb-0 text-muted text-truncate"><span class="text-success"><i
                                                    class="mdi mdi-trending-up"></i>1.5%</span> Up From Last Week</p>
                                    </div>
                                    <!--end col-->
                                    <div class="col-4 text-center align-self-center">
                                        <!-- <span class="card-eco-icon">🛒</span> -->
                                        <i class="dripicons-cart card-eco-icon  align-self-center"></i>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="bg-pattern"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="card card-eco">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h4 class="title-text mt-0">Orders Done</h4>
                                        <h3 class="font-weight-semibold mb-1" id="selesaiCount">0</h3>
                                        <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i
                                                    class="mdi mdi-trending-down"></i>3%</span> Down From Last Month</p>
                                    </div>
                                    <!--end col-->
                                    <div class="col-4 text-center align-self-center">
                                        <!-- <span class="card-eco-icon">🎲</span> -->
                                        <i class="dripicons-jewel card-eco-icon  align-self-center"></i>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="bg-pattern"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3">
                        <div class="card card-eco">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8 pr-0">
                                        <h4 class="title-text mt-0">Revenue</h4>
                                        <h3 class="font-weight-semibold mb-1" style="font-size: 150%;"
                                            id="totalHargaSelesai">Rp. 0</h3>
                                        <p class="mb-0 text-muted text-truncate"><span class="text-success"><i
                                                    class="mdi mdi-trending-up"></i>10.5%</span> Up From Yesterday</p>
                                    </div>
                                    <!--end col-->
                                    <div class="col-4 text-center align-self-center">
                                        <!-- <span class="card-eco-icon">💰</span> -->
                                        <i class="dripicons-wallet card-eco-icon  align-self-center"></i>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="bg-pattern"></div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="w-100 mb-3 d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mt-0">Populer Product</h4>
                                    <a href="{{ url('barang') }}" class="text-right d-block">View All<i
                                            class="dripicons-arrow-thin-right ml-2"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <tbody id="barangData">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body order-list">
                                <div class="w-100 mb-3 d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mt-0">Penyewaan Berlangsung</h4>
                                    <a href="{{ url('penyewaan') }}" class="text-right d-block">View All<i
                                            class="dripicons-arrow-thin-right ml-2"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-top-0">Code</th>
                                                <th class="border-top-0">Order Date / Time</th>
                                                <th class="border-top-0">Amount</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>
                                        <tbody id="berlangsungData">
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <!--end /div-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <!--end col-->


                </div>
                <!--end row-->

            </div><!-- container -->

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chartjs/roundedBar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/lightpick/lightpick.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/jquery.sales_dashboard.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/dashboard-data',
                type: 'GET',
                success: function(response) {
                    // Menggunakan response untuk menampilkan data
                    $('#userCount').text(response.userCount);
                    $('#prosesCount').text(response.prosesCount);
                    $('#selesaiCount').text(response.selesaiCount);
                    $('#totalHargaSelesai').text(formatRupiah(response.totalHargaSelesai, 'Rp'));

                    // Menampilkan data barang
                    var barangData = response.barangData;
                    var barangHtml = '';
                    for (var i = 0; i < barangData.length; i++) {
                        var dataFotoBarang = 'storage/' + barangData[i].foto;
                        var dataKategoriBarang = barangData[i].kategori.nama;
                        var dataNamaBarang = barangData[i].nama;
                        var dataHargaBarang = barangData[i].harga;

                        barangHtml += '<tr>';
                        barangHtml += '<td class="border-top-0">';
                        barangHtml += '<div class="media">';
                        barangHtml += '<img src="' + dataFotoBarang +
                            '" height="80" class="mr-4" alt="...">';
                        barangHtml += '<div class="media-body align-self-center">';
                        barangHtml += '<span class="badge badge-soft-success p-2 font-12 mb-2">' +
                            dataKategoriBarang + '</span>';
                        barangHtml += '<h4 class="mt-0 title-text mb-0">' + dataNamaBarang + '</h4>';
                        barangHtml += '</div>';
                        barangHtml += '</div>';
                        barangHtml += '</td>';
                        barangHtml += '<td class="text-right border-top-0">';
                        barangHtml += '<h5 class="">' + formatRupiah(dataHargaBarang, 'Rp') + '</h5>';
                        barangHtml += '</td>';
                        barangHtml += '</tr>';
                    }
                    $('#barangData').html(barangHtml);

                    // Menampilkan data transaksi berlangsung
                    var berlangsungData = response.berlangsungData;
                    var berlangsungHtml = '';
                    for (var j = 0; j < berlangsungData.length; j++) {
                        var kodeTransaksi = berlangsungData[j].kode_transaksi;
                        var tanggalStart = berlangsungData[j].tanggal_start;
                        var totalHarga = berlangsungData[j].totalHarga;

                        berlangsungHtml += '<tr>';
                        berlangsungHtml += '<td>' + kodeTransaksi + '</td>';
                        berlangsungHtml += '<td>' + tanggalStart + '</td>';
                        berlangsungHtml += '<td>' + formatRupiah(totalHarga, 'Rp') + '</td>';
                        berlangsungHtml += '</tr>';
                    }
                    $('#berlangsungData').html(berlangsungHtml);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });

        })
    </script>
@endpush
