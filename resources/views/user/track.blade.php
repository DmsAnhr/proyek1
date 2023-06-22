@extends('user')

@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content" style="background-color: #f5fbff">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ciliwung Camp</a></li>
                                    <li class="breadcrumb-item active">Track</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Track Order</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12 table-row">
                        <div class="card" style="box-shadow: none;">
                            <div class="card-body">
                                <!-- <p class="text-muted mb-4 font-13">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Available all products.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </p> -->

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row py-4">
                                        <div class="col-2"></div>
                                        <div class="col-8 mb-4">
                                            <form class="form-inline w-100">
                                                <div class="form-group mx-sm-3 mb-2" style="width: 65%">
                                                    <label for="inputPassword2" class="sr-only">Password</label>
                                                    <input type="text" class="form-control" id="kode-search"
                                                        name="kode" placeholder="Kode Transaksi" style="width: 100%">
                                                </div>
                                                <button type="button" class="btn btn-primary mb-2 btn-track"
                                                    style="width: 30%">
                                                    Track Order
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-2"></div>
                                        <div class="col-12 col-sm-8">
                                            <table id="table-transaksi" class="table table-striped"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th></th>
                                                        <th>Kode Transaksi</th>
                                                        <th>Nama</th>
                                                        <th>Tanggal Mulai</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-2"></div>
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
                    childTableData += '<td>Total Harga</td>';
                    childTableData += '<td>:</td>';
                    childTableData += '<td>' + formatRupiah(data.totalHarga, 'Rp') + '</td>';
                    childTableData += '</tr>';

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

            // var table = $('#table-transaksi').DataTable({
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     "iDisplayLength": 10,
            //     'processing': true,
            //     'searching': false,
            //     'paginate': false,
            //     'info': false,
            //     'select': "single",
            // });

            $('.btn-track').click(function() {
                var code = $('#kode-search').val();
                $('#table-transaksi').DataTable().destroy();
                var table = $('#table-transaksi').DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "iDisplayLength": 10,
                    'processing': true,
                    // 'serverSide': true,
                    'searching': false,
                    'paginate': false,
                    'info': false,
                    'select': "single",
                    'ajax': {
                        url: "/track-order/" + code,
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
                    ]
                });
            });


            // Add event listener for opening and closing details
            $('#table-transaksi tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = $('#table-transaksi').DataTable().row(tr);

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
