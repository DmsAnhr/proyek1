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
                                    <li class="breadcrumb-item active">Data User</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kumpulan User</h4>
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
                                    <h4 class="mt-0 header-title">List User</h4>
                                    <button type="button" class="btn btn-sm btn-gradient-primary btn-lg"
                                        data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center"
                                        title="User Baru">
                                        <i class="fas fa-plus"></i> User Baru
                                    </button>
                                </div>
                                <!-- <p class="text-muted mb-4 font-13">
                                    Available all products.
                                </p> -->

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table-user" class="table                                 "
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>No. Telp</th>
                                                        <th>Role</th>
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
                    <h5 class="modal-title mt-0" id="exampleModalLabel">User Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formUser" method="POST" action="{{url('make_user')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label>Full Name</label>
                                <input class="form-control" name="name" id="name_user" type="text">
                            </div>
                            <div class="col-6">
                                <label>Email</label>
                                <input class="form-control" name="email" id="email_user" type="email">
                            </div>
                            <div class="col-6">
                                <label>Username</label>
                                <input class="form-control" name="username" id="username_user" type="text">
                            </div>
                            <div class="col-6">
                                <label>Password</label>
                                <input class="form-control" name="password" id="password_user" type="password">
                            </div>
                            <div class="col-12">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat_user"></textarea>
                            </div>
                            
                            <div class="col-4">
                                <label>No. Telp</label>
                                <input class="form-control" name="notelp" id="notelp_user" type="number">
                            </div>
                            <div class="col-4">
                                <label>Kecamatan</label>
                                <input class="form-control" name="kecamatan" id="kecamatan_user" type="text">
                            </div>
                            <div class="col-4">
                                <label>Kode Pos</label>
                                <input class="form-control" name="kodepos" id="kodepos_user" type="number">
                            </div>
                            <div class="col-12">
                                <label>Role</label>
                                <select class="form-control" name="role" id="role_user">
                                    <option value="user" selected>User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submitFormUser" class="btn btn-sm btn-gradient-primary btn-lg ml-auto">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@push('jsPage')
    <script>
        $.ajax({
            url: "/get_user", // Ganti dengan URL endpoint yang sesuai untuk mengambil data user
            type: "GET",
            dataType: "json",
            success: function(data) {
                var userTable = $("#table-user tbody"); // Ganti dengan ID atau selektor yang sesuai untuk tabel user

                // Hapus data user sebelumnya, jika ada
                userTable.empty();

                // Variabel untuk menyimpan nomor
                var nomor = 1;

                // Iterasi data user dan tambahkan baris ke tabel
                $.each(data, function(index, user) {
                    var row = $("<tr></tr>");

                    // Tambahkan kolom dengan nomor
                    row.append("<td>" + nomor + "</td>");

                    // Tambahkan kolom dengan nilai user
                    row.append("<td>" + user.name + "</td>");

                    // Tambahkan kolom dengan nilai user
                    row.append("<td>" + user.email + "</td>");

                    // Tambahkan kolom dengan nilai user
                    row.append("<td>" + user.notelp + "</td>");

                    // Tambahkan kolom dengan nilai user
                    row.append("<td>" + user.role + "</td>");

                    // Tambahkan baris ke tabel
                    userTable.append(row);

                    // Tambahkan 1 ke nomor setiap kali iterasi
                    nomor++;
                });
            },
        });

    </script>
@endpush