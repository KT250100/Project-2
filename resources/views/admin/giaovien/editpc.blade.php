@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật phân công</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input readonly class="form-control" value="{{$phancong->giaovien}}">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-chalkboard-teacher"></i> </span>
		</div>
		<select name="id_lophoc" class="form-control">
            <option disabled>Chọn lớp</option>
            @foreach ($lops as $item)
            <option {{$phancong->id_lophoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}{{$item->khoa}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-desktop"></i> </span>
		</div>
		<select name="id_monhoc" class="form-control">
            <option disabled>Chọn môn</option>
            @foreach ($mons as $item)
            <option {{$phancong->id_monhoc == $item->id?"selected":""}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</div>   
@include('admin.layouts.footer')