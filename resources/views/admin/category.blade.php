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
                                    <li class="breadcrumb-item active">Data Kategori</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kumpulan Kategori</h4>
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
                                    <h4 class="mt-0 header-title">List Kategori</h4>
                                    <button type="button" class="btn btn-sm btn-gradient-primary btn-lg"
                                        data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center"
                                        title="Kategori Baru">
                                        <i class="fas fa-plus"></i> Kategori Baru
                                    </button>
                                </div>
                                <!-- <p class="text-muted mb-4 font-13">
                                    Available all products.
                                </p> -->

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table-kategori" class="table                                 "
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Nama Kategori</th>
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

    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalLabel">kategori Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formKategori" method="POST" action="{{url('make_kategori')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label>Nama Kategori</label>
                                <input class="form-control" name="nama" id="nama_kategori" type="text">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submitFormKategori" class="btn btn-sm btn-gradient-primary btn-lg ml-auto">
                        Simpan
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@push('jsPage')
    <script>
        $.ajax({
            url: "/get_kategori", // Ganti dengan URL endpoint yang sesuai untuk mengambil data kategori
            type: "GET",
            dataType: "json",
            success: function(data) {
                var kategoriTable = $("#table-kategori tbody"); // Ganti dengan ID atau selektor yang sesuai untuk tabel kategori

                // Hapus data kategori sebelumnya, jika ada
                kategoriTable.empty();

                // Variabel untuk menyimpan nomor
                var nomor = 1;

                // Iterasi data kategori dan tambahkan baris ke tabel
                $.each(data, function(index, kategori) {
                    var row = $("<tr></tr>");

                    // Tambahkan kolom dengan nomor
                    row.append("<td>" + nomor + "</td>");

                    // Tambahkan kolom dengan nilai kategori
                    row.append("<td>" + kategori.nama + "</td>");

                    // Tambahkan baris ke tabel
                    kategoriTable.append(row);

                    // Tambahkan 1 ke nomor setiap kali iterasi
                    nomor++;
                });
            },
        });

    </script>
@endpush