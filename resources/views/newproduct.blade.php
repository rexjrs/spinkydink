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
                            <div class="col-md-6 col-md-offset-4">
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
