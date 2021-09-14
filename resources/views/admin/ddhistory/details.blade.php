@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Lịch sử điểm danh</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>STT</th>
                    <th>Sinh viên</th>
                    <th>Điểm danh</th>
                    <th>Note</th>
                </thead>
                <tbody>
                @foreach($ngaydd as $item)
                    <tr>
                        <td>{{$index++}}</td>
                        <td>{{$item->name}}</td>
                        @if($item->status == 1)
                        <td>Đi học</td>
                        @elseif($item->status == 0)
                        <td>Nghỉ</td>
                        @elseif($item->status == -1)
                        <td>Muộn</td>
                        @else($item->status == 2)
                        <td>Có phép</td>
                        @endif
                        <td>{{$item->note}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.layouts.footer')