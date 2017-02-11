@extends('layouts.app')

@section('content')
<div class="container">
    <input type="text" name="" hidden="" value="{{$aucdates}}" id="time-server">
    <div class="row section-youtube">
        <div class="col-md-10 col-md-offset-1">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5kg3384bebg"></iframe>
            </div>
        </div>
    </div>
    <div class="row section-auctions">
        <div class="col-md-12">
            @foreach($auctions as $auction)
            <div class="col-md-4">
                <div class="auction-container text-center">
                    <img src="/uploads/fullsize/{{$auction['image1']}}" class="img-responsive">
                    <h4>{{$auction['name']}}</h4>
                    <h5>{{$auction['bid']}}</h5>
                    <h5 class="cat-{{$auction['category']}}">{{$auction['category']}}</h5>
                    <div class="clock clock{{$loop->index}}"></div>
                    <a href="{{url('/auctions')}}/{{$auction['product_id']}}"><button class=" btn btn-primary btn-sm">View Auction</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
