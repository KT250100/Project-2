@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Danh sách phân công</h2>
        </div>
        <div>
            <a href="{{url('admin/giaovien/pcgv')}}">Thêm</a>
            <a style="float:right; margin-top:-3px" href="{{url('admin/giaovien/giaovien')}}">Danh sách giảng viên</a>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Từ khóa ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>Giảng viên</th>
                    <th>Lớp</th>
                    <th>Môn</th>
                    <th>Dạy thứ</th>
                    <th>Giờ dạy</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                @forelse ($phancongs as $item)
                    <tr>
                        <td>{{$item->giaovien}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td>{{$item->mon}}</td>
                        <td>{{$item->ca_day}}</td>
                        <td>{{$item->starttime}} - {{$item->endtime}}</td>
                        <td><a href="{{url('admin/giaovien/editpc/'.$item->id_giaovien)}}">Sửa</a></td>
                        <td><a href="{{url('/deletepc/'.$item->id_giaovien)}}">Xoá</a></td>
                    </tr>
                @empty
                    <tr><td colspan="7" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $phancongs->links() !!}
    </div>
</div>
@include('admin.layouts.footer')