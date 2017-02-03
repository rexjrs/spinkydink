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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addproduct') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="itemname" class="col-md-2 control-label">Item name</label>

                            <div class="col-md-10">
                                <input id="itemname" type="text" class="form-control" name="itemname" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="itemdesc" class="col-md-2 control-label">Description</label>

                            <div class="col-md-10">
                                <textarea id="itemdesc" class="form-control" name="itemdesc" value="" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-md-2 control-label">Category</label>

                            <div class="col-md-10">
                                <select id="category" class="form-control" name="category" required>
                                    <option value="Games">Games</option>
                                    <option value="Gadgets">Gadgets</option>
                                    <option value="Books">Books</option>
                                </select>
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
                                <select id="increment" class="form-control" name="increment" required>
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
                        <div class="form-group">
                            <label for="increment" class="col-md-2 control-label">Ending Date</label>

                            <div class="col-md-10">
                                <input id="date" type="datetime-local" class="form-control" name="date" min="2017-02-02" required>
                            </div>
                        </div>
                        <br>
                        <p class="text-center warning-img">Images uploaded to SpinkyDink are resized. For the best quality images on your auction, please use land-scape images instead of portrait images.
                        <br>(Turn your phone sideways and snap a pic)</p>
                        <br>
                        <div class="form-group">
                            <label for="file" class="col-md-2 control-label">Main Image</label>

                            <div class="col-md-10 text-center">
                                <input id="file1" type="file" class="form-control" name="file1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input id="file2" type="file" class="form-control" name="file2">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input id="file3" type="file" class="form-control" name="file3">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input id="file4" type="file" class="form-control" name="file4">
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
