@include('admin.layouts.header')
<style>
    .nganh a{
        position: absolute;
        margin-top: 8px;
    }
</style>
<div class="container">
<title>Quản lý môn học</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý môn học</h2>
        </div>
        <div>
            <a href="{{url('admin/mon/themmon')}}">Thêm</a>
            <div class="nganh"><a href="{{url('admin/nganh/nganh')}}">Quản lý ngành</a></div>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Môn, ngành ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Tên môn</th>
                    <th>Thời lượng (giờ)</th>
                    <th>Ngành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                @forelse ($mons as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->thoiluong}}</td>
                        <td>{{$item->nganh}}</td>
                        <td><a href="{{url('admin/mon/editmon/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletemon/'.$item->id)}}">Xoá</a></td>
                    </tr>
                @empty
                    <tr><td colspan="6" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $mons->links() !!}
    </div>
</div>
@include('admin.layouts.footer')