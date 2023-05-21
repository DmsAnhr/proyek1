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
                                    <li class="breadcrumb-item active">Data Barang</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Data Barang</h4>
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
                                    <h4 class="mt-0 header-title">Barang Tersedia</h4>
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
                                            <table id="table-items" class="table                                 "
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>Nama Barang</th>
                                                        <th>Kategori</th>
                                                        <th>Tersedia</th>
                                                        <th>Harga/hari</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <img src="../assets/images/products/img-2.png" alt=""
                                                                height="52">
                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Apple
                                                                    Watch</a>
                                                                <br>
                                                                <span class="text-muted font-13">Size-05 (Model
                                                                    2019)</span>
                                                            </p>
                                                        </td>
                                                        <td>Sports</td>
                                                        <td>32</td>
                                                        <td>$39</td>
                                                        <td><span class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                                <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                                <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                                <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                                <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Bata
                                                                    Shoes</a>
                                                            </p>
                                                        </td>
                                                        <td>Footwear</td>
                                                        <td>24</td>
                                                        <td>$49</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">

                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Best
                                                                    Look
                                                                    Chair</a>
                                                            </p>
                                                        </td>
                                                        <td>Interior</td>
                                                        <td>32</td>
                                                        <td>$39</td>
                                                        <td><span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">

                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Brown
                                                                    Morden
                                                                    Chair</a>
                                                            </p>
                                                        </td>
                                                        <td>Interior</td>
                                                        <td>6</td>
                                                        <td>$20</td>
                                                        <td><span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Cosco
                                                                    Vollyboll</a>
                                                            </p>
                                                        </td>
                                                        <td>Sports</td>
                                                        <td>8</td>
                                                        <td>$49</td>
                                                        <td><span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">

                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Green
                                                                    Morden
                                                                    Chair</a>
                                                            </p>
                                                        </td>
                                                        <td>Interior</td>
                                                        <td>10</td>
                                                        <td>$99</td>
                                                        <td><span class="badge badge-md badge-soft-pink">Kosong</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">

                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Important
                                                                    Chair</a>
                                                            </p>
                                                        </td>
                                                        <td>Interior</td>
                                                        <td>32</td>
                                                        <td>$39</td>
                                                        <td><span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">
                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Lava
                                                                    Purse</a>p>
                                                        </td>
                                                        <td>Life Style</td>
                                                        <td>52</td>
                                                        <td>$89</td>
                                                        <td><span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">

                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">Morden
                                                                    Chair</a>
                                                            </p>
                                                        </td>
                                                        <td>Interior</td>
                                                        <td>10</td>
                                                        <td>$99</td>
                                                        <td><span class="badge badge-md badge-soft-pink">Kosong</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href="#"
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">

                                                            <p class="d-inline-block align-middle mb-0">
                                                                <a href=""
                                                                    class="d-inline-block align-middle mb-0 product-name">New
                                                                    Morden
                                                                    Chair</a>
                                                            </p>
                                                        </td>
                                                        <td>Interior</td>
                                                        <td>6</td>
                                                        <td>$20</td>
                                                        <td><span
                                                                class="badge badge-md badge-soft-secondary">Tersedia</span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none"
                                                                    id="dLabel8" data-toggle="dropdown" href=""
                                                                    role="button" aria-haspopup="false"
                                                                    aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-h font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dLabel8" x-placement="bottom-end"
                                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
                                                                    <a class="dropdown-item link-edit">Edit</a>
                                                                    <a class="dropdown-item ">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
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
                                        <img src="../assets/images/products/img-7.png" alt=""
                                            class=" mx-auto  d-block" style="max-width: 90%;object-fit: contain;">
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
                                            <h3 class="pro-title" id="inline-name" style="width: 85%;" name="namaBarang"
                                                data-type="text" data-pk="1" data-title="Enter username">
                                                Tenda The North Face
                                            </h3>
                                            <!-- <h3 class="pro-titles" id="inline-usernames" style="width: 85%;"
                                                    name="namaBarang" data-type="text" data-pk="1"
                                                    data-title="Enter username">
                                                    Tenda The North Face
                                                </h3> -->
                                            <div class="d-flex align-items-center">
                                                <h4 style="margin: 10px 0 0 0;">Rp. </h4>
                                                <h2 class="pro-price" id="inline-price" name="hargaBarang"
                                                    data-type="text" data-pk="1" data-title="Enter username"> 40.000
                                                </h2>
                                                <h4 style="margin: 10px 0 0 0;">/Hari</h4>
                                            </div>
                                            <h6 class="text-muted font-13">Keterangan :</h6>
                                            <p id="inline-keterangan" style="width: 85%;" name="ketBarang"
                                                data-type="textarea" data-pk="1"
                                                data-placeholder="Your comments here..." data-title="Enter comments">
                                                -Ukuran 4x4
                                                -Muat 5 orang
                                            </p>
                                            <!-- <br> -->
                                            <h6 class="text-muted font-13">Kategori :</h6>
                                            <h5 id="inline-kategori" style="width: fit-content;" name="kategoriBarang"
                                                data-type="select" data-pk="1" data-value="1"
                                                data-title="Select sex">
                                            </h5>
                                            <h6 class="text-muted font-13"></h6>
                                            <h5 id="inline-kategori" style="width: fit-content;" name="kategoriBarang"
                                                data-type="select" data-pk="1" data-value="1"
                                                data-title="Select sex">
                                            </h5>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h6 class="text-muted font-13">Jumlah Barang :</h6>
                                                    <h3 class="pro-title" data-type="text" data-pk="1"
                                                        data-title="Enter username">
                                                        10
                                                    </h3>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h6 class="text-muted font-13">Tersedia :</h6>
                                                    <h3 class="pro-title" id="inline-ready" name="stokTersedia"
                                                        style="width: fit-content;" data-type="text" data-pk="1"
                                                        data-title="Enter username">
                                                        6
                                                    </h3>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h6 class="text-muted font-13">Disewa :</h6>
                                                    <h3 class="pro-title" id="inline-rent" name="stokDisewa"
                                                        style="width: fit-content;" data-type="text" data-pk="1"
                                                        data-title="Enter username">
                                                        4
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
