@include('admin.layouts.header')
<h1 class="text-center" >Cập nhật ngành</h1>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon0">ID</span>
        <input readonly value="{{$nganh->id}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon0">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input value="{{$nganh->name}}" name="name" required type="text" class="form-control" aria-describedby="basic-addon1">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>    
@include('admin.layouts.footer')