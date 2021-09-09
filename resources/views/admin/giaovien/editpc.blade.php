@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật phân công</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span>Giảng viên</span></th>
        <td><input readonly value="{{$phancong->giaovien}}"></td>
    </tr>
    <tr>
        <th><span>Chọn lớp</span></th>
        <td><select name="id_lophoc">
            @foreach ($lops as $item)
            <option {{$phancong->id_lophoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}{{$item->khoa}}</option>
            @endforeach
      </select></td>
    </tr>
    <tr>
        <th><span>Chọn môn</span></th>
        <td><select name="id_monhoc">
            @foreach ($mons as $item)
            <option {{$phancong->id_monhoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit">Sửa</button></td>
    </tr>
</form>
</table>
</div>   
@include('admin.layouts.footer')