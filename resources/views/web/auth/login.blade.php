<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Login</title>
</head>
@include('web.layouts.webloginlayout')
<body>
    <form class="box" method="POST" autocomplete="off">
        @csrf
        @if(Session::has('error'))
            <h3 style="color: white">{{Session::get('error')}}</h3>
        @endif
        <h1>Login</h1>
        <input name="email" type="email" placeholder="Email"> <br>
        <input name="password" type="password" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>