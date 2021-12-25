@include('admin.layouts.header')
<div class="container">
<title>Quản lý khóa</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý khóa</h2>
        </div>
        <div>
            <a href="{{url('admin/khoa/themkhoa')}}">Thêm</a>
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
                    <th>ID</th>
                    <th>Tên ngành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                @forelse ($khoas as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><a href="{{url('admin/khoa/editkhoa/'.$item->id)}}">Sửa</a></td>
                        <td><a onclick="return confirm('Xóa khóa học này sẽ xóa hết lớp học trong khóa\nBạn có thực sự muốn xóa?');" href="{{url('/deletekhoa/'.$item->id)}}">Xoá</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $khoas->links() !!}
    </div>
</div>
@include('admin.layouts.footer')