@include('admin.layouts.header')
<div class="container">
<title>Cập nhật thông tin sinh viên</title>
<h2 class="text-center" >Cập nhật thông tin sinh viên</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="far fa-user"></i> </span>
		 </div>
        <input name="id" value="{{$sinhvien->id}}" class="form-control" placeholder="ID" readonly type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" value="{{$sinhvien->name}}" class="form-control" placeholder="Tên" required type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input name="phone" value="{{$sinhvien->phone}}" class="form-control" placeholder="SĐT" required type="number">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" value="{{$sinhvien->email}}" class="form-control" placeholder="Email" required type="email">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		 </div>
        <input name="address" value="{{$sinhvien->address}}" class="form-control" placeholder="Địa chỉ" required type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
		 </div>
        <input name="birthday" value="{{$sinhvien->birthday}}" class="form-control" placeholder="Ngày sinh" required type="date">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-chalkboard-teacher"></i> </span>
		</div>
		<select class="form-control" name="id_lophoc">
			<option disabled>Chọn lớp</option>
            @foreach ($lops as $item)
            <option {{$sinhvien->id_lophoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}{{$item->khoa}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</div> 
@include('admin.layouts.footer')