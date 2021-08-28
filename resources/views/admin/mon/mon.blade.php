@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý môn học</h2>
        </div>
        <div>
            <a href="{{url('admin/themkhoa')}}">Thêm</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Tên môn</th>
                    <th>Ngành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                @forelse ($mons as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td></td>
                        <td><a href="{{url('admin/editmon/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletemon/'.$item->id)}}">Xoá</a></td>
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