<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

</head>
<body id="page-top" class="frontend landing-page no-skin-config">

    @include('layouts.frontend.topnavbar')
    <!-- Main view  -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.frontend.footer')

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
