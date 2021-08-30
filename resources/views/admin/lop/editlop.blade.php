@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật lớp</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span class="input-group-text" id="basic-addon0">ID</span></th>
        <td><input readonly value="{{$lop->id}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon0"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Tên lớp</span></th>
        <td><input value="{{$lop->name}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Chọn khóa</span></th>
        <td><select name="id_khoa" class="form-select form-select-sm" >
            @foreach ($khoas as $item)
            <option {{$lop->id_khoahoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
      </select></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Chọn ngành</span></th>
        <td><select name="id_nganh" class="form-select form-select-sm" >
            @foreach ($nganhs as $item)
            <option {{$lop->id_nganhhoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Sửa</button></td>
    </tr>
</form>
</table>
</div>   
@include('admin.layouts.footer')