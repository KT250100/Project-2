@include('admin.layouts.header')
<div class="container">
<h2 class="text-center" >Cập nhật phân công</h2>
<form style="margin:auto; text-align:center" method="POST" enctype="multipart/form-data">
    @if(Session::has('error'))
        <h3 align="center" style="color: #FF0000">{{Session::get('error')}}</h3>
    @endif
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
    <div class="checkboxs">
        <span><b>Ca dạy thứ: </b></span>
        <ul>
            <li>
                <label>
                    <input type="checkbox" value="2" name="t2" {{($t2 == true)?'checked':''}}>
                    <div class="inside-cb">
                        <span class="cb-content">2</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="3" name="t3" {{($t3 == true)?'checked':''}}>
                    <div class="inside-cb">
                        <span class="cb-content">3</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="4" name="t4" {{($t4 == true)?'checked':''}}>
                    <div class="inside-cb">
                        <span class="cb-content">4</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="5" name="t5" {{($t5 == true)?'checked':''}}>
                    <div class="inside-cb">
                        <span class="cb-content">5</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="6" name="t6" {{($t6 == true)?'checked':''}}>
                    <div class="inside-cb">
                        <span class="cb-content">6</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="7" name="t7" {{($t7 == true)?'checked':''}}>
                    <div class="inside-cb">
                        <span class="cb-content">7</span>
                    </div>
                </label>
            </li>
            <li>
                <label>
                    <input type="checkbox" value="8" name="cn" {{($cn == true)?'checked':''}}>
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
        <input name="starttime" class="form-control" value="{{$phancong->starttime}}" type="time">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text">Giờ kết thúc</span>
		 </div>
        <input name="endtime" class="form-control" value="{{$phancong->endtime}}" type="time">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Sửa</button>
    </div>
</form>
</div>   
@include('admin.layouts.footer')