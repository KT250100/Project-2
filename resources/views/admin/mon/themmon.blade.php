@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Thêm môn</h2>
@if(Session::has('error'))
    <h3 style="color: red; text-align: center;">{{Session::get('error')}}</h3>
@endif
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-desktop"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Tên môn" required type="text">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
		</div>
		<select class="form-control" name="id_nganh">
			<option disabled>Chọn ngành</option>
            @foreach ($nganhs as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Thêm</button>
    </div>
</form>
</div>
@include('admin.layouts.footer')