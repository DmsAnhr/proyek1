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
                            <h4 class="page-title">Manage User</h4>
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
                                    <button type="button" class="btn btn-sm btn-gradient-primary btn-lg btn-new-user"
                                        data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-center"
                                        title="User Baru">
                                        <i class="fas fa-plus"></i> User Baru
                                    </button>
                                </div>

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table-user" class="table"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>No. Telp</th>
                                                        <th>Role</th>
                                                        <th>Action</th>
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
                <form id="formUser" method="POST" action="{{ url('make_user') }}">
                    <div class="modal-body">
                        <div id="user-success-message"></div>
                        @csrf
                        <div class="row">
                            <p id="user-success-message"></p>
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
                            <button type="submit" id="submitFormUser"
                                class="btn btn-sm btn-gradient-primary btn-lg ml-auto">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@push('jsPage')
    <script>
        function loadUserTable() {
            $.ajax({
                url: "/get_user",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var userTable = $("#table-user tbody");
                    userTable.empty();

                    var nomor = 1;

                    $.each(data, function(index, user) {
                        var row = $("<tr></tr>");
                        row.append("<td>" + nomor + "</td>");
                        row.append("<td>" + user.name + "</td>");
                        row.append("<td>" + user.email + "</td>");
                        row.append("<td>" + user.notelp + "</td>");
                        row.append("<td>" + user.role + "</td>");

                        var actionButtons = $("<td></td>");
                        var editButton = $(
                            '<button type="button" class="btn btn-sm btn-gradient-primary btn-lg edit-user-btn" data-toggle="modal" data-target=".bs-example-modal-center" title="Edit User"><i class="fas fa-pencil-alt"></i></button>'
                        );
                        var deleteButton = $(
                            '<button type="button" class="btn btn-sm btn-gradient-danger btn-lg delete-user-btn" title="Delete User"><i class="fas fa-trash"></i></button>'
                        );

                        editButton.data('user', user);
                        deleteButton.data('user', user);

                        actionButtons.append(editButton);
                        actionButtons.append(deleteButton);
                        row.append(actionButtons);

                        userTable.append(row);

                        nomor++;
                    });
                },
            });
        }

        function clearUserForm() {
            $("#formUser")[0].reset();
            $("#user-success-message").empty();
        }

        $(document).ready(function() {
            loadUserTable();

            $(".btn-new-user").click(function() {
                clearUserForm();
                var form = $("#formUser");
                form.attr('action', "{{ url('make_user') }}");
            });

            // Edit User Button
            $(document).on('click', '.edit-user-btn', function() {
                var user = $(this).data('user');

                $("#name_user").val(user.name);
                $("#email_user").val(user.email);
                $("#username_user").val(user.username);
                $("#password_user").val(user.password);
                $("#alamat_user").val(user.alamat);
                $("#notelp_user").val(user.notelp);
                $("#kecamatan_user").val(user.kecamatan);
                $("#kodepos_user").val(user.kodepos);
                $("#role_user").val(user.role);

                // Change form action to update_user route with user id
                var form = $("#formUser");
                form.attr('action', "{{ url('user') }}/" + user.id);
            });

            // Delete User Button
            $(document).on('click', '.delete-user-btn', function() {
                var user = $(this).data('user');
                // var confirmation = confirm('Are you sure you want to delete this user?');

                Swal.fire({
                    title: 'Confirmation!',
                    text: 'Are you sure you want to delete this user?',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then(function() {
                    $.ajax({
                        url: "/user_delete/" + user.id,
                        type: "delete",
                        dataType: "json",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: user.id
                        },
                        success: function(data) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'User has ben deleted!',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(function() {
                                loadUserTable();
                            });
                        }
                    });
                });

            });

            // Submit User Form
            $("#formUser").submit(function(event) {
                event.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                var method = "POST";

                $.ajax({
                    url: url,
                    type: method,
                    dataType: "json",
                    data: form.serialize(),
                    success: function(data) {
                        // var message = "localhost says: " + data.message;
                        console.log(response);
                        $("#user-success-message").text(response);
                        Swal.fire({
                            title: 'Success!',
                            text: response,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            clearUserForm();
                            loadUserTable();
                            $(".bs-example-modal-center").modal("hide");
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endpush
