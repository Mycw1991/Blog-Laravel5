<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | Blog</title>
    </head>
    <body>
        <h1>My Blog</h1>
       @if(Session::has('global'))
        <p> {!! Session::get('global') !!}</p>
        @endif
