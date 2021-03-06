@include('admin.layouts.header')
<style>
    .gv a{
        position: absolute;
        margin-top: 8px;
    }
</style>
<div class="container">
<title>Quản lý giảng viên</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý giảng viên</h2>
        </div>
        <div>
            <a href="{{url('admin/giaovien/themgv')}}">Thêm</a>
            <div class="gv"><a href="{{url('admin/giaovien/phancong')}}">Phân công</a></div>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Tên, email ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th style="width:5%">ID</th>
                    <th style="width:17%">Tên</th>
                    <th style="width:12%">SĐT</th>
                    <th style="width:17%">Email</th>
                    <th style="width:17%">Địa chỉ</th>
                    <th style="width:13%">Ngày sinh</th>
                    <th style="width:14%">Tình trạng</th>
                    <th style="width:5%">Sửa</th>
                </thead>
                <tbody>
                @forelse ($giaoviens as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->birthday}}</td>
                        @if($item->is_active == 1)
                        <td>Hoạt động</td>
                        @else
                        <td>Vô hiệu</td>
                        @endif
                        <td><a href="{{url('admin/giaovien/editgv/'.$item->id)}}">Sửa</a></td>
                    </tr>
                @empty
                    <tr><td colspan="8" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $giaoviens->links() !!}
    </div>
</div>
@include('admin.layouts.footer')