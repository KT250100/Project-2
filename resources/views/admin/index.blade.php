@include('admin.layouts.header')
<div class="container">
<title>Quản lý tài khoản</title>
    <h2 class="text-center">Quản lý tài khoản</h2>
    <table border="1px" class="table table-bordered">
        <tr>
            <th>Tên</th>
            <td>
                @if(Auth::guard('admin')->user() != null)
                <div class="profile_name">{{Auth::guard('admin')->user()->name}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                @if(Auth::guard('admin')->user() != null)
                <div class="profile_name">{{Auth::guard('admin')->user()->email}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th style="text-align:center" colspan="2"><a href="{{url('admin/edit/'.Auth::guard('admin')->user()->id)}}">Đổi mật khẩu</a></th>
        </tr>
    </table>
</div>
@include('admin.layouts.footer')