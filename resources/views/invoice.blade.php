@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12 text-center">
    		<h3 class="">Invoice #{{$invoice['product_id']}}</h3>
    	</div>
    </div>
    <hr>
    <div class="row">
    	<div class="col-md-4">
    		<img src="/uploads/fullsize/{{$invoice['image1']}}" class="img-responsive">
    	</div>
    	<div class="col-md-8 top-pad hidden-xs hidden-sm">
            <div class="col-md-4 no-pad">
                <a href="/uploads/fullsize/{{$invoice['image2']}}" class="fancybox" rel="gallery">
                    <img src="/uploads/fullsize/{{$invoice['image2']}}" class="img-responsive thumbnail" />
                </a>
            </div>
            <div class="col-md-4 no-pad">
                <a href="/uploads/fullsize/{{$invoice['image3']}}" class="fancybox" rel="gallery">
                    <img src="/uploads/fullsize/{{$invoice['image3']}}" class="img-responsive thumbnail" />
                </a>
            </div>
            <div class="col-md-4 no-pad">
                <a href="/uploads/fullsize/{{$invoice['image4']}}" class="fancybox" rel="gallery">
                    <img src="/uploads/fullsize/{{$invoice['image4']}}" class="img-responsive thumbnail" />
                </a>
            </div>
    	</div>
    </div>
    <br>
    <div class="row">
    	<div class="col-md-12">
    		<table class="invoice-table" width="100%">
    			<thead>
    				<tr>
    					<td width="15%">Item</td>
    					<td>Description</td>
    					<td width="15%">Price</td>
    					<td width="15%"></td>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td>{{$invoice['name']}}</td>
    					<td>{{$invoice['description']}}</td>
    					<td>{{$invoice['bid']}}</td>
    					<td></td>
    				</tr>
    				<tr>
    					<td></td>
    					<td></td>
    					<td></td>
    					<td>Total: {{$invoice['bid']}} THB</td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </div>
    <br>
    <div class="row">
    	<div class="col-md-12">
    		<h3>Seller Information</h3>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 seller-info">
            <label>Bank Name</label><br>
            <input type="text" name="" value="{{$bankdetails['bankname']}}">
            <br>
            <label>Account Number</label><br>
            <input type="text" name="" value="{{$bankdetails['banknumber']}}">
            <br>
            <label>Phone Number</label><br>
            <input type="text" name="" value="{{$bankdetails['phone']}}">
            <br>
            <label>E-Mail</label><br>
            <input type="text" name="" value="{{$email}}">
    	</div>
    </div>
    <br>
</div>
@endsection
