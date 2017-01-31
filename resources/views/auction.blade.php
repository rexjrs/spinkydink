@extends('layouts.app')

@section('content')
<div class="category">
    <div class="category-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-xs-12 col-sm-12">
                    <div class="input-group">
                      <input type="text" class="form-control search-bar" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-primary search-bar" type="button">Reset</button>
                      </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                    <div class="btn-group btn-category pull-left" style="width: 100%;" role="group" aria-label="...">
                        <button type="button" class="btn btn-info active" style="width: 18%;">All</button>
                        <button type="button" class="btn btn-info" style="width: 18%;">Games</button>
                        <button type="button" class="btn btn-info" style="width: 18%;">Gadgets</button>
                        <button type="button" class="btn btn-info" style="width: 18%;">Books</button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Other <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Category One</a></li>
                            <li><a href="#">Category Two</a></li>
                            <li><a href="#">Category Three</a></li>
                            <li><a href="#">Category Four</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row section-auction">
        <div class="col-md-12">
            @foreach($auctions as $auction)
            <div class="col-md-4" class="category_{{$auction['category']}}">
                <div class="auction-container text-center">
                    <img src="/uploads/fullsize/{{$auction['image1']}}" class="img-responsive">
                    <h4>{{$auction['name']}}</h4>
                    <h5>{{$auction['bid']}} THB</h5>
                    <div class="clock"></div>
                    <a href="{{url('/auctions')}}/{{$auction['product_id']}}"><button class=" btn btn-primary btn-sm">View Auction</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
