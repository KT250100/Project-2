@include('admin.layouts.header')
<style>
    .bd a{
        position: absolute;
        margin-top: 8px;
    }
</style>
<div class="container">
<title>Lịch sử điểm danh</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Lịch sử điểm danh</h2>
        </div>
        <div>
            <a href="{{url('admin/thongke/thongke')}}">Thống kê</a>
            <div class="bd"><a href="{{url('admin/thongke/bieudo')}}">Biểu đồ</a></div>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Tên lớp, ngành ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Lớp</th>
                    <th>Ngành</th>
                    <th>Chi tiết thống kê</th>
                </thead>
                <tbody>
                @forelse ($lops as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td>{{$item->nganh}}</td>
                        <td><a href="{{url('admin/ddhistory/viewmon/'.$item->id)}}">Xem</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $lops->withQueryString()->links() }}
    </div>
</div>
@include('admin.layouts.footer')