<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8">
    <title>Apps Manager</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" {{config('app.url')}}>
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="http://flatfull.com/themes/apply/assets/images/logo.svg">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/primary.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    @stack('style')
</head>
<!-- END HEAD -->
<body>
<div class="app" id="app">
    @include('layouts.sidebar')
    <div id="content" class="app-content box-shadow-0" role="main">
        @yield('header')
        <div class="content-main" id="content-main">
            <div class="padding">

                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
<script src="{{asset('js/app.min.js')}}"></script>
@stack('script')
</body>
</html>
