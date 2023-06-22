@extends('user')

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
                                    <li class="breadcrumb-item active">Riwayat</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Riwayat Penyewaan</h4>
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
                                <!-- <p class="text-muted mb-4 font-13">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Available all products.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </p> -->

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table-transaksi" class="table table-striped"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th></th>
                                                        <th>Kode Transaksi</th>
                                                        <th>Nama</th>
                                                        <th>Tanggal Mulai</th>
                                                        <th>Tanggal Selesai</th>
                                                        <th>Total Harga</th>
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
                                    <input type="text" id="example-input3-group1" name="harga" class="form-control">
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
                        <button type="submit" class="btn btn-sm btn-gradient-primary btn-lg ml-auto" id="submitFormItem">
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

            function formatChildTable(data) {
                console.log(data.tanggal_finish);
                var childTableData = '';
                if (data.barang) {
                    childTableData += '<div style="display:flex;justify-content:space-between;">';
                    childTableData += '<table style="width:49%;height:fit-content;border:0!important">';
                    childTableData += '<tr>';
                    childTableData += '<td>Lama Sewa</td>';
                    childTableData += '<td>:</td>';
                    childTableData += '<td>' + data.lama_sewa + ' hari</td>';
                    childTableData += '</tr>';

                    childTableData += '<tr>';
                    childTableData += '<td>Shipping</td>';
                    childTableData += '<td>:</td>';
                    childTableData += '<td>' + data.shipping + '</td>';
                    childTableData += '</tr>';

                    childTableData += '<tr>';
                    childTableData += '<td>Pembayaran</td>';
                    childTableData += '<td>:</td>';
                    childTableData += '<td>' + data.payment + '</td>';
                    childTableData += '</tr>';

                    childTableData += '<tr>';
                    childTableData += '<td>Alamat</td>';
                    childTableData += '<td>:</td>';
                    childTableData += '<td>' + data.alamat + '</td>';
                    childTableData += '</tr>';
                    childTableData += '</table>';

                    childTableData += '<div style="width:2px;background:#256afd"></div>';

                    childTableData +=
                        '<table class="table-bordered" cellpadding="5" cellspacing="0" border="0" style="width:50%;height:fit-content">';
                    childTableData += '<tr>';
                    childTableData += '<th colspan=3 style="text-align:center">List Barang</th>';
                    childTableData += '</tr>';
                    childTableData += '<tr>';
                    childTableData += '<th>Nama Barang</th>';
                    childTableData += '<th>Jumlah Barang</th>';
                    childTableData += '<th>Harga Barang</th>';
                    childTableData += '</tr>';

                    $.each(data.barang, function(index, barang) {
                        childTableData += '<tr>';
                        childTableData += '<td>' + barang.nama_barang + '</td>';
                        childTableData += '<td>' + barang.jumlah_barang + '</td>';
                        childTableData += '<td>' + formatRupiah(barang.harga_barang, 'Rp') + '</td>';
                        childTableData += '</tr>';
                    });

                    childTableData += '</table>';
                    childTableData += '</div>';
                }

                return childTableData;
            }


            var table = $('#table-transaksi').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "iDisplayLength": 10,
                'processing': true,
                // 'serverSide': true,
                'info': false,
                'select': "single",
                'ajax': {
                    url: "/get-orderlist",
                    dataSrc: 'data'
                },
                columns: [{
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    {
                        data: 'kode_transaksi'
                    },
                    {
                        data: 'namaPeminjam'
                    },
                    {
                        data: 'tanggal_start'
                    },
                    {
                        data: 'tanggal_finish'
                    },
                    {
                        data: 'totalHarga',
                        render: function(data, type, row, meta) {
                            return formatRupiah(data, 'Rp');
                        }
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            var bedge = "";
                            if (data.status === "Selesai") {
                                bedge = "badge-success";
                            } else if (data.status === "Proses") {
                                bedge = "badge-warning";
                            } else if (data.status === "Berlangsung") {
                                bedge = "badge-primary";
                            }
                            return '<span class="badge ' + bedge + ' p-2">' +
                                data.status +
                                '</span>';
                        }
                    }
                ],
                "drawCallback": function(settings) {
                    // Mendapatkan waktu sekarang
                    var currentTime = new Date();

                    // Loop melalui setiap baris dalam tabel
                    $('#table-transaksi tbody tr').each(function() {
                        var row = $(this);
                        var tanggalFinish = row.find('td:eq(3)').text();

                        // Menghitung tanggal deadline
                        var deadline = new Date(tanggalFinish);

                        // Membandingkan tanggal deadline dengan waktu sekarang
                        if (deadline < currentTime) {
                            row.css('background-color', '#ff3636');
                            row.find('td').css('color', '#fff');
                        }
                    });
                }
            });

            // Add event listener for opening and closing details
            $('#table-transaksi tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    var rowData = row.data();
                    row.child(formatChildTable(rowData)).show();
                    tr.addClass('shown');
                }
            });

        });
    </script>
@endpush
