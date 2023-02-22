@extends('layouts.app')
@section('title', '|Products List Page')

@section('description', 'Sir-erics- The list of the products onsale on our site')

@section('content')
<!-- Portfolio Projects -->
<div class="container marginbot50">
	<div class="row">
		<div class="col-lg-12">
			<p class="h3">Product Details</p>

			<table class="table table-striped table-inverse table-responsive">
				<thead class="thead-inverse">
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@if (count($cart_content)>0)
					@foreach ($cart_content as $item)
					<tr>
						<td scope="row">{{$item->name}}</td>

						<td>{{$item->price}}</td>
						<td>{{$item->qty}}</td>
						<td><a href="/item/remove/{{$item->rowId}}"><i class="fa fa-trash"></i></a></td>
					</tr>
					<tr>
						@endforeach
						@endif

				</tbody>
			</table>
			<div class="d-flex">
				<h2>Cart Total: {{$total}}</h2>
				@if (count($cart_content)>0)
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
					Checkout
				</button>
				<!-- <a href="/checkout" class="btn btn-primary ml-auto">Checkout</a> -->
				@endif

				<a href="/admin/product/index" class="btn btn-primary ml-auto">Continue Shopping</a>
			</div>





		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">M-PESA Checkout</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<label for="phone">Enter your phone number:</label>
					<input type="text" name="phone" id="phone" class="form-control" placeholder="e.g 0726582228">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="checkout">Checkout</button>
			</div>
			</form>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script>
	let submitButton = $('#checkout');
	let phone = $('#phone');
	submitButton.on('click', function(e) {
		e.preventDefault();
		let token = $('meta[name="csrf-token"]').attr('content');
		$data = {
			phone: phone.val(),
			_token: token
		}
		console.log($data);
		$.ajax({
			url: '/checkout',
			type: 'POST',
			data: $data,
			success: function(data) {
				console.log("Data from mpesacontroller: ", data);
				if (data.status == 'success') {
					let MerchantRequestId = data.data.MerchantRequestID;
					let CheckoutRequestID = data.data.CheckoutRequestID;
					let localMerchantRequestId = localStorage.getItem('MerchantRequestID');
					let localCheckoutRequestID = localStorage.getItem('CheckoutRequestID');
					if (localMerchantRequestId) {
						localStorage.removeItem('MerchantRequestID');
						localStorage.setItem('MerchantRequestID', MerchantRequestId);

					} else {
						localStorage.setItem('MerchantRequestID', MerchantRequestId);
					}
					if (localCheckoutRequestID) {
						localStorage.removeItem('CheckoutRequestID');
						localStorage.setItem('CheckoutRequestID', CheckoutRequestID);
					} else {
						localStorage.setItem('CheckoutRequestID', CheckoutRequestID);
					}
					alert('Success! Check your phone for the mpesa prompt');
				} else {
					alert(data.message);
				}
			},
			error: function(err) {
				console.log(err);
			}
		})
	})
</script>
@endsection