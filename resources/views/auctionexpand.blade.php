@extends('layouts.app')

@section('content')
<style type="text/css">
    #app{
        height: 100vh;
    }
    #main-content{
        height: 100%;
    }
    .pagefooter{
        margin-top: -50px;
    }
</style>
<div class="container">
    <div class="expand-container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/uploads/fullsize/{{$auctions['image1']}}" class="fancybox" rel="gallery">
                            <img src="/uploads/fullsize/{{$auctions['image1']}}" class="img-responsive thumbnail" />
                        </a>
                    </div>
                </div>
                <div class="row pad-fix hidden-xs hidden-sm">
                    <div class="col-md-4 no-pad">
                        <a href="/uploads/fullsize/{{$auctions['image2']}}" class="fancybox" rel="gallery">
                            <img src="/uploads/fullsize/{{$auctions['image1']}}" class="img-responsive thumbnail" />
                        </a>
                    </div>
                    <div class="col-md-4 no-pad">
                        <a href="/uploads/fullsize/{{$auctions['image3']}}" class="fancybox" rel="gallery">
                            <img src="/uploads/fullsize/{{$auctions['image2']}}" class="img-responsive thumbnail" />
                        </a>
                    </div>
                    <div class="col-md-4 no-pad">
                        <a href="/uploads/fullsize/{{$auctions['image4']}}" class="fancybox" rel="gallery">
                            <img src="/uploads/fullsize/{{$auctions['image3']}}" class="img-responsive thumbnail" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>{{$auctions['name']}}</h3>
                <br>
                <h4>Description</h4>
                <h5>{{$auctions['description']}}</h5>
                <h4>OFFER ENDS IN</h4>
                <center><div class="clock expanded-clock"></div></center>
                <h4>Current Bid (THB)</h4>
                <center><input type="number" name="" value="{{$auctions['bid']}}" readonly="" class="expanded-clock"></center>
                <form>
                    <div class="row">
                        <div class="form-group">
                            <label for="newbid" class="col-md-12 control-label">Your Bid</label>

                            <div class="col-md-4 col-md-offset-4">
                                <input id="newbid" type="text" class="form-control" name="newbid" value="" required autofocus>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <button type="submit" class="btn btn-success">
                                    Place Bid
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="bid-history-container">
                <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Bid History</h3>
                </div>
                  <table class="table">
                      <thead>
                          <tr>
                              <td>Bid Name</td>
                              <td>Bid Price</td>
                              <td>When</td>
                          </tr>
                      </thead>
                      <tbody>
                        @for ($e = 0; $e < 10; $e++)
                          <tr>
                              <td>Thomas Charlesworth</td>
                              <td>1250</td>
                              <td>3 days ago</td>
                          </tr>
                        @endfor
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
