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
    .section-register{
        padding-top: 20px;
    }
</style>
<div class="container">
    <div class="row section-register">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Auction</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addproduct') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="itemname" class="col-md-2 control-label">Item name</label>

                            <div class="col-md-10">
                                <input id="itemname" type="text" class="form-control" name="itemname" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="itemdesc" class="col-md-2 control-label">Decsription</label>

                            <div class="col-md-10">
                                <textarea id="itemdesc" class="form-control" name="itemdesc" value="" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bid" class="col-md-2 control-label">Starting bid</label>

                            <div class="col-md-10">
                                <input id="bid" type="number" class="form-control" name="bid" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="increment" class="col-md-2 control-label">Incremental value</label>

                            <div class="col-md-10">
                                <select class="form-control">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                    <option value="500">500</option>
                                    <option value="1000">1000</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <p class="text-center warning-img">Images uploaded to SpinkyDink are resized. For the best quality images on your auction, please use land-scape images instead of portrait images.
                        <br>(Turn your phone sideways and snap a pic)</p>
                        <br>
                        <div class="form-group">
                            <label for="file1" class="col-md-2 control-label">Main Image</label>

                            <div class="col-md-10 text-center">
                                <input id="file1" type="file" class="form-control" name="file1" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input id="file2" type="file" class="form-control" name="file2" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input id="file3" type="file" class="form-control" name="file3" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input id="file4" type="file" class="form-control" name="file4" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">
                                    Submit Auction
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
