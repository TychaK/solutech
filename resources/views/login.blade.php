<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Sign in to your account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Favicons -->
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">
<div class="container">
    <div class="col-md-12 text-center">
        @if ($errors->any())
            <div class="alert alert-danger form-signin mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="col-md-12">
        {!! Form::open(['url'=>'/login','method'=>'POST','class'=>'form-signin']) !!}
        <img class="mb-4" src="{{asset('img/logo.jpeg')}}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        {!! Form::email('email','',['type'=>'email','id'=>'inputEmail','class'=>'form-control','autofocus','required','placeholder'=>'Email Address']) !!}
        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password',['id'=>'inputPassword','class'=>'form-control mt-2','placeholder'=>'Password','required']) !!}
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-2 mb-3 text-muted small">
            <a href="/register">New User? Register</a>
        </p>
        <p class="mt-5 mb-3 text-muted">&copy; 2020 - All rights reserved</p>
        {!! Form::close() !!}
        <div class="col-12">
            <a href="/" class="btn btn-secondary">
                Home
            </a>
        </div>
    </div>

</div>
</body>
</html>
