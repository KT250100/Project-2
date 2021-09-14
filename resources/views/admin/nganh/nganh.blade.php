@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý ngành</h2>
        </div>
        <div>
            <a href="{{url('admin/nganh/themnganh')}}">Thêm</a>
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
                @forelse ($nganhs as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><a href="{{url('admin/nganh/editnganh/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletenganh/'.$item->id)}}">Xoá</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $nganhs->links() !!}
    </div>
</div>
@include('admin.layouts.footer')