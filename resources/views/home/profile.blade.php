@extends('layouts.app')

@section('content')
    <h1>My Profile</h1>
    <form method="POST" action="/profile">
        <div class="form-group">
            <input class="form-control" type="text" name="first_name" placeholder="First Name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="company" placeholder="Company">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="address" placeholder="Address">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="city" placeholder="City">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="state" placeholder="State">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="zipcode" placeholder="Zip Code">
        </div>
    </form>
@endsection