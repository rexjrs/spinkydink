@extends('layouts.app')

@section('content')
<div class="container">
    <input type="text" name="" hidden="" value="{{$time}}" id="time-server">
    <div class="row section-youtube">
        <div class="col-md-10 col-md-offset-1">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5kg3384bebg"></iframe>
            </div>
        </div>
    </div>
    <div class="row section-auctions">
        <div class="col-md-12">
            @for ($i = 0; $i < 15; $i++)
            <div class="col-md-4">
                <div class="auction-container text-center">
                    <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive">
                    <h4>Macbook Pro 15" - Touch Bar</h4>
                    <div class="clock"></div>
                    <button class=" btn btn-primary btn-sm">View Auction</button>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
