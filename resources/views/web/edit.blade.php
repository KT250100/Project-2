@include('web.layouts.header')
<div class="user-container">
    <h2 class="text-center">Quản lý tài khoản</h2>
    <form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    @if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="far fa-user"></i> </span>
            </div>
            <input name="name" value="{{Auth::user()->name}}" class="form-control" required placeholder="Tên" type="text">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <input name="phone" value="{{Auth::user()->phone}}" class="form-control" required placeholder="SĐT" type="number">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="email" value="{{Auth::user()->email}}" class="form-control" required placeholder="Email" type="email">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
            </div>
            <input name="address" value="{{Auth::user()->address}}" class="form-control" required placeholder="Địa chỉ" type="text">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
            </div>
            <input name="birthday" value="{{Auth::user()->birthday}}" class="form-control" required placeholder="Ngày sinh" type="date">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Đổi</button>
        </div>
    </form>
</div>
@include('web.layouts.footer')