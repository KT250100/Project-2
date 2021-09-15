@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý sinh viên</h2>
        </div>
        <div>
            <a href="{{url('admin/sinhvien/themsv')}}">Thêm</a>
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
                    <th style="width:5%">ID</th>
                    <th style="width:15%">Tên</th>
                    <th style="width:14%">SĐT</th>
                    <th style="width:16%">Email</th>
                    <th style="width:16%">Địa chỉ</th>
                    <th style="width:14%">Ngày sinh</th>
                    <th style="width:10%">Lớp</th>
                    <th style="width:5%">Sửa</th>
                    <th style="width:5%">Xóa</th>
                </thead>
                <tbody>
                @forelse ($sinhviens as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td><a href="{{url('admin/sinhvien/editsv/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletesv/'.$item->id)}}">Xóa</a></td>
                    </tr>
                @empty
                    <tr><td colspan="9" style="text-align:center">Danh sách rỗng</td></tr>
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