@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật thông tin sinh viên</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span class="input-group-text" id="basic-addon0">ID</span></th>
        <td><input readonly value="{{$sinhvien->id}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon0"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Tên</span></th>
        <td><input value="{{$sinhvien->name}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">SĐT</span></th>
        <td><input value="{{$sinhvien->phone}}" name="phone" required type="number" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Email</span></th>
        <td><input value="{{$sinhvien->email}}" name="email" required type="email" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Địa chỉ</span></th>
        <td><input value="{{$sinhvien->address}}" name="address" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Chọn lớp</span></th>
        <td><select name="id_lophoc" class="form-select form-select-sm" >
            @foreach ($lops as $item)
            <option {{$sinhvien->id_lophoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Ngày sinh</span></th>
        <td><input value="{{$sinhvien->birthday}}" name="birthday" required type="date" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Sửa</button></td>
    </tr>
</form>
</table>
</div> 
@include('admin.layouts.footer')