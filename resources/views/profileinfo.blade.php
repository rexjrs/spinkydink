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
            <input type="text" name="" value="76/119 Condo Grene Suthisan">
            <br>
            <label>Line Two</label><br>
            <input type="text" name="" value="Sutthisan Winitchai Road, Huay Kwang">
            <br>
            <label>Zip Code</label><br>
            <input type="text" name="" value="10310">
            <br>
            <label>City</label><br>
            <input type="text" name="" value="Bangkok">
            <br>
            <label>Country</label><br>
            <input type="text" name="" value="Thailand">
            <br>
            <label>Phone</label><br>
            <input type="number" name="" value="0946481922">
            <br>
            <label>E-Mail</label><br>
            <input type="text" name="" value="thomas.charlesworths@gmail.com">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 address-section">
            <hr>
            <h4>Receiving Payments</h4>
            <center><h4><span class="label label-warning">NOTE: This information is public and can be seen by users who win your auctions</span></h4></center>
            <label>Bank Name</label><br>
            <input type="text" name="" value="76/119 Condo Grene Suthisan">
            <br>
            <label>Bank Account Holder</label><br>
            <input type="text" name="" value="Sutthisan Winitchai Road, Huay Kwang">
            <br>
            <label>Bank Account Number</label><br>
            <input type="text" name="" value="10310">
            <br>
            <label>Phone</label><br>
            <input type="number" name="" value="0946481922">
        </div>
    </div>
    <br>
</div>
@endsection
