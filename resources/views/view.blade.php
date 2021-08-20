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
                        <th>STT</th>
                        <th>Lớp học</th>
                        <th>RollNo</th>
                        <th>Học sinh</th>
                        <th>Đi học</th>
                        <th>Vắng mặt</th>
                        <th>Ghi chú</th>
                    </thead>
                    <tbody>
                        @if($studentList != null)
                        @foreach($studentList as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$lichday->class_name}}</td>
                                <td>{{$item->rollno}}</td>
                                <td>{{$item->fullname}}</td>
                                <td>
                                    <input type="radio" name="{{ $item->rollno }}" value="0" class="form-control"></input>
                                </td>
                                <td>
                                    <input type="radio" name="{{ $item->rollno }}" value="1" class="form-control" checked="true"></input>
                                </td>
                                <td>
                                    <input type="text" name="note_{{ $item->rollno }}" class="form-control"></input>
                                </td>
                            </tr>
                        @endforeach
                        @endif 
                        @if ($edit != null && count($edit) > 0)
                        @foreach($edit as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$lichday->class_name}}</td>
                                <td>{{$item->rollno}}</td>
                                <td>{{$item->fullname}}</td>
                                <td>
                                    <input type="radio" name="{{ $item->rollno }}" value="0" class="form-control" {{ ($item->status == 0)?'checked':'' }}></input>
                                </td>
                                <td>
                                    <input type="radio" name="{{ $item->rollno }}" value="1" class="form-control" {{ ($item->status == 1)?'checked':'' }}></input>
                                </td>
                                <td>
                                    <input type="text" name="note_{{ $item->rollno }}" class="form-control" value="{{ $item->note }}"></input>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <button class="btn btn-warning" onclick="submitData()">Save</button>
            </div>
		</div>
	</div>
    <script type="text/javascript">
        function submitData(){
            statusList = jQuery('input[type=radio]:checked')
            data = []
            for(i=0;i<statusList.length;i++){
                std = {
                    'rollno' : jQuery(statusList[i]).attr('name'),
                    'status' : jQuery(statusList[i]).val(),
                    'note' : jQuery('[name=note_'+jQuery(statusList[i]).attr('name')+']').val()
                }
                data.push(std)
            }
            $.post('{{ route('attendence_post') }}', {
                '_token' : "{{ csrf_token() }}",
                'id_lichday' : {{ $lichday->id }},
                'data' : JSON.stringify(data)
            }, function(data){
                location.reload()
            })
        }
    </script>
</body>
</html>