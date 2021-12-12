@include('admin.layouts.header')
<div class="container">
<title>Thêm khóa</title>
<h2 class="text-center" >Thêm khóa</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-users"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Tên khóa" required type="text">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Thêm</button>
    </div>
</form>
</div>
@include('admin.layouts.footer')