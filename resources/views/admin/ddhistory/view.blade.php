@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Lịch sử điểm danh</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>Ngày điểm danh</th>
                    <th>Lớp</th>
                    <th>Môn</th>
                    <th>Giảng viên</th>
                    <th>Chi tiết</th>
                </thead>
                <tbody>
                @forelse ($diemdanhs as $item)
                    <tr>
                        <td>{{$item->ngaydiemdanh}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td>{{$item->mon}}</td>
                        <td>{{$item->giaovien}}</td>
                        <td><a href="{{url('admin/ddhistory/details/'.$item->ngaydiemdanh)}}">Xem</a></td>
                    </tr>
                @empty
                    <tr><td colspan="5" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $diemdanhs->links() !!}
    </div>
</div>
@include('admin.layouts.footer')