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

    $('.edit-row').hide();
    $('#table-items').DataTable({});
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




    $('.link-edit').click(function () {
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

