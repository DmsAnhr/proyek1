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

        // Konfirmasi penghapusan
        if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
            // Menghapus item menggunakan permintaan Ajax
            $.ajax({
                url: `/items/${itemId}`,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
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
