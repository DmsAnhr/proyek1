@extends('rental')

@section('content')
<main class="bg_gray">
	
		
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li>Checkout</li>
				</ul>
		</div>
		<h1>Process your checkout</h1>
			
	</div>
	<!-- /page_header -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="step first">
						<h3>1. User Info and Billing address</h3>
					<ul class="nav nav-tabs" id="tab_checkout" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">Address</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false">Other</a>
					  </li>
					</ul>
					<div class="tab-content checkout">
						<div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
							
							{{-- <div class="row no-gutters">
								<div class="col-6 form-group pr-1">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="col-6 form-group pl-1">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div> --}}
							<h6><b class="nama">NAMA</b></h6>
							<h6 style="font-size: 13px;letter-spacing: 1px" class="notelp">08xx xxxx xxx</h6>
							<h6 style="font-size: 13px;letter-spacing: 1px" class="alamat">JL.</h6>
							<h6 style="font-size: 13px;letter-spacing: 1px" class="kecamatan">Kecamatan, kodepos</h6>
							{{-- <h6 style="font-size: 13px;letter-spacing: 1px">65124</h6> --}}
						</div>
						<!-- /tab_1 -->
					  	<div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2" style="position: relative;">
							{{-- <div id="other_addr_c" class="pt-2"> --}}
								<div class="row no-gutters">
									<div class="col-12 form-group pr-1">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<!-- /row -->
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Full Address">
								</div>
								<div class="row no-gutters">
									{{-- <div class="col-6 form-group pr-1">
										<input type="text" class="form-control" placeholder="City">
									</div> --}}
									<div class="col-6 form-group pl-1">
										<input type="text" class="form-control" placeholder="Postal code">
									</div>
									<div class="col-6 form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_15" name="kecamatan" id="country_2">
												<option value="" selected>Kecamatan</option>
												<option value="Blimbing">Blimbing</option>
												<option value="Kedungkandang">Kedungkandang</option>
												<option value="Klojen">Klojen</option>
												<option value="Lowokwaru">Lowokwaru</option>
												<option value="Sukun">Sukun</option>
											</select>
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Telephone">
								</div>
							{{-- </div> --}}
						</div>
						<!-- /tab_2 -->
					</div>
					</div>
					<!-- /step -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="step middle payments">
						<h3>2. Payment and Shipping</h3>
						<h6 class="pb-2">Payment Method</h6>

						<div class="payment_info d-none d-sm-block">
							<figure><img src="{{asset ('assets/userNew/img/cards_all.svg')}}" alt=""></figure>	
							{{-- <p>Sensibus reformidans interpretaris sit ne, nec errem nostrum et, te nec meliore philosophia. At vix quidam periculis. Solet tritani ad pri, no iisque definitiones sea.</p> --}}
						</div>
							<ul>
								<li>
									<label class="container_radio">Credit Card<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" value="Credit Card" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">E-Wallet<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" value="E-Wallet">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Bank Transfer<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" value="Bank Transfer">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Cash on delivery (COD)<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" value="COD">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
							
							<h6 class="pb-2">Shipping Method</h6>
							
						
						<ul>
								<li>
									<label class="container_radio">Self Pickup<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping" value="Pickup" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Express Shipping<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping" value="Delivery">
										<span class="checkmark"></span>
									</label>
								</li>
								
							</ul>
						
					</div>
					<!-- /step -->
					
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="step last">
						<h3>3. Order Summary</h3>
					<div class="box_general summary">
						<ul class="ul-sumary">
							{{-- <li class="clearfix"><em>1x Tenda The North Face </em>  <span>Rp. 55.000</span></li>
							<li class="clearfix"><em>1x Matras</em> <span>Rp. 20.000</span></li> --}}
						</ul>
						<ul>
							<li class="clearfix subtotal" subtotal=""><em><strong>Subtotal</strong></em>  <span>Rp. 0</span></li>
							<li class="clearfix hari" hari=""><em><strong>Lama</strong></em> <span>1 Hari</span></li>
							<li class="clearfix shipping" shipping="0"><em><strong>Shipping</strong></em> <span>Rp. 0</span></li>
							
						</ul>
						<div class="total clearfix" allTotal="">TOTAL <span>Rp. 0</span></div>
						<div class="form-group">
								<label class="container_check">Register to the Newsletter.
								  <input type="checkbox" checked>
								  <span class="checkmark"></span>
								</label>
							</div>
						
						<button type="button" class="btn_1 btn-pay full-width">Confirm and Pay</button>
					</div>
					<!-- /box_general -->
					</div>
					<!-- /step -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
@endsection

@push('css')
    <link href="{{asset ('assets/userNew/css/checkout.css')}}" rel="stylesheet">
@endpush

@push('js')
<script>
    // Other address Panel
    $('#other_addr input').on("change", function (){
        if(this.checked)
            $('#other_addr_c').fadeIn('fast');
        else
            $('#other_addr_c').fadeOut('fast');
    });
</script>
<script>
	var idUser;
	var url = window.location.href;
	var regex = /[?&]id_hari(=([^&#]*)|&|#|$)/;
	var results = regex.exec(url);
	var lamaHari = results ? decodeURIComponent(results[2].replace(/\+/g, ' ')) : null;
	$('.hari').attr('hari', lamaHari).html('<em><strong>Lama</strong></em> <span>x'+lamaHari+' Hari</span>');
	

	function addZeroPrefix(number) {
        return number < 10 ? '0' + number : number;
    }

	function getCurrentTimestamp() {
        var now = new Date();
        var timestamp = now.getFullYear() + '-' + addZeroPrefix(now.getMonth() + 1) + '-' + addZeroPrefix(now.getDate()) + ' ' + addZeroPrefix(now.getHours()) + ':' + addZeroPrefix(now.getMinutes()) + ':' + addZeroPrefix(now.getSeconds());
        return timestamp;
    }

	function generateId(length) {
        let result = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        const charactersLength = characters.length;
        let counter = 0;
        while (counter < length) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
        counter += 1;
        }
        return result;
    };

    function changeTotal() {
        var total = 0;
        var hari = parseInt(lamaHari);
        var shipping = $('.shipping').attr('shipping');
        $('.item-co').each(function() {
            var harga = parseInt($(this).find('.subtotal-barang').attr('data-subtotal'));
			total = total + harga;
        });
        $('.subtotal').attr('subtotal', total).html('<em><strong>Subtotal</strong></em>  <span>'+ formatRupiah(total, 'Rp. ') +'</span>');
        total = parseInt(total) * parseInt(hari) + parseInt(shipping);
        $('.total').attr('allTotal', total).html('TOTAL <span>'+ formatRupiah(total, 'Rp. ') +'</span>');
    };

    $.ajax({
        url: '/checkoutData',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
			var user = response.user;
        	var cartItems = response.cartItems;

			idUser = user.id;
			$('.nama').text(user.name);
			$('.notelp').text(user.noTelp);
			$('.alamat').text(user.alamat);
			$('.kecamatan').text(user.kecamatan+', '+user.kodepos);

            $.each(cartItems, function(index, item) {

                var subTotal = (parseInt(item.barang.harga)*parseInt(item.jumlah));
				var html = '<li class="clearfix item-co"  barang-id="'+item.barang.id+'" barang-jumlah="'+ item.jumlah +'"><em>'+ item.jumlah +'x ' + item.barang.nama + '</em>  <span class="subtotal-barang" data-subtotal="'+ subTotal +'">'+ formatRupiah(subTotal, 'Rp. ') +'</span></li>';
                $(".ul-sumary").append(html);

            });
            changeTotal();
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });

	$('.btn-pay').click(function() {
		var idUserShop = idUser;
		var idShop = generateId(10);
        var namaShop = $('.nama').text();
        var alamatShop = $('.alamat').text() + ', ' + $('.kecamatan').text();
        var hargaShop = $('.total').attr('allTotal');
        var lamaShop = $('.hari').attr('hari');
		var paymentShop = $("input[name='payment']:checked").val();
		var shippingShop = $("input[name='shipping']:checked").val();
        var tanggalShop = getCurrentTimestamp();
        var statusShop = 'Proses';
        var barangShop = [];


        $('.item-co').each(function() {
            var barangId = $(this).attr('barang-id');
            var barangJumlah = parseInt($(this).attr('barang-jumlah'));
            barangShop.push({
                id: barangId,
                jumlah: barangJumlah
            });
        });    
        
        var dataShop = {
            id_user : idUserShop,
            kode_transaksi : idShop,
            namaPeminjam : namaShop,
            alamat : alamatShop,
            totalHarga: hargaShop,
            lama_sewa: lamaShop,
            payment: paymentShop,
            shipping: shippingShop,
            tanggalStart: tanggalShop,
            status: statusShop,
            barangs : barangShop,
        }

        $.ajax({
            url: "/checkout-pay",
            type: "POST",
            data: JSON.stringify(dataShop),
            contentType: 'application/json',
            success: function(response) {
                console.log(response.message);
                // Lakukan aksi tambahan setelah berhasil menyimpan transaksi 
				window.location.href = '/paymentSuccess';
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
	});
</script>
@endpush