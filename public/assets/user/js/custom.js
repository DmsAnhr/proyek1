function deleteItem(element) {
    $(element).parents('.item-box').remove();
}


$(document).ready(function () {

    $('.btn-list').click(function () {
        var type = $(this).attr('data-atr');
        if (type == "list") {
            $('.product-item .btn').css('width', 'fit-content');
        }
        else {
            $('.product-item .btn').css('width', '100%');
        }
    })

    $('.btn-add-to-cart').click(function () {
        $('.isi-cart ul').append('<li class="item-box"style="display: flex;align-items: center;justify-content: space-between;"><p>- Tenda 5x5</p><div><input type="number" min="1" max="" value="1" style="width: 40px;border: none;background-color: #fafafa;font-size: 19px;"><i class="fa fa-trash delete-item" onclick="deleteItem(this)" aria-hidden="true" style="cursor: pointer;"></i></div></li>')
    })

    // $('.item-box').on('click', '.delete-item', function () {
    //     // console.log(this);
    //     $(this).parents('.item-box').remove();
    // })

});