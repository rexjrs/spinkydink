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
                        <a href="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="fancybox" rel="gallery">
                            <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive thumbnail" />
                        </a>
                    </div>
                </div>
                <div class="row pad-fix hidden-xs hidden-sm">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4 no-pad">
                        <a href="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="fancybox" rel="gallery">
                            <img src="http://www.fashiontechguru.com/wp-content/uploads/2016/11/MacBook-Pro-2016-2.jpg" class="img-responsive thumbnail" />
                        </a>
                    </div>
                @endfor
                </div>
            </div>
            <div class="col-md-6">
                <h3>Macbook Pro 15" - Touch Bar</h3>
                <br>
                <h4>Description</h4>
                <h5>Latest Macbook Pro 15" 2016. It is stunning and cutting edge. An Ultimate work horse to get your work done.</h5>
                <h4>OFFER ENDS IN</h4>
                <center><div class="clock expanded-clock"></div></center>
                <h4>Current Bid (THB)</h4>
                <center><input type="number" name="" value="1250" readonly="" class="expanded-clock"></center>
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
