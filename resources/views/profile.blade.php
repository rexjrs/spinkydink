@extends('layouts.app')

@section('content')
<div class="container section-all">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Welcome back, Thomas Charlesworth</h3>
            <hr>
        </div>
    </div>
    <br>
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
        <div class="col-md-12 text-center">
            <h3>My Auctions</h3>
            <hr>
            <a href="{{url('/newproduct')}}"><button class="btn btn-info btn-md">New Auction</button></a>
        </div>
    </div>
    <div class="row auction-section">
    @for ($i = 0; $i < 3; $i++)
        <div class="col-md-6 auction-container">
            <div class="auction-wrapper">
                <div class="col-md-6">
                    <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h4>Macbook Pro 15" - Touch Bar</h4>
                    <h5>Winning bid: 2150 THB</h5>
                    <h5>Description: Latest Macbook Pro 15" 2016. It is stunning and cutting edge. An Ultimate work horse to get your work done.</h5>
                    <center><button class="btn btn-primary btn-sm">View Auction</button> <button class="btn btn-danger btn-sm">Delete Auction</button></center>
                </div>
            </div>
        </div>
    @endfor
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Auction Wins</h3>
            <hr>
        </div>
    </div>
    <div class="row auction-section">
    @for ($i = 0; $i < 3; $i++)
        <div class="col-md-6 auction-container">
            <div class="auction-wrapper">
                <div class="col-md-6">
                    <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h4>Macbook Pro 15" - Touch Bar</h4>
                    <h5>Winning bid: 2150 THB</h5>
                    <h5>Description: Latest Macbook Pro 15" 2016. It is stunning and cutting edge. An Ultimate work horse to get your work done.</h5>
                    <center><button class="btn btn-primary btn-sm">View Invoice</button></center>
                </div>
            </div>
        </div>
    @endfor
    </div>
</div>
@endsection
