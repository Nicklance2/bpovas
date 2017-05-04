@extends('layouts.auth')

@section('content')


    @include('layouts.errors')
    <div class="container">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>

                    <img src="css/images/logo-s.png">

                </div>
                <p>
                    <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
                </p>
                <p>Login in. To see it in action.</p>
                <form class="m-t" role="form" method="POST" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required="">
                    </div>
                    <button type="submit" class="btn btn-success block full-width m-b">Login</button>

                    <a href="/password/reset"><small>Forgot password?</small></a>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="/register">Create an account</a>
                </form>
            </div>
        </div>
    </div>
@endsection