@include('web.layouts.header')
<!DOCTYPE html>
<html>
<head>
	<title>Điểm danh</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Update điểm danh</h2>
			</div>
            @if(Session::has('noti'))
                <h3 align="center">{{Session::get('noti')}}</h3>
            @endif
			<div class="panel-body">
            <form style="margin:auto; margin-top:10px" action="{{route('ddedit',[$id_lop,$id_mon,$ngaydiemdanh])}}" method="POST" enctype="multipart/form-data">
            @csrf
                <table class="table table-bordered">
                    <thead>
                        <th>STT</th>
                        <th>Sinh viên</th>
                        <th>Đi học</th>
                        <th>Nghỉ</th>
                        <th>Đi muộn</th>
                        <th>Có phép</th>
                        <th>Note</th>
                    </thead>
                    <tbody>
                        @foreach($detail as $item)
                        <tr>
                            <td hidden><input name="id_sinhvien[]" value="{{$item->id}}"></td>
                            <td>{{$index++}}</td>
                            <td>{{$item->sv}}</td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="1" class="form-control" {{($item->status == 1)?'checked':''}}></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="0" class="form-control" {{($item->status == 0)?'checked':''}}></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="-1" class="form-control" {{($item->status == -1)?'checked':''}}></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="2" class="form-control" {{($item->status == 2)?'checked':''}}></input></td>
                            <td><input type="text" name="note[]_{{$item->id}}" class="form-control" value="{{$item->note}}"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button style="margin-bottom: 20px;" class="btn btn-warning">Update</button>
            </form>
            </div>
		</div>
	</div>
</body>
</html>
@include('web.layouts.footer')