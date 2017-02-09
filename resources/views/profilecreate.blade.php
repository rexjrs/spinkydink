@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row section-create-profile">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/createprofile')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="fname" class="col-md-2 control-label">First Name</label>

                            <div class="col-md-10">
                                <input id="fname" type="text" class="form-control" name="fname" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="col-md-2 control-label">Last Name</label>

                            <div class="col-md-10">
                                <input id="lname" type="text" class="form-control" name="lname" value="" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="bankname" class="col-md-2 control-label">Bank Name</label>

                            <div class="col-md-10">
                                <input id="bankname" type="text" class="form-control" name="bankname" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="accountname" class="col-md-2 control-label">Bank Account Holder</label>

                            <div class="col-md-10">
                                <input id="accountname" type="text" class="form-control" name="accountname" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="accountnumber" class="col-md-2 control-label">Bank Account Number</label>

                            <div class="col-md-10">
                                <input id="accountnumber" type="number" class="form-control" name="accountnumber" value="" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="address1" class="col-md-2 control-label">Address Line One</label>

                            <div class="col-md-10">
                                <input id="address1" type="text" class="form-control" name="address1" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address2" class="col-md-2 control-label">Address Line Two</label>

                            <div class="col-md-10">
                                <input id="address2" type="text" class="form-control" name="address2" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zipcode" class="col-md-2 control-label">Zip Code</label>

                            <div class="col-md-10">
                                <input id="zipcode" type="text" class="form-control" name="zipcode" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-2 control-label">City</label>

                            <div class="col-md-10">
                                <input id="city" type="text" class="form-control" name="city" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="country" class="col-md-2 control-label">Country</label>

                            <div class="col-md-10">
                                <input id="country" type="text" class="form-control" name="country" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-2 control-label">Phone</label>

                            <div class="col-md-10">
                                <input id="phone" type="number" class="form-control" name="phone" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">
                                    Create Profile
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
