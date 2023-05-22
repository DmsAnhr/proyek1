$(function () {

    //modify buttons style
    $.fn.editableform.buttons =
        '<button type="submit" class="btn btn-success editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button>' +
        '<button type="button" class="btn btn-danger editable-cancel btn-sm waves-effect waves-light"><i class="mdi mdi-close"></i></button>';

    //inline
    $('#inline-name, #inline-price, #inline-keterangan, #inline-stock, #inline-ready, #inline-rent').editable({
        type: 'text',
        pk: 1,
        name: 'username',
        title: 'Enter username',
        mode: 'inline',
        inputclass: 'form-control-sm'
    });

    $('#inline-firstname').editable({
        validate: function (value) {
            if ($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline',
        inputclass: 'form-control-sm'
    });


    $('#inline-kategori').editable({
        prepend: "not selected",
        mode: 'inline',
        inputclass: 'form-control-sm',
        source: [
            { value: 1, text: 'Male' },
            { value: 2, text: 'Female' }
        ],
        display: function (value, sourceData) {
            var colors = '#303e67',
                elem = $.grep(sourceData, function (o) {
                    return o.value == value;
                });

            if (elem.length) {
                $(this).text(elem[0].text).css("color", colors[value]);
            } else {
                $(this).empty();
            }
        }
    });

});





$(document).ready(function () {

    // $('#tableBarang').DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "iDisplayLength": 10,
    //     'processing': true,
    //     'serverSide': true,
    //     'ajax': "{{ route('barang.index') }}",
    //     'columns': [
    //         { "data": null,"sortable": false, 
    //           render: function (data, type, row, meta) {
    //                     return meta.row + meta.settings._iDisplayStart + 1;
    //                     }  
    //         },
    //         {data: 'nama', name: 'nama'},
    //         {data: 'harga', name: 'harga'},
    //         {data: 'jumlah', name: 'jumlah'},
    //         {data: 'status', name: 'status'},
    //         {data: 'action', name: 'action', orderable: false, searchable: false},
    //     ],
    //     columnDefs: [{
    //         targets: -1,
    //         render: function(data, type, row, meta) {
    //             return `
    //                 <div class="dropdown-menu dropdown-menu-right"
    //                     aria-labelledby="dLabel8" x-placement="bottom-end"
    //                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-120px, 39px, 0px);">
    //                     <a class="dropdown-item link-edit>Edit</a>
    //                     <a class="dropdown-item delete-barang" href="#" data-id="${row.id}>Hapus</a>
    //                 </div>
    //             `;
    //         }
    //     }]
    // });
    $('.edit-row').hide();
    $(".select-kategori").select2();



    $('#inline-name, #inline-price, #inline-keterangan, #inline-stock, #inline-ready, #inline-rent').click(function () {
        $(this).next().find(".editable-input input").attr("name", $(this).attr('name'))
        $(this).next().find("form").attr({
            "action": "",
            "class": "global-form"
        })
    })

    $('#inline-keterangan').click(function () {
        $(this).next().find(".editable-input textarea").attr("name", $(this).attr('name'))
        $(this).next().find("form").attr({
            "action": "",
            "class": "global-form"
        })
    })

    $('#inline-kategori').click(function () {
        $(this).next().find(".editable-input select").attr("name", $(this).attr('name'))
        $(this).next().find("form").attr({
            "action": "",
            "class": "global-form"
        })
    })




    $('#tableBarang').on('click', '.link-edit',function () {
        var rowData = table.row(this).data();

        // $(".gambarEdit").html(`${rowData.id}`);
        // $('.namaEditBarang').html(`${rowData.nama}`);
        // $('.hargaEditBarang').html(`${rowData.harga}`);
        // $('.keteranganEditBarang').html(`${rowData.keteragan}`);
        // $('.kategoriEditBarang').html(`${rowData.nama_kategori}`);
        // $('.jumlahEditBarang').html(`${rowData.jumlah}`);
        // $('.statusEditBarang').html(`${rowData.status}`);
        $.ajax({
            url: `/kategori/${rowData.kategori_id}`,
            type: 'GET',
            success: function(response) {
                $('.gambarEdit').attr('src', `${rowData.id}`);
                $('.namaEditBarang').html(`${rowData.nama}`);
                $('.hargaEditBarang').html(`${rowData.harga}`);
                $('.keteranganEditBarang').html(`${rowData.keteragan}`);
                $('.kategoriEditBarang').html(`${response.nama}`);
                $('.jumlahEditBarang').html(`${rowData.jumlah}`);
                $('.statusEditBarang').html(`${rowData.status}`);
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                // Tambahkan logika lainnya (misalnya menampilkan notifikasi error)
            }
        });

        $('.table-row').hide();
        $('.edit-row').show();
        $('.page-title').text('Detail Barang');
    })

    $('.btn-back-table').click(function () {
        $('.table-row').show();
        $('.edit-row').hide();
        $('.page-title').text('Data Barang');
    })
});

