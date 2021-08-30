@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý lớp</h2>
        </div>
        <div>
            <a href="{{url('admin/lop/themlop')}}">Thêm</a>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Tên lớp</th>
                    <th>Khóa</th>
                    <th>Ngành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                @forelse ($lops as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}{{$item->khoa}}</td>
                        <td>{{$item->khoa}}</td>
                        <td>{{$item->nganh}}</td>
                        <td><a href="{{url('admin/lop/editlop/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletelop/'.$item->id)}}">Xoá</a></td>
                    </tr>
                @empty
                    <tr><td colspan="6" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.layouts.footer')