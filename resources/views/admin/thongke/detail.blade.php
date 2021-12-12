@include('admin.layouts.header')
<div class="container">
<title>Thống kê sinh viên</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thống kê sinh viên</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Tên sinh viên</th>
                    <th>Ngày sinh</th>
                    <th>Lịch sử điểm danh</th>
                    <th>Tình trạng</th>
                </thead>
                <tbody>
                @forelse($detail as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->sv}}</td>
                        <td>{{$item->birthday}}</td>
                        <td><a href="{{url('admin/thongke/detail2/'.$id_lop.'/'.$id_mon.'/'.$item->id)}}">Xem</a></td>
                        <td><a href="{{url('admin/thongke/detail3/'.$id_lop.'/'.$id_mon.'/'.$item->id)}}">Xem</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.layouts.footer')