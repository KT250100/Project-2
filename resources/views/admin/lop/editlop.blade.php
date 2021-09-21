@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật lớp</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
	@if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-chalkboard-teacher"></i> </span>
		 </div>
        <input name="id" class="form-control" placeholder="ID" readonly type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-chalkboard-teacher"></i> </span>
		 </div>
        <input name="name" value="{{$lop->name}}" class="form-control" placeholder="Tên lớp" required type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-users"></i> </span>
		</div>
		<select class="form-control" name="id_khoa">
			<option disabled>Chọn khóa</option>
            @foreach ($khoas as $item)
            <option {{$lop->id_khoahoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
		</div>
		<select class="form-control" name="id_nganh">
			<option disabled>Chọn ngành</option>
            @foreach ($nganhs as $item)
            <option {{$lop->id_nganhhoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</div>   
@include('admin.layouts.footer')