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
                        <tr><td colspan="8" style="text-align:center">Danh sách rỗng</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
		</div>
	</div>
</body>
</html>
@include('web.layouts.footer')