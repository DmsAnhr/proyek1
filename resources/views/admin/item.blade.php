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
                                        title="Barang Baru">
                                        <i class="fas fa-plus"></i> Barang Baru
                                    </button>
                                </div>
                                <!-- <p class="text-muted mb-4 font-13">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Available all products.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </p> -->

                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="tableBarang" class="table                                 "
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"
                                                role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Harga</th>
                                                        <th>Kategori</th>
                                                        <th>Status</th>
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

                    <div class="col-12 edit-row" style="display: none">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn-back-table btn mb-2 btn-outline-info btn-round">
                                    <i class="typcn typcn-chevron-left"></i>
                                </button>
                                <!-- <form action=""> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img style="max-height:350px;width: auto"
                                            src="{{ asset('assets/admin/images/products/img-7.png') }}" alt=""
                                            class=" mx-auto  d-block gambarEditBarang"
                                            style="max-width: 90%;object-fit: contain;">
                                        <button type="button"
                                            class="btn btn-img btn-secondary waves-effect mt-2 mx-auto d-block"
                                            style="width: 70%;" con="upload">Ubah
                                            Gambar</button>
                                        <input type="file" class="inpt-img-upload" id="imgBarangEdit"
                                            style="visibility: hidden; position: absolute;">
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="row row-edit-barang">
                                            <div class="col-12">
                                                <h4>Barang</h4>
                                            </div>
                                            <div class="col-12">
                                                <label>Nama Barang</label>
                                                <input class="form-control" type="text" id="namaBarang_edit"
                                                    name="nama">
                                            </div>
                                            <div class="col-8 mt-3">
                                                <label>Harga Sewa</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" id="harga_edit" name="harga_edit"
                                                        class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">/hari</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3">
                                                <label>Kategori Barang</label>
                                                <select name="kategori_edit" id="kategori_edit" required
                                                    class="form-control">
                                                    @foreach ($kategori as $k)
                                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3">
                                                <label>Status Barang</label>
                                                <select name="edit_status" id="status_edit" required class="form-control">
                                                    <option value="tersedia">Tersedia</option>
                                                    <option value="tidak tersedia">Tidak Tersedia</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="mt-3">Keterangan</label>
                                                <textarea class="form-control" id="keterangan_edit" rows="3" name="keterangan_edit"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" idUpdate=""
                                            class="btn btn-lg btn-edit-barang btn-warning waves-effect mt-5 mx-auto d-block w-100">
                                            Update Barang
                                        </button>
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
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
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
        <div class="wraps-loading">
            <div id="loading-circles"></div>
        </div>
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
    <style>
        .wraps-loading {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            display: none;
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
        // init table barang
        var table = $('#tableBarang').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "iDisplayLength": 10,
            'processing': true,
            // 'serverSide': true,
            'ajax': "/barang",
            'columns': [{
                    "data": null,
                    "sortable": false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'harga',
                    name: 'harga'
                },
                {
                    data: 'nama',
                    render: function(data, type, row, meta) {
                        return row.kategori.nama;
                    }
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            columnDefs: [{
                targets: -1,
                render: function(data, type, row, meta) {
                    return `
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
                            <a class="dropdown-item link-edit" data-id="` + row.id + `">Edit</a>
                            <a class="dropdown-item delete-barang" data-id="${row.id}">Hapus</a>
                        </div>
                    </div>
                `;
                }
            }],
            "drawCallback": function(settings) {
                // Mendapatkan waktu sekarang
                var currentTime = new Date();

                $('#tableBarang tbody tr').each(function() {
                    var row = $(this);
                    var status = row.find('td:eq(4)').text();
                    // console.log(row.find('td:eq(6) span').attr('status-badge'));
                    console.log(status);

                    if (status !== 'tersedia') {
                        row.css('background-color', '#ff3636');
                        row.find('td').css('color', '#fff');
                    }
                });

                // Loop melalui setiap baris dalam tabel
            }
        });

        //add item
        $('#submitFormItem').click(function(e) {
            e.preventDefault();
            // var formData = $("#formBarang").serialize();
            var formData = new FormData($("#formBarang")[0]);
            $.ajax({
                url: '/barang-add',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response.message);
                    $('#modalAddBarang').modal('hide');
                    $("#formBarang")[0].reset();
                    $("#formBarang img").attr('src', '');
                    Swal.fire({
                        title: 'Success!',
                        text: 'Barang Ditambahkan!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        table.ajax.reload();
                        // location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        function convertSrcToFile(src, callback) {
            var img = new Image();
            img.onload = function() {
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);
                var dataURL = canvas.toDataURL('image/png');
                var blob = dataURLToBlob(dataURL);
                var file = new File([blob], 'image.png');
                callback(file);
            };
            img.src = src;
        }

        function dataURLToBlob(dataURL) {
            var parts = dataURL.split(';base64,');
            var contentType = parts[0].split(':')[1];
            var byteString = atob(parts[1]);
            var arrayBuffer = new ArrayBuffer(byteString.length);
            var uint8Array = new Uint8Array(arrayBuffer);
            for (var i = 0; i < byteString.length; i++) {
                uint8Array[i] = byteString.charCodeAt(i);
            }
            return new Blob([arrayBuffer], {
                type: contentType
            });
        }

        function fillFileInputValue(src) {
            convertSrcToFile(src, function(file) {
                var fileInput = $(
                    '<input type="file" class="inpt-img-upload" id="imgBarangEdit" name="foto" style="visibility: hidden; position: absolute;">'
                );
                var dataTransfer = new DataTransfer();
                dataTransfer.items.add(file);
                fileInput[0].files = dataTransfer.files;
                $('#imgBarangEdit').replaceWith(fileInput);
            });
        }

        //Open Edit
        $('#tableBarang').on('click', '.link-edit', function() {
            var id = $(this).data('id');
            $.ajax({
                url: 'barang/' + id,
                type: "GET",
                success: function(data) {
                    $('.gambarEditBarang').attr('src', 'storage/' + data.foto);
                    var src = $('.gambarEditBarang').attr('src');
                    // Panggil fungsi untuk mengisi nilai input file
                    fillFileInputValue(src);
                    $('#namaBarang_edit').val(data.nama);
                    $('#harga_edit').val(data.harga);
                    $('#kategori_edit option[value="' + data.kategori.id + '"]').attr('selected',
                        'selected').siblings().removeAttr('selected');
                    $('#status_edit option[value="' + data.status + '"]').attr('selected', 'selected')
                        .siblings().removeAttr('selected');
                    $('#keterangan_edit').val(data.keterangan);
                    $('.btn-edit-barang').attr('idUpdate', data.id);
                    // $('#jumlahEditBarang').text(data.jumlah);
                    // $('#statusEditBarang').text(data.status);
                    $('.table-row').hide();
                    $('.edit-row').show();
                    $('.page-title').text('Detail & Edit Barang');
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });

        });

        // update barang
        $('.btn-edit-barang').click(function() {
            $('.wraps-loading').css('display', 'flex');
            console.log($('#imgBarangEdit').val());

            var barangId = $(this).attr('idUpdate');
            var kategoriId = $('#kategori_edit').val();
            var nama = $('#namaBarang_edit').val();
            var harga = $('#harga_edit').val();
            var status = $('#status_edit').val();
            var keterangan = $('#keterangan_edit').val();

            // Membuat objek FormData untuk mengirim data gambar
            var formData = new FormData();
            formData.append('kategori_id', kategoriId);
            formData.append('nama', nama);
            formData.append('harga', harga);
            formData.append('status', status);
            formData.append('keterangan', keterangan);
            formData.append('foto', $('#imgBarangEdit')[0].files[0]);

            // Mengirim permintaan Ajax untuk mengupdate data barang
            $.ajax({
                url: "/barang/" + barangId,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('.wraps-loading').css('display', 'none');
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Data Barang diupdate!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        console.log(response);
                        $('.table-row').show();
                        $('.edit-row').hide();
                        $('#tableBarang').DataTable().ajax.reload();
                    });
                },
                error: function(xhr, status, error) {
                    $('.wraps-loading').css('display', 'none');
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: xhr.responseText,
                    })
                    // Menampilkan pesan error atau melakukan aksi lainnya jika terjadi kesalahan saat mengupdate barang
                    console.log(xhr.responseText);
                }
            });
        });

        // hapus barang
        // $('#tableBarang').on('click', '.delete-barang', function(e) {
        //     e.preventDefault();
        //     var itemId = $(this).data('id');
        //     if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
        //         $.ajax({
        //             url: '/barang_delete/' + itemId,
        //             type: 'DELETE',
        //             data: {
        //                 _token: $('meta[name="csrf-token"]').attr('content')
        //             },
        //             success: function(response) {
        //                 console.log(response.message);
        //                 table.ajax.reload();
        //             },
        //             error: function(xhr, status, error) {
        //                 console.log(xhr.responseText);
        //             }
        //         });
        //     }
        // });

        $('#tableBarang').on('click', '.delete-barang', function(e) {
            e.preventDefault();
            var barangId = $(this).data('id');
            var newStatus = "Tidak Tampil";

            // Membuat objek data yang berisi ID barang dan status baru
            var data = {
                id: barangId,
                status: newStatus
            };

            Swal.fire({
                title: 'Confirmation!',
                text: 'Are you sure you want to delete this item?',
                icon: 'warning',
                confirmButtonText: 'OK'
            }).then(function() {
                $.ajax({
                    url: '/update-status-barang',
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        console.log(response.message);
                        // Refresh atau perbarui tampilan tabel barang setelah berhasil mengupdate
                        Swal.fire({
                            title: 'Success!',
                            text: 'Item has ben deleted!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(function() {
                            table.ajax.reload();
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
