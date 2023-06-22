$(document).ready(function () {

    $('.detail-invoice').hide();
    $('#table-items').DataTable({});

    $('.link-edit').click(function () {
        $('.table-row').hide();
        $('.detail-invoice').show();
        $('.page-title').text('Detail Pesanan');
    })

    $('.btn-back-table').click(function () {
        $('.table-row').show();
        $('.detail-invoice').hide();
        $('.page-title').text('Pesanan Masuk');
    })
});

