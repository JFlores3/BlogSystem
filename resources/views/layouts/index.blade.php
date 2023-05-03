<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <meta charset="UTF-8">

    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            font-size: 25px;
            color: #333;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-item {
            margin-left: 10px;
            margin-right: 10px;
        }

        .nav-link {
            color: #333;
        }

        .nav-link:hover {
            color: #666;
        }

        .container {
            margin-top: 30px;
        }

        .btn {
            font-size: 16px;
            padding: 10px 16px;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.2s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
            color: #fff;
        }

        .card {
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f7f7f7;
            border-bottom: none;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            color: #333;
        }

        .card-body {
            padding: 20px;
        }

        .card-body p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .card-body .btn {
            margin-top: 10px;
        }

        .container-login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100
        }
</style>
</head>
<body>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
        </li>
        <li class="nav-item">
        <a href="{{ route('blog_posts.create') }}">Create a new post</a>
        </li>
    </ul>
</div>
                <ul class="navbar-nav">
                <footer class="bg-light text-center py-3">
    <p>Copyright &copy; {{ date('Y') }}
        <a href="#">My Blog</a> | All rights reserved.</p>
</footer>

</body>