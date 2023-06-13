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
                                    <li class="breadcrumb-item active">Data Penyewaan</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Data Penyewaan</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12 table-row">
                        <div class="card">
                            <div class="card-body">
                                <div class="w-100 mb-3 d-flex align-items-center justify-content-between">
                                    <h4 class="mt-0 header-title">Orderan Masuk</h4>
                                </div>
                                <!-- <p class="text-muted mb-4 font-13">
                                                                                                                                Available all products.
                                                                                                                            </p> -->

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table-transaksi" class="table                                 "
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Kode Transaksi</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Tanggal Masuk</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-12 edit-row">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn-back-table btn mb-2 btn-outline-info btn-round">
                                    <i class="typcn typcn-chevron-left"></i>
                                </button>
                                <!-- <form action=""> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ asset('assets/admin/images/products/img-7.png') }}" alt=""
                                            class=" mx-auto  d-block gambarEditBarang"
                                            style="max-width: 90%;object-fit: contain;">
                                        <button type="button"
                                            class="btn btn-img btn-secondary waves-effect mt-2 mx-auto d-block"
                                            style="width: 70%;" con="upload">Ubah
                                            Gambar</button>
                                        <input type="file" class="inpt-img-upload"
                                            style="visibility: hidden; position: absolute;">
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="single-pro-detail">
                                            <p class="mb-1">Barang</p>
                                            <div class="custom-border mb-3"></div>
                                            <h3 class="pro-title namaEditBarang" id="inline-name" style="width: 85%;"
                                                name="namaBarang" data-type="text" data-pk="1"
                                                data-title="Enter username">
                                                Tenda The North Face
                                            </h3>
                                            <!-- <h3 class="pro-titles" id="inline-usernames" style="width: 85%;"
                                                                                                                                                name="namaBarang" data-type="text" data-pk="1"
                                                                                                                                                data-title="Enter username">
                                                                                                                                                Tenda The North Face
                                                                                                                                            </h3> -->
                                            <div class="d-flex align-items-center">
                                                <h4 style="margin: 10px 0 0 0;">Rp. </h4>
                                                <h2 class="pro-price hargaEditBarang" id="inline-price" name="hargaBarang"
                                                    data-type="text" data-pk="1" data-title="Enter username"> 40.000
                                                </h2>
                                                <h4 style="margin: 10px 0 0 0;">/Hari</h4>
                                            </div>
                                            <h6 class="text-muted font-13">Keterangan :</h6>
                                            <p id="inline-keterangan" class="keteranganEditBarang" style="width: 85%;"
                                                name="ketBarang" data-type="textarea" data-pk="1"
                                                data-placeholder="Your comments here..." data-title="Enter comments">
                                                -Ukuran 4x4
                                                -Muat 5 orang
                                            </p>
                                            <!-- <br> -->
                                            <h6 class="text-muted font-13">Kategori :</h6>
                                            <h5 id="inline-kategori" class="kategoriEditBarang" style="width: fit-content;"
                                                name="kategoriBarang" data-type="select" data-pk="1" data-value="1"
                                                data-title="Select sex">
                                            </h5>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="text-muted font-13">Jumlah :</h6>
                                                    <h3 class="pro-title jumlahEditBarang" id="inline-ready"
                                                        name="stokTersedia" style="width: fit-content;" data-type="text"
                                                        data-pk="1" data-title="Enter username">
                                                        6
                                                    </h3>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h6 class="text-muted font-13">Status :</h6>
                                                    <h3 class="pro-title" id="inline-rent" name="stokDisewa"
                                                        style="width: fit-content;" data-type="text" data-pk="1"
                                                        data-title="Enter username">
                                                        tersedia
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <!-- </form> -->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col -->
                </div>

            </div><!-- container -->

        </div>
        <!-- end page content -->
    </div>

    <div id="modalAddBarang" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalLabel">Barang Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formBarang" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <img src="" alt="" class=" mx-auto  d-block"
                                    style="max-width: 90%;max-height: 150px;object-fit: contain;">
                                <button type="button" class="btn btn-img btn-info waves-effect my-2 mx-auto d-block"
                                    style="width: 50%;" con="input">
                                    Tambah Gambar
                                </button>
                                <input type="file" class="inpt-img-upload" name="foto" id="foto" required
                                    style="opacity: 0;">
                            </div>
                            <div class="col-6">
                                <label>Nama Barang</label>
                                <input class="form-control" type="text" id="namaBarang" name="nama">
                            </div>
                            <div class="col-md-6">
                                <label>Kategori Barang</label>
                                <select name="kategori_id" id="kategori_id" required class="form-control">
                                    <option value="Pilih Kategori" selected disabled></option>
                                    {{-- @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach --}}
                                </select>
                                {{-- <select class="select-kategori mb-3" style="width: 100%" data-placeholder="Choose">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                </select> --}}
                            </div>
                            <div class="col-6">
                                <label class="mt-3">Jumlah Barang</label>
                                <input class="form-control" type="number" id="jumlahBarang" name="jumlah">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Harga Sewa</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" id="example-input3-group1" name="harga"
                                        class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">/hari</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="mt-3">Keterangan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-gradient-primary btn-lg ml-auto"
                            id="submitFormItem">
                            Simpan
                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet"
        type="text/css"href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet"
        type="text/css"href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" />
    <link rel="stylesheet"
        type="text/css"href="{{ asset('assets/admin/plugins/x-editable/css/bootstrap-editable.css') }}" />
    <link rel="stylesheet"
        type="text/css"href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" />
@endpush

@push('js')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- XEditable Plugin -->
    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/x-editable/js/bootstrap-editable.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/itemJs.js') }}"></script>
@endpush

@push('jsPage')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#table-transaksi').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "iDisplayLength": 10,
                'processing': true,
                'serverSide': true,
                'ajax': {
                    url: "/get-transaksi-new",
                    dataSrc: function(response) {
                        var filteredData = response.data.filter(function(transaksi) {
                            return transaksi.tanggal_finish === null;
                        });
                        return filteredData;
                    }
                },
                columns: [{
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'kode_transaksi'
                    },
                    {
                        data: 'namaPeminjam'
                    },
                    {
                        data: 'alamat'
                    },
                    {
                        data: 'tanggal_start'
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return '<button class="btn btn-sm btn-selesai btn-gradient-primary" type="button" data-id="' +
                                data.id + '">Terima</button>';
                        }
                    }
                ]
            });

            $('#table-transaksi tbody').on('click', '.btn-selesai', function() {
                var transaksiId = $(this).data('id');
                var status = 'Berlangsung';

                // Mengirim permintaan Ajax untuk memperbarui tanggal_finish
                $.ajax({
                    url: "/transaksi-proses/" + transaksiId,
                    type: "POST",
                    data: {
                        status: status
                    },
                    success: function(response) {
                        // Refresh atau perbarui tampilan tabel setelah berhasil memperbarui tanggal_finish
                        $('#table-transaksi').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });

        });
    </script>
@endpush
