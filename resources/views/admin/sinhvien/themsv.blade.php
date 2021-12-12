@include('admin.layouts.header')
<div class="container">
<title>Thêm sinh viên</title>
<h2 class="text-center" >Thêm sinh viên</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Tên" required type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="phone" class="form-control" placeholder="SĐT" required type="number">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email" required type="email">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		 </div>
        <input name="address" class="form-control" placeholder="Địa chỉ" required type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
		 </div>
        <input name="birthday" class="form-control" placeholder="Ngày sinh" required type="date">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-chalkboard-teacher"></i> </span>
		</div>
		<select class="form-control" name="id_lophoc">
			<option disabled>Chọn lớp</option>
            @foreach ($lops as $item)
            <option value="{{$item->id}}">{{$item->name}}{{$item->khoa}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Thêm</button>
    </div>
</form>
</div>
@include('admin.layouts.footer')