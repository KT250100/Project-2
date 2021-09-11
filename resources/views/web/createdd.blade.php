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
				<h2 class="text-center">Điểm danh</h2>
			</div>
			<div class="panel-body">
            <form style="margin:auto; margin-top:10px" action="{{route('storedd')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($phancong as $item)
                <input style="background-color:#E4E9F7; border:none; font-size:20px" name="lop" readonly value="Lớp: {{$item->lop}}{{$item->khoa}}">
                <br>
                <input style="background-color:#E4E9F7; border:none; font-size:20px" name="mon" readonly value="Môn: {{$item->mon}}">
                <br>
                <input style="background-color:#E4E9F7; border:none; font-size:20px" name="giaovien" readonly value="Giáo viên: {{$item->gv}}" hidden>
                <input readonly name="id_monhoc" value="{{$item->id_monhoc}}" hidden>
                <input readonly name="id_giaovien" value="{{$item->id_giaovien}}" hidden>
            @endforeach
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
                        @if($edit != null && count($edit) > 0)
                        @forelse($edit as $item)
                        <tr>
                            <td hidden><input name="id_sinhvien[]" value="{{$item->id}}"></td>
                            <td>{{$index++}}</td>
                            <td>{{$item->name}}</td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="1" class="form-control" {{($item->status == 1)?'checked':''}}></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="0" class="form-control" {{($item->status == 0)?'checked':''}}></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="-1" class="form-control" {{($item->status == -1)?'checked':''}}></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="2" class="form-control" {{($item->status == 2)?'checked':''}}></input></td>
                            <td><input type="text" name="note[]_{{$item->id}}" class="form-control" value="{{$item->note}}"></td>
                        </tr>
                        @empty
                        <tr><td colspan="7" style="text-align:center">Danh sách rỗng</td></tr>
                        @endforelse
                        @else
                        @forelse($sv as $item)
                        <tr>
                            <td hidden><input name="id_sinhvien[]" value="{{$item->id}}"></td>
                            <td>{{$index++}}</td>
                            <td>{{$item->name}}</td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="1" class="form-control"></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="0" class="form-control" checked="true"></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="-1" class="form-control"></input></td>
                            <td><input type="radio" name="status[]_{{$item->id}}" value="2" class="form-control"></input></td>
                            <td><input type="text" name="note[]_{{$item->id}}" class="form-control"></td>
                        </tr>
                        @empty
                        <tr><td colspan="7" style="text-align:center">Danh sách rỗng</td></tr>
                        @endforelse
                        @endif
                    </tbody>
                </table>
                <button style="margin-bottom: 20px;" class="btn btn-warning">Save</button>
            </form>
            </div>
		</div>
	</div>
</body>
</html>
@include('web.layouts.footer')