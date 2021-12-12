@include('admin.layouts.header')
<div class="container">
<title>Phân công giảng viên</title>
<h2 class="text-center" >Phân công giảng viên</h2>
@if(Session::has('error'))
    <h3 style="color: white">{{Session::get('error')}}</h3>
@endif
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i></span>
		</div>
		<select name="id_giaovien" class="form-control">
            <option disabled>Chọn giảng viên</option>
            @foreach ($giaoviens as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-chalkboard-teacher"></i> </span>
		</div>
		<select name="id_lop" class="form-control">
            <option disabled>Chọn lớp</option>
            @foreach ($lops as $item)
            <option value="{{$item->id}}">{{$item->name}}{{$item->khoa}}</option>
            @endforeach
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-desktop"></i> </span>
		</div>
		<select name="id_mon" class="form-control">
            <option disabled>Chọn môn</option>
            @foreach ($mons as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
		</select>
	</div>
    <div class="checkboxs">
        <span><b>Ca dạy thứ: </b></span>
        <ul>
            <li>
                <label>
                    <input type="checkbox" value="2" name="t2">
                    <div class="inside-cb">
                        <span class="cb-content">2</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="3" name="t3">
                    <div class="inside-cb">
                        <span class="cb-content">3</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="4" name="t4">
                    <div class="inside-cb">
                        <span class="cb-content">4</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="5" name="t5">
                    <div class="inside-cb">
                        <span class="cb-content">5</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="6" name="t6">
                    <div class="inside-cb">
                        <span class="cb-content">6</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="7" name="t7">
                    <div class="inside-cb">
                        <span class="cb-content">7</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="8" name="cn">
                    <div class="inside-cb">
                        <span class="cb-content">CN</span>
                    </div>
                </label>
            </li>
        </ul>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text">Giờ bắt đầu</span>
		 </div>
        <input name="starttime" class="form-control" type="time">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text">Giờ kết thúc</span>
		 </div>
        <input name="endtime" class="form-control" type="time">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Thêm</button>
    </div>
</form>
</div>
@include('admin.layouts.footer')