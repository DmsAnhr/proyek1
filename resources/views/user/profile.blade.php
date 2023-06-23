@extends('user')

@section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content" style="padding: 0 0 60px 0;background-color: #f5fbff">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12"style="padding: 0;">
                        <div class="card">
                            <div class="card-body  met-pro-bg">
                                <div class="met-profile">
                                    <div class="row">
                                        <div class="col-lg-8 align-self-center mb-3 mb-lg-0">
                                            <div class="met-profile-main">
                                                <div class="met-profile-main-pic">
                                                    <img src="{{ asset('assets/admin/images/userAvatar.jpg') }}"
                                                        style="width: 128px;height: 128px;object-fit: cover;object-position: center"
                                                        alt="" class="rounded-circle">
                                                    {{-- <span class="fro-profile_main-pic-change">
                                                        <i class="fas fa-camera"></i>
                                                    </span> --}}
                                                </div>
                                                <div class="met-profile_user-detail">
                                                    <h5 class="met-user-name full-name">Fullname</h5>
                                                    <p class="mb-0 met-user-name-post user-name">Username</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4 ml-auto">
                                            <ul class="list-unstyled personal-detail">
                                                <li class="">
                                                    <i class="dripicons-phone mr-2 text-info font-18"></i>
                                                    <span class="phone-profile">
                                                        <b> HP </b> : xxxx-xxxx-xxxx
                                                    </span>
                                                </li>
                                                <li class="mt-2">
                                                    <i class="dripicons-mail text-info font-18 mt-2 mr-2"></i>
                                                    <span class="email-profile">
                                                        <b>Email </b> : email@email.com
                                                    </span>
                                                </li>
                                                <li class="mt-2 alamat-profile"
                                                    style="display: flex;align-items: flex-start;">
                                                    <i class="dripicons-home text-info font-18 mr-2"></i>
                                                    <b>Alamat </b> : Admin
                                                </li>
                                            </ul>
                                            {{-- <div class="button-list btn-social-icon">
                                                <button type="button" class="btn btn-blue btn-circle">
                                                    <i class="fab fa-facebook-f"></i>
                                                </button>

                                                <button type="button" class="btn btn-secondary btn-circle ml-2">
                                                    <i class="fab fa-twitter"></i>
                                                </button>

                                                <button type="button" class="btn btn-pink btn-circle  ml-2">
                                                    <i class="fab fa-dribbble"></i>
                                                </button>
                                            </div> --}}
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end f_profile-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content detail-list" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="settings_detail">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-9 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                {{-- <form method="post" class="card-box">
                                                    <input type="file" id="input-file-now-custom-1" class="dropify"
                                                        data-default-file="{{ asset('assets/admin/images/users/user-1.png') }}" />
                                                    <span class="input-icon icon-right">
                                                        <textarea rows="4" class="form-control" placeholder="Post a new message"></textarea>
                                                    </span>
                                                    <div class="float-right my-3">
                                                        <a class="btn btn-sm btn-gradient-primary px-4 mb-0">Send</a>
                                                    </div>
                                                    <ul class="list-inline mt-1">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i
                                                                    class=" fas fa-video font-18 mr-2 mt-2 text-primary"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i
                                                                    class="fas fa-camera  font-18 mt-2 text-primary"></i></a>
                                                        </li>
                                                    </ul>
                                                </form> --}}

                                                <div class="">
                                                    <form class="form-horizontal form-material mb-0" id="formUpdateUser">
                                                        <div class="form-group">
                                                            <label style="margin-bottom: 0" for="">Nama
                                                                Lengkap</label>
                                                            <input type="text" placeholder="Full Name"
                                                                class="form-control" name="Nama Lengkap" id="form-fullname">
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <label style="margin-bottom: 0"
                                                                    for="">Username</label>
                                                                <input type="text" placeholder="Username"
                                                                    class="form-control" name="uname" id="form-uname">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label style="margin-bottom: 0" for="">Email</label>
                                                                <input type="email" placeholder="Email"
                                                                    class="form-control" name="email" id="form-email">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label style="margin-bottom: 0" for="">Nomor HP</label>
                                                                <input type="text" placeholder="Nomor HP"
                                                                    class="form-control" name="phone" id="form-phone">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="margin-bottom: 0" for="">Alamat</label>
                                                            <textarea rows="5" placeholder="Alamat" class="form-control" name="alamat" id="form-alamat"></textarea>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label style="margin-bottom: 0"
                                                                    for="">Kecamatan</label>
                                                                <input type="text" placeholder="kecamatan"
                                                                    class="form-control" name="kecamatan"
                                                                    id="form-kecamatan">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label style="margin-bottom: 0" for="">Kode
                                                                    Pos</label>
                                                                <input type="text" placeholder="kodepos"
                                                                    class="form-control" name="kodepos"
                                                                    id="form-kodepos">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button
                                                                class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0">
                                                                Ubah Profil
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end settings detail-->
                        </div>
                        <!--end tab-content-->

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div><!-- container -->
        </div>
        <!-- end page content -->
        <div class="wraps-loading"
            style="width: 100%;height: 100%;display: flex;justify-content:center;align-items: center">
            <div id="loading-circles"></div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .wraps-loading {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0000007a
        }

        #loading-circles {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            animation: spin 1s infinite linear;
            margin: 0 auto;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endpush
@push('jsPage')
    <script>
        $.ajax({
            url: '/user-detail/',
            method: 'GET',
            success: function(data) {

                $('.user-name').text(data.username);
                $('.full-name').text(data.name);
                $('.phone-profile').html('<b> HP </b> : ' + data.notelp);
                // console.log(data.noTelp)
                $('.email-profile').html('<b> Email </b> : ' + data.email);
                $('.alamat-profile').html(
                    '<i class="dripicons-home text-info font-18 mr-2"></i><b style="margin-right:5px;margin-left: 3px;">Alamat </b> : ' +
                    data.alamat);

                $('#form-fullname').val(data.name);
                $('#form-uname').val(data.username);
                $('#form-email').val(data.email);
                $('#form-phone').val(data.notelp);
                $('#form-pass').val('');
                $('#form-repass').val('');
                $('#form-alamat').val(data.alamat);
                $('#form-kecamatan').val(data.kecamatan);
                $('#form-kodepos').val(data.kodepos);
                $('.wraps-loading').hide();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });

        $('#formUpdateUser').on('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman form secara default

            // Mengambil nilai-nilai input dari form
            var name = $('#form-fullname').val();
            var username = $('#form-uname').val();
            var email = $('#form-email').val();
            var noTelp = $('#form-phone').val();
            // var password = $('#form-pass').val();
            var alamat = $('#form-alamat').val();
            var kecamatan = $('#form-kecamatan').val();
            var kodepos = $('#form-kodepos').val();

            // Mengirim data ke server menggunakan Ajax
            $.ajax({
                url: "/user-update",
                type: "POST",
                data: {
                    name: name,
                    username: username,
                    email: email,
                    noTelp: noTelp,
                    alamat: alamat,
                    kecamatan: kecamatan,
                    kodepos: kodepos,
                },
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Profil diperbarui',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        location.reload();
                    });
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Menghandle kesalahan jika terjadi error saat melakukan update
                    // Misalnya, menampilkan pesan error atau melakukan aksi lainnya
                    console.log(xhr.responseText);
                }
            });
        });
    </script>
@endpush
