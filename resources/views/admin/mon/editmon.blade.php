@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật môn</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-desktop"></i> </span>
		 </div>
        <input name="id" class="form-control" value="{{$mon->id}}" readonly type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-desktop"></i> </span>
		 </div>
        <input name="name" class="form-control" value="{{$mon->name}}" placeholder="Tên môn" required type="text">
    </div>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-desktop"></i> </span>
		 </div>
        <input name="thoiluong" class="form-control" value="{{$mon->thoiluong}}" placeholder="Thời lượng" required type="number">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
		</div>
		<select class="form-control" name="id_nganh">
			<option disabled>Chọn ngành</option>
            @foreach ($nganhs as $item)
            <option {{$mon->id_nganhhoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</div> 
@include('admin.layouts.footer')