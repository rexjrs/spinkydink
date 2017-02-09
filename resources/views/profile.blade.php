@extends('layouts.app')

@section('content')
<div class="container section-all">
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
                        <form id="form-{{$auc['product_id']}}" method="POST" action="{{ url('/archive')}}" style="display: none;" onsubmit="return confirm('You sure you want to archive?')">
                        {{ csrf_field() }}
                            <input type="number" name="listing" value="{{$auc['product_id']}}" hidden="">
                        </form>
                            <button class="btn btn-danger btn-sm btn-margin" type="submit" form="form-{{$auc['product_id']}}">Archive</button>
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
