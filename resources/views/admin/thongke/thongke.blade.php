@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thống kê sinh viên</h2>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Tên, lớp ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Lớp</th>
                    <th>Chi tiết thống kê</th>
                </thead>
                <tbody>
                @forelse ($sinhviens as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td><a href="{{url('admin/thongke/tkdetails/'.$item->id)}}">Xem</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $sinhviens->withQueryString()->links() }}
    </div>
</div>
@include('admin.layouts.footer')