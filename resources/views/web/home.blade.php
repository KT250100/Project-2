@include('web.layouts.header')
<div class="user-container">
    <h2 class="text-center">Quản lý tài khoản</h2>
    <table class="table table-bordered">
        <tr>
            <th>Tên</th>
            <td>
                @if(Auth::user() != null)
                <div class="profile_name">{{Auth::user()->name}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th>SĐT</th>
            <td>
                @if(Auth::user() != null)
                <div class="profile_name">{{Auth::user()->phone}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                @if(Auth::user() != null)
                <div class="profile_name">{{Auth::user()->email}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td>
                @if(Auth::user() != null)
                <div class="profile_name">{{Auth::user()->address}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th>Ngày sinh</th>
            <td>
                @if(Auth::user() != null)
                <div class="profile_name">{{Auth::user()->birthday}}</div>
                @endif
            </td>
        </tr>
        <tr>
            <th style="text-align:center" colspan="2"><a href="{{url('edit/'.Auth::user()->id)}}">Đổi thông tin cá nhân</a></th>
        </tr>
        <tr>
            <th style="text-align:center" colspan="2"><a href="{{url('editpass/'.Auth::user()->id)}}">Đổi mật khẩu</a></th>
        </tr>
    </table>
</div>
@include('web.layouts.footer')