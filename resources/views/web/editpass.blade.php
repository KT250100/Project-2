@include('web.layouts.header')
<div class="user-container">
    <h2 class="text-center">Đổi mật khẩu</h2>
    <form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    @if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password" class="form-control" required placeholder="Mật khẩu mới" type="password">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="repass" class="form-control" required placeholder="Nhập lại mật khẩu" type="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Đổi</button>
        </div>
    </form>
</div>
@include('web.layouts.footer')