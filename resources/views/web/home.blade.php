<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: pink">
    <header>
       
        @if(Auth::user() != null)
            <span>{{Auth::user()->name}}</span>
            <a href="{{route('logout')}}">Logout</a>
        @else  
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
        @endif
    </header>
    <h1>Đây là trang chủ khách hàng</h1>
</body>
</html>