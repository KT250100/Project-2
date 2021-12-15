@include('web.layouts.header')
<!DOCTYPE html>
<html>
<head>
	<title>Điểm danh</title>
    <style>
        .ddbutton a{
            border: 1px solid black;
            border-radius: 5px;
            padding: 5px 6px 5px 6px;
            appearance: button;
            color: black;
            background-color: #58FA58;
            text-decoration: none;
        }
        .ddbutton a:hover{
            background-color: #32CD32;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
            <div class="panel-heading">
				<h2 style="padding-top: 35px;" class="text-center">Lịch dạy</h2>
			</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Lớp học</th>
                        <th>Môn học</th>
                        <th>Dạy thứ</th>
                        <th>Giờ dạy</th>
                        <th>Ngày kết thúc</th>
                    </thead>
                    <tbody>
                    @forelse ($lichday as $item)
                        <tr>
                            <td>{{$item->lop}}{{$item->khoa}}</td>
                            <td>{{$item->mon}}</td>
                            <td>{{$item->ca_day}}</td>
                            <td>{{$item->starttime}} - {{$item->endtime}}</td>
                            <td>{{$item->enddate}}</td>
                        </tr>
                    @empty
                        <tr><td colspan="5" style="text-align:center">Hiện tại chưa có lịch dạy</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
			<div class="panel-heading">
				<h2 style="padding-top: 10px;" class="text-center">Lớp hiện tại</h2>
			</div>
			<div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Lớp học</th>
                        <th>Môn học</th>
                        <th>Điểm danh</th>
                    </thead>
                    <tbody>
                    @forelse ($index as $item)
                        <tr>
                            <td hidden>{{$item->id_lophoc}}</td>
                            <td>{{$item->lop}}{{$item->khoa}}</td>
                            <td>{{$item->mon}}</td>
                            <td><span class="ddbutton"><a href="{{url('/createdd/'.$item->id_lophoc)}}">Điểm danh</a></span></td>
                        </tr>
                    @empty
                        <tr><td colspan="3" style="text-align:center">Hiện tại chưa tới giờ dạy</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
		</div>
	</div>
</body>
</html>
@include('web.layouts.footer')