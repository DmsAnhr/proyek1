@extends('rental')

@section('content')
<main class="bg_gray">
    <div class="container margin_30">
    <div class="page_header">
        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li>Cart</li>
            </ul>
        </div>
        <h1>Cart page</h1>
    </div>
    <!-- /page_header -->
    <table class="table table-striped cart-list">
                        <thead>
                            <tr>
                                <th>
                                    Product
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Quantity
                                </th>
                                <th>
                                    Subtotal
                                </th>
                                <th>
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>

                    {{-- <div class="row add_top_30 flex-sm-row-reverse cart_actions">
                        <div class="col-sm-4 text-end">
                            <button type="button" class="btn_1 gray">Update Cart</button>
                        </div>
                            <div class="col-sm-8">
                            <div class="apply-coupon">
                                <div class="form-group">
                                    <div class="row g-2">
                                        <div class="col-md-6"><input type="text" name="coupon-code" value="" placeholder="Promo code" class="form-control"></div>
                                        <div class="col-md-4"><button type="button" class="btn_1 outline">Apply Coupon</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                <!-- /cart_actions -->

    </div>
    <!-- /container -->
    
    <div class="box_cart">
        <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-4 col-lg-4 col-md-6">
        
        <div class="checkout-detail">
            <div class="d-flex justify-content-between align-items-center">
                <h6>Hari</h6>
                <div class="hari-row">
                    <input type="number" value="1" id="input-hari" class="input-hari" name="hari" min="1" style="width: 50px">
                    <div class="btn-inc-hari" style="right: 0;top: 0;">+</div>
                    <div class="btn-dec-hari" style="left: 0;top: 0;">-</div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
                <h6>Subtotal</h6>
                <h6 class="all-subtotal" data-harga="0">Rp.0  x 1 hari</h6>
            </div>
            <hr style="height: 3px;margin: 20px 0">
            <div class="d-flex justify-content-between align-items-center mt-2">
                <h4 style="color: red;font-weight: bold;">TOTAL</h4>
                <h4 style="color: red;font-weight: bold;" class="all-total" data-harga="0">Rp.0</h4>
            </div>
        </div>
        <button type="button" class="btn_1 full-width cart btn-ckeckout">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->
    
</main>
@endsection

@push('css')
    <link href="{{asset ('assets/userNew/css/cart.css')}}" rel="stylesheet">
    <style>
        .btn-inc, .btn-dec, .btn-inc-hari, .btn-dec-hari{
            cursor: pointer;
            position: absolute;
            width: 33px;
            height: 40px;
            line-height: 38px;
            text-align: center;
            z-index: 2;
            font-size: 26px;
            font-size: 1.625rem;
            font-weight: 300 !important;
            color: #999;
        }

        .hari-row{
            position: relative;
            width: 30%;
            height: 40px;
            overflow: visible;
            border: 1px solid #dddddd;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            background-color: #fff;
            text-align: left !important;
        }

        .input-jumlah, .input-hari{
            position: relative;
            width: 40px;
            height: 40px;
            text-align: center;
            left: 50%;
            background: none;
            padding: 5px;
            border: none;
            margin-left: -20px;
        }
    </style>
@endpush

@push('js')
<script>
    var userId;
    $.ajax({
        url: '/get-user-id',
        method: 'GET',
        success: function(response) {
            userId = response.user_id;
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
                
    $.ajax({
        url: '/cartData',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            var totalHarga = 0;
            var totalBarang = 0;
            $.each(response, function(index, item) {

                var subTotal = (parseInt(item.barang.harga)*parseInt(item.jumlah));
                var html = '<tr>';
                    html += '<td>';
                        html += '<div class="thumb_cart">';
                            html += '<img src="storage/' + item.barang.foto + '" data-src="storage/' + item.barang.foto + '" class="lazy" alt="' + item.barang.nama + '">';
                        html += '</div>';
                        html += '<span class="item_cart">' + item.barang.nama + '</span>';
                    html += '</td>';
                    html += '<td>';
                        html += '<strong class="harga-barang" data-harga="'+ item.barang.harga +'">' + formatRupiah(item.barang.harga, 'Rp. ') + '</strong>';
                    html += '</td>';
                    html += '<td>';
                        html += '<div class="numbers-row">';
                            html += '<input type="text" value="' + item.jumlah + '" class="input-jumlah" name="">';
                            html += '<div class="btn-inc" style="right: 0;top: 0;" barang-id="'+item.barang.id+'">+</div>';
                            html += '<div class="btn-dec" style="left: 0;top: 0;" barang-id="'+item.barang.id+'">-</div>';
                        html += '</div>';
                    html += '</td>';
                    html += '<td>';
                        html += '<strong class="barangSubTotal" subTotal="'+ subTotal +'">' + formatRupiah(subTotal, 'Rp. ') + '</strong>';
                    html += '</td>';
                    html += '<td class="options">';
                        html += '<a href="#"><i class="ti-trash"></i></a>';
                    html += '</td>';
                html += '</tr>';
                $(".cart-list tbody").append(html);

            });
            changeTotal();
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });

    function changeTotal() {
        var total = 0;
        var hari = $('.input-hari').val();
        $('.input-jumlah').each(function() {
            var jumlah = parseInt($(this).val());
            var harga = parseInt($(this).parents('tr').find('.harga-barang').attr('data-harga'));
            var subtotal = jumlah * harga;
            total = total+subtotal;
            console.log(total);
            $(this).parents('tr').find('.barangSubTotal').attr('subTotal', subtotal).text(formatRupiah(subtotal, 'Rp. '));
        });
        $('.all-subtotal').data('harga', total).text(formatRupiah(total, 'Rp. ')+' x '+hari+'hari');
        total = parseInt(total) * parseInt(hari);
        $('.all-total').data('total', total).text(formatRupiah(total, 'Rp. '));
    };

    $('.cart-list').on('click','.btn-inc:not(.ignore)', function() {
        var btn = $(this);
        btn.addClass('ignore');
        var barangId = btn.attr('barang-id');
        var jumlah = parseInt(btn.siblings('input').val());
        btn.siblings('input').val(jumlah + 1);
        $.ajax({
            url: "/add-to-cart",
            type: "POST",
            dataType: "json",
            data: { barang_id: barangId },
            success: function(response) {
                changeTotal();
                btn.removeClass('ignore');
                $('.alert-success').removeClass('d-none').addClass('d-flex');
                setTimeout(() => {
                    $('.alert-success').removeClass('d-flex').addClass('d-none');
                }, 2000);
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
    
    $('.cart-list').on('click','.btn-dec:not(.ignore)', function() {
        var btn = $(this);
        btn.addClass('ignore');
        var barangId = btn.attr('barang-id');
        var jumlah = parseInt(btn.siblings('input').val());
        if (jumlah != 1) {
            btn.siblings('input').val(jumlah - 1);
            $.ajax({
                url: "/dec-item-cart",
                type: "POST",
                dataType: "json",
                data: { barang_id: barangId },
                success: function(response) {
                    changeTotal();
                    btn.removeClass('ignore');
                    $('.alert-success').removeClass('d-none').addClass('d-flex');
                    setTimeout(() => {
                        $('.alert-success').removeClass('d-flex').addClass('d-none');
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    });

    $('.btn-inc-hari').click(function() {
        var hari = parseInt($(this).siblings('input').val());
        $(this).siblings('input').val(hari + 1);
        changeTotal();
    });

    $('.btn-dec-hari').click(function() {
        var hari = parseInt($(this).siblings('input').val());
        if (hari != 1) {
            $(this).siblings('input').val(hari - 1);
            changeTotal();
        }
    });

    $('.btn-ckeckout').click(function() {
        var hari = $('#input-hari').val();
        window.location.href = '/checkout?id_hari=' + hari;
    });
</script>
@endpush