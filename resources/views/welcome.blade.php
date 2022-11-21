<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{$pageTitle}} </title>
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Neuton" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Gudea" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Candal" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Viga" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Manjari" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Rubik" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Jura" />
    </head>
    <body>
        @include('component.header')
        @yield('body')
        @include('component.footer')
    </body>
</html>
