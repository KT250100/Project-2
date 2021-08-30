@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật khóa</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <tr>
        <th><span class="input-group-text" id="basic-addon0">ID</span></th>
        <td><input readonly value="{{$khoa->id}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon0"></td>
    </tr>
    <tr>
        <th><span class="input-group-text" id="basic-addon1">Tên khóa</span></th>
        <td><input value="{{$khoa->name}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon1"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Sửa</button></td>
    </tr>
</form>
</table>
</div>   
@include('admin.layouts.footer')