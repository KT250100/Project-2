@include('web.layouts.header')
<!DOCTYPE html>
<html>
<head>
	<title>Điểm danh</title>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 style="padding-top: 35px;" class="text-center">Điểm danh</h2>
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
                            <td>{{$item->lop}}{{$item->khoa}}</td>
                            <td>{{$item->mon}}</td>
                            <td><button class="btn btn-warning" onclick="window.open('{{route('createdd')}}?id={{$item->id_lophoc}}', '_self')">Điểm danh</button></td>
                        </tr>
                    @empty
                        <tr><td colspan="3" style="text-align:center">Danh sách rỗng</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
		</div>
	</div>
</body>
</html>
@include('web.layouts.footer')