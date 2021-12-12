@include('admin.layouts.header')
<div class="container">
<title>Cập nhật ngành</title>
<h2 class="text-center" >Cập nhật ngành</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
		 </div>
        <input name="id" class="form-control" readonly value="{{$nganh->id}}" type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
		 </div>
        <input name="name" class="form-control" value="{{$nganh->name}}" placeholder="Tên ngành" required type="text">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</div>   
@include('admin.layouts.footer')