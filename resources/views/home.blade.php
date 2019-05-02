@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
hr.style1{
	border-top: 1px solid #8c8b8b;
}
</style>
<body>
    
<div class="container">
    <div class="row justify-content-center">

        <!-- <div class="col-sm-4 text-center" style="background-color: antiquewhite"> -->
        <div class="col-sm-4 text-center">

            <div class="well">
                <img src="icon.png" alt="icon" style="width:120px; height:120px;">
                <h2>User</h2>
                <button type="button" class="btn btn-primary">Edit Profile</button>
                <div class="hr.style1"></div>

                <div class="follow">
                    <h4><a href="">following</a></h4>
                    <p>numbers</p>

                    <h4><a href="">followers</a></h4>
                    <p>numbers</p>

                    <h4><a href="">posted blogs</a></h4>
                    <p>numbers</p>
                </div>
            
            </div>

            <div class="well">
                <textarea name="textareaProfile" cols="40" rows="5" placeholder="anything about you"></textarea>
                <button type="submit" class="btn btn-primary">Post</button>    
            </div>

        </div>

        <!-- <div class="col-sm-8 text-center" style="background-color:aquamarine"> -->
        <div class="col-sm-8 text-center">
            <div class="well">
                <h2>Blogs</h2>
            </div>
           
        </div>

    </div>
</div>
</body>
</html>
@endsection
