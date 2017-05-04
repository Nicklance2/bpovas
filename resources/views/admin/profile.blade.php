@extends('layouts.app')

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="col-sm-6">
            <div class="row">
                <div class="ibox">
                    <div class="ibox-title">
                        <h3 class="text-success">Basic Information</h3>
                    </div>
                    <div class="ibox-content">
                        <form method="POST" action="/profile">
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="first_name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="text" name="password">
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input class="form-control" type="text" name="company">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" type="text" name="city">
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <input class="form-control" type="text" name="state">
                            </div>
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input class="form-control" type="text" name="zipcode">
                            </div>
                            <button class="btn btn-success" type="submit">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="ibox">
                <div class="ibox-title">
                    <h3 class="text-success">Broker Information</h3>
                </div>
                <div class="ibox-content">
                    <form method="POST" action="/profile">
                        <div class="form-group">
                            <label>Broker/ Real Estate License No:</label>
                            <input class="form-control" type="text" name="first_name">
                        </div>
                        <div class="form-group">
                            <label>License Date:</label>
                            <input class="form-control" type="text" name="last_name">
                        </div>
                        <div class="form-group">
                            <label>License Expiration Date: </label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Brokerage: </label>
                            <input class="form-control" type="text" name="password">
                        </div>
                        <div class="form-group">
                            <label>Years of Experience: </label>
                            <input class="form-control" type="text" name="company">
                        </div>
                        <button class="btn btn-success" type="submit">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection