@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Welcome back, Thomas Charlesworth</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 address-section">
            <h4>Address</h4>
            <label>Line One</label><br>
            <input type="text" name="" value="{{$profile['address1']}}" readonly="">
            <br>
            <label>Line Two</label><br>
            <input type="text" name="" value="{{$profile['address2']}}" readonly="">
            <br>
            <label>Zip Code</label><br>
            <input type="text" name="" value="{{$profile['zipcode']}}" readonly="">
            <br>
            <label>City</label><br>
            <input type="text" name="" value="{{$profile['city']}}" readonly="">
            <br>
            <label>Country</label><br>
            <input type="text" name="" value="{{$profile['country']}}" readonly="">
            <br>
            <label>Phone</label><br>
            <input type="number" name="" value="{{$profile['phone']}}" readonly="">
            <br>
            <label>E-Mail</label><br>
            <input type="text" name="" value="{{$email}}" readonly="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 address-section">
            <hr>
            <h4>Receiving Payments</h4>
            <center><h4><span class="label label-warning">NOTE: This information is public and can be seen by users who win your auctions</span></h4></center>
            <label>Bank Name</label><br>
            <input type="text" name="" value="{{$profile['bankname']}}" readonly="">
            <br>
            <label>Bank Account Holder</label><br>
            <input type="text" name="" value="{{$profile['bankholder']}}" readonly="">
            <br>
            <label>Bank Account Number</label><br>
            <input type="text" name="" value="{{$profile['banknumber']}}" readonly="">
            <br>
            <label>Phone</label><br>
            <input type="number" name="" value="{{$profile['phone']}}" readonly="">
        </div>
    </div>
    <br>
</div>
@endsection
