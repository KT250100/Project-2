{{-- Đây là trang home admin --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Trang home admin</h1>

    @if(Auth::guard('admin')->user() != null)
        <span>{{Auth::guard('admin')->user()->name}}</span>
        <a href="{{route('admin.logout')}}">Logout</a>  
    @endif
</body>
</html>