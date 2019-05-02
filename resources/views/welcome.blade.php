@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
    <div class="row">

        <div class="col-sm-6">
        <!-- <div class="col-sm-6" style="background-color: antiquewhite"> -->
            <div class="flex-center position-ref full-height">
                <img class:="image" src="{{ asset('image.jpg')}}" width="600px" height="570px" alt="image">
            </div>
        </div>
    
        <div class="col-sm-6 text-center d-flex align-items-center">
        <!-- <div class="col-sm-6 text-center" style="background-color:aquamarine"> -->
            <h1><strong>Awesome Blog</strong></h1>

        </div>
        
    </div>
        </div>
    </body>
</html>

@endsection