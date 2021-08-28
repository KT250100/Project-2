@include('admin.layouts.header')
<h1 class="text-center" >Thêm ngành</h1>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Tên ngành</span>
        <input name="name" required type="text" class="form-control" aria-describedby="basic-addon1">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@include('admin.layouts.footer')