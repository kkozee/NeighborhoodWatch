<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        {{ HTML::style('css/style.css'); }}
        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <title>@yield('title')</title>
    </head>
    <body>
        @include('templates.header')
        @if(Session::has('global'))
            <p class="global">{{ Session::get('global') }}</p>
        @endif
        @yield('content')
    </body>
</html>