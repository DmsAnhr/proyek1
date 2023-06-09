$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
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
                    // Periksa peran pengguna
                    if (response.role === "admin") {
                        window.location.href = "/admin"; // Ganti dengan URL tujuan admin setelah login berhasil
                    } else {
                        window.location.href = "/"; // Ganti dengan URL tujuan user setelah login berhasil
                    }
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
    $("#submitFormKategori").click(function () {
        var formData = $("#formKategori").serialize();
        var url = $("#formKategori").attr("action");
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            success: function (response) {
                $(".modal").hide();
                // Lakukan tindakan lain setelah berhasil menambahkan data
                Swal.fire({
                    title: "Success!",
                    text: "Profile data is update!",
                    icon: "success",
                    confirmButtonText: "OK",
                }).then(function () {
                    location.reload();
                });
            },
            error: function (xhr) {
                alert("Terjadi kesalahan. Silakan coba lagi."); // Menampilkan pesan kesalahan
            },
        });
    });
});
