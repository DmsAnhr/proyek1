$(document).ready(function () {
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
});
