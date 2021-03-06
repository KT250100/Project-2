@include('admin.layouts.header')
<style>
    .sv a{
        position: absolute;
        margin-top: 8px;
    }
</style>
<div class="container">
<title>Quản lý lớp</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Quản lý lớp</h2>
        </div>
        <div>
            <a href="{{url('admin/lop/themlop')}}">Thêm</a>
            <div class="sv"><a href="{{url('admin/sinhvien/sinhvien')}}">Quản lý sinh viên</a></div>
        </div>
        <div class="search">
            <form method="GET">
                <input type="text" name="keyword" placeholder="Lớp, ngành ...">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th style="width:5%">ID</th>
                    <th style="width:12.5%">Tên lớp</th>
                    <th style="width:10%">Khóa</th>
                    <th style="width:20%">Ngành</th>
                    <th style="width:15%">Số sinh viên</th>
                    <th style="width:12.5%">Chi tiết</th>
                    <th style="width:12.5%">Sửa</th>
                    <th style="width:12.5%">Xóa</th>
                </thead>
                <tbody>
                @forelse ($lops as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}{{$item->khoa}}</td>
                        <td>{{$item->khoa}}</td>
                        <td>{{$item->nganh}}</td>
                        <td>{{$item->sosinhvien}}</td>
                        <td><a href="{{url('admin/lop/view/'.$item->id)}}">Xem</a></td>
                        <td><a href="{{url('admin/lop/editlop/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletelop/'.$item->id)}}">Xoá</a></td>
                    </tr>
                @empty
                    <tr><td colspan="8" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $lops->links() !!}
    </div>
</div>
@include('admin.layouts.footer')