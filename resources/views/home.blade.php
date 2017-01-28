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
            @for ($i = 0; $i < 16; $i++)
            <div class="col-md-3">
                <div class="auction-container text-center">
                    <img src="http://storecdn.ais.co.th/media/catalog/product/cache/2/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone7-plus_matblk_850x850_2.jpg" class="img-responsive">
                    <h4>iphone 7 - 128 GB</h4>
                    <div class="clock"></div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
