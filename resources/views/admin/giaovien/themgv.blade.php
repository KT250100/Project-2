@include('admin.layouts.header')
<div class="container">
<h2 class="text-center">Thêm giảng viên</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Tên</span></th>
        <td><input name="name" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">SĐT</span></th>
        <td><input name="phone" required type="number" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Email</span></th>
        <td><input name="email" required type="email" class="form-control" aria-describedby="basic-addon1""></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Mật khẩu</span></th>
        <td><input name="password" required type="password" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th<span class="input-group-text" id="basic-addon1">Địa chỉ</span>></th>
        <td><input name="address" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th<span class="input-group-text" id="basic-addon1">Ngày sinh</span>></th>
        <td><input name="birthday" required type="date" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Thêm</button></td>
    </tr>
</form>
</table>
</div>
@include('admin.layouts.footer')