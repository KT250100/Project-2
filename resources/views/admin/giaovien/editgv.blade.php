@include('admin.layouts.header')
<div class="container">
<title>Cập nhật thông tin giảng viên</title>
<h2 class="text-center" >Cập nhật thông tin giảng viên</h2>
<table border="1px" class="table">
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="far fa-user"></i> </span>
		 </div>
        <input readonly value="{{$giaovien->id}}" name="id" class="form-control" placeholder="ID" type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input value="{{$giaovien->name}}" name="name" class="form-control" placeholder="Tên" required type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input value="{{$giaovien->phone}}" name="phone" class="form-control" placeholder="SĐT" required type="number">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input value="{{$giaovien->email}}" name="email" class="form-control" placeholder="Email" required type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
        <input value="{{$giaovien->password}}" name="password" class="form-control" placeholder="Mật khẩu" required type="password">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		 </div>
        <input value="{{$giaovien->address}}" name="address" class="form-control" placeholder="Địa chỉ" required type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
		 </div>
        <input value="{{$giaovien->birthday}}" name="birthday" class="form-control" placeholder="Ngày sinh" required type="date">
    </div>  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-user-lock"></i> </span>
		</div>
		<select name="is_active" class="form-control">
            <option disabled>Tình trạng</option>
			<option value="1" {{($giaovien->is_active == 1)?'selected':'' }}>Hoạt động</option>
			<option value="0" {{($giaovien->is_active == 0)?'selected':'' }}>Vô hiệu</option>
		</select>
	</div>                  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</table>
</div> 
@include('admin.layouts.footer')