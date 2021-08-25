<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('error'))
        <h2 style="color: red">{{Session::get('error')}}</h2>
    @endif
    <form method="POST" autocomplete="off">
        @csrf
        <input name="email" type="email" placeholder="Email"> <br>
        <input name="password" type="password" placeholder="Password"> <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>