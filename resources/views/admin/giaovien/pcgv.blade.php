@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Phân công giảng viên</h2>
@if(Session::has('error'))
    <h3 style="color: white">{{Session::get('error')}}</h3>
@endif
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span>Tên giảng viên</span></th>
        <td><select name="id_giaovien">
            @foreach ($giaoviens as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select></td>
    </tr>
    <tr>
        <th><span>Chọn lớp</span></th>
        <td><select name="id_lop">
            @foreach ($lops as $item)
            <option value="{{$item->id}}">{{$item->name}}{{$item->khoa}}</option>
            @endforeach
        </select></td>
    </tr>
    <tr>
        <th><span>Chọn môn</span></th>
        <td><select name="id_mon">
            @foreach ($mons as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Thêm</button></td>
    </tr>
</form>
</table>
</div>
@include('admin.layouts.footer')