@include('admin.layouts.header')
<style>
    .dsgv a{
        position: absolute;
        margin-top: 8px;
    }
</style>
<div class="container">
<title>Danh sách phân công</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Danh sách phân công</h2>
        </div>
        <div>
            <a href="{{url('admin/giaovien/pcgv')}}">Thêm</a>
            <div class="dsgv"><a href="{{url('admin/giaovien/giaovien')}}">Danh sách giảng viên</a></div>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Giảng viên, lớp, môn ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th style="width:12.5%">Giảng viên</th>
                    <th style="width:12%">Lớp</th>
                    <th style="width:15%">Môn</th>
                    <th style="width:15.5%">Dạy thứ</th>
                    <th style="width:19.5%">Giờ dạy</th>
                    <th style="width:15.5%">Ngày kết thúc</th>
                    <th style="width:5%">Sửa</th>
                    <th style="width:5%">Xóa</th>
                </thead>
                <tbody>
                @forelse ($phancongs as $item)
                    <tr>
                        <td>{{$item->giaovien}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td>{{$item->mon}}</td>
                        <td>{{$item->ca_day}}</td>
                        <td>{{$item->starttime}} - {{$item->endtime}}</td>
                        <td>{{$item->enddate}}</td>
                        <td><a href="{{url('admin/giaovien/editpc/'.$item->id_giaovien.'/'.$item->id_lophoc.'/'.$item->id_monhoc)}}">Sửa</a></td>
                        <td><a href="{{url('/deletepc/'.$item->id_giaovien.'/'.$item->id_lophoc.'/'.$item->id_monhoc)}}">Xoá</a></td>
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