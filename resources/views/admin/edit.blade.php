@include('admin.layouts.header')
<div class="container">
    <h2 class="text-center">Đổi mật khẩu</h2>
    <table border="1px" class="table">
        <form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
        @csrf
        @if(Session::has('error'))
            <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
        @endif
        @if(Session::has('error2'))
            <h3 align="center" style="color: #FF0000">{{Session::get('error2')}}</h3>
        @endif
            <tr>
                <th>Mật khẩu mới</th>
                <td><input name="password" required type="password"></td>
            </tr>
            <tr>
                <th>Nhập lại mật khẩu</th>
                <td><input name="repass" required type="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Đổi</button></td>
            </tr>
        </form>
    </table>
</div>
@include('admin.layouts.footer')