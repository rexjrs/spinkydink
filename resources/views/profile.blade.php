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
    @foreach ($myauc as $auc)
        <div class="col-md-6 auction-container">
            <div class="auction-wrapper">
                <div class="col-md-6">
                    <img src="/uploads/fullsize/{{$auc['image1']}}" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h4>{{$auc['name']}}</h4>
                    <h5>Bid: {{$auc['bid']}} THB</h5><span class="label @if($ended[$loop->index] == 'ENDED') label-danger @else label-success @endif">{{$ended[$loop->index]}}</span>
                    <h5>Description: {{$auc['description']}}</h5>
                    <center>
                        <a href="{{url('/auctions')}}/{{$auc['product_id']}}">
                            <button class="btn btn-primary btn-sm btn-margin">View Auction</button>
                        </a>
                        @if($ended[$loop->index] == 'LIVE')
                            <button class="btn btn-warning btn-sm btn-margin">Edit Auction</button>
                        @endif
                        @if($ended[$loop->index] == 'ENDED')
                        <form method="POST" action="">
                            <button class="btn btn-danger btn-sm btn-margin">Archive</button>
                        </form>
                        @endif

                    </center>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Auction Wins</h3>
            <hr>
        </div>
    </div>
    <div class="row auction-section">
    @foreach($invoices as $invoice)
        <div class="col-md-6 auction-container">
            <div class="auction-wrapper">
                <div class="col-md-6">
                    <img src="/uploads/fullsize/{{$invoice['image1']}}" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h4>{{$invoice['name']}}</h4>
                    <h5>Winning bid: {{$invoice['bid']}} THB</h5>
                    <h5>Description: {{$invoice['description']}}</h5>
                    <center><a href="{{ url('/invoice')}}/{{$invoice['product_id']}}"><button class="btn btn-primary btn-sm">View Invoice</button></a></center>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
