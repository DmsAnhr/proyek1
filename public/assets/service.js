$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Login
    $("#loginForm").on("submit", function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: "/login",
            type: "POST",
            data: formData,
            success: function (response) {
                // Login berhasil
                if (response.success) {
                    window.location.href = "/"; // Ganti dengan URL tujuan setelah login berhasil
                } else {
                    // Login gagal
                    if (response.errors) {
                        // Menampilkan pesan kesalahan validasi
                        $.each(response.errors, function (key, value) {
                            $("#login-error").append("<p>" + value + "</p>");
                        });
                    } else {
                        $("#login-error").text(response.message);
                    }
                }
            },
        });
    });

    // Register
    $("#registerForm").on("submit", function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: "/register",
            type: "POST",
            data: formData,
            success: function (response) {
                // Registrasi berhasil
                if (response.success) {
                    window.location.href = "/login"; // Ganti dengan URL tujuan setelah registrasi berhasil
                } else {
                    // Registrasi gagal
                    if (response.errors) {
                        // Menampilkan pesan kesalahan validasi
                        $.each(response.errors, function (key, value) {
                            $("#register-error").append("<p>" + value + "</p>");
                        });
                    }
                }
            },
        });
    });

    // add category
    $('#submitFormKategori').click(function () {
        var formData = $("#formKategori").serialize();
        var url = $("#formKategori").attr('action');
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            success: function (response) {
                alert(response.message); // Menampilkan pesan sukses
                // Lakukan tindakan lain setelah berhasil menambahkan data
            },
            error: function (xhr) {
                alert("Terjadi kesalahan. Silakan coba lagi."); // Menampilkan pesan kesalahan
            },
        });
    });

    var table = $('#tableBarang').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "iDisplayLength": 10,
        'processing': true,
        'serverSide': true,
        'ajax': "/barang",
        'columns': [{
                "data": null,
                "sortable": false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {data: 'nama', name: 'nama'},
            {data: 'harga', name: 'harga'},
            {data: 'jumlah', name: 'jumlah'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
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
        }]
    });

    //add item
    $('#submitFormItem').click(function () {
        e.preventDefault();
        var formData = $("#formBarang").serialize();
        $.ajax({
            url: '/barang',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response.message);
                $('#modalAddBarang').toggle();
                $("#formBarang")[0].reset();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        }); 
    });


    //Open Edit
    $('#tableBarang').on('click', '.link-edit', function() {
        var id = $(this).data('id'); 
        $.ajax({
            url: 'barang/' + id,
            type: "GET",
            success: function(data) {
                $('.gambarEditBarang').attr('src', 'storage/' + data.foto);
                $('.namaEditBarang').text(data.nama);
                $('.hargaEditBarang').text(data.harga);
                $('.keteranganEditBarang').text(data.keterangan);
                $('.kategoriEditBarang').text(data.kategori.nama);
                $('.jumlahEditBarang').text(data.jumlah);
                $('.statusEditBarang').text(data.status);
                $('.table-row').hide();
                $('.edit-row').show();
                $('.page-title').text('Detail Barang');
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
        
    });

    // edit barang
    // $('#tableBarang').on('click', '.edit-barang', function(e) {
    //     e.preventDefault();
    //     var itemId = $(this).data('id');

    //     // Mengambil data item menggunakan permintaan Ajax
    //     $.ajax({
    //         url: `/items/${itemId}/edit`,
    //         type: 'GET',
    //         success: function(response) {
    //             // Proses data yang diterima
    //             // Tampilkan formulir edit item atau modifikasi tampilan sesuai kebutuhan Anda
    //         },
    //         error: function(xhr, status, error) {
    //             console.log(xhr.responseText);
    //             // Tambahkan logika lainnya (misalnya menampilkan notifikasi error)
    //         }
    //     });
    // });

    // hapus barang
    $('#tableBarang').on('click', '.delete-barang', function(e) {
        e.preventDefault();
        var itemId = $(this).data('id');
        // var url = route('barang.destroy', { barang: barangId });

        // Konfirmasi penghapusan
        if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
            // Menghapus item menggunakan permintaan Ajax
            $.ajax({
                url: '/barang_delete/'+itemId,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Proses respon setelah item dihapus
                    console.log(response.message);
                    // Refresh tabel setelah penghapusan item
                    table.ajax.reload();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    // Tambahkan logika lainnya (misalnya menampilkan notifikasi error)
                }
            });
        }
    });
});
