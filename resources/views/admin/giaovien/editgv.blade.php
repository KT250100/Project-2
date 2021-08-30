@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật thông tin giảng viên</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span class="input-group-text" id="basic-addon0">ID</span></th>
        <td><input readonly value="{{$giaovien->id}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon0"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Tên</span></th>
        <td><input value="{{$giaovien->name}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">SĐT</span></th>
        <td><input value="{{$giaovien->phone}}" name="phone" required type="number" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Email</span></th>
        <td><input value="{{$giaovien->email}}" name="email" required type="email" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Mật khẩu</span></th>
        <td><input value="{{$giaovien->password}}" name="password" required type="password" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Địa chỉ</span></th>
        <td><input value="{{$giaovien->address}}" name="address" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Ngày sinh</span></th>
        <td><input value="{{$giaovien->birthday}}" name="birthday" required type="date" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Tình trạng</span></th>
        <td><input style="width: 30%" type="radio" name="is_active" value="1" class="form-control" {{($giaovien->is_active == 1)?'checked':'' }}>Hoạt động</input>
        <input style="width: 30%" type="radio" name="is_active" value="0" class="form-control" {{($giaovien->is_active == 0)?'checked':'' }}>Vô hiệu</input></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Sửa</button></td>
    </tr>
</form>
</table>
</div> 
@include('admin.layouts.footer')