<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>
<body>
    <div class="wrapper">
        @extends('layouts.main-header')
        @section('title','Dashboard')
        @include('layouts.main-sidebar')
        <div class="content-wrapper" style="margin-top: 50px;">
                Dashboard
        </div>
    </div>
    </div>
    </div>
    @include('layouts.footer-scripts')
</body>
</html>
