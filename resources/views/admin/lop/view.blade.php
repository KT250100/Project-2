@include('admin.layouts.header')
<style>
    .panel-body{
        margin-top: -8px;
    }
</style>
<div class="container">
<title>Quản lý sinh viên</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            @foreach ($lop as $item)
            <h2 class="text-center">{{$item->lop}}{{$item->khoa}}</h2>
        </div>
        <div class="viewlop">
            <a href="{{url('admin/lop/lop')}}">Quay về quản lý lớp</a>
            <br>
            <div><a href="{{url('admin/lop/themsvlop/'.$item->id_lop)}}">Thêm sinh viên vào lớp</a></div>
        </div>
            @endforeach
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th style="width:5%">ID</th>
                    <th style="width:16%">Tên</th>
                    <th style="width:17%">SĐT</th>
                    <th style="width:17.5%">Email</th>
                    <th style="width:18.5%">Địa chỉ</th>
                    <th style="width:12%">Ngày sinh</th>
                    <th style="width:7%">Sửa</th>
                    <th style="width:7%">Xóa</th>
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
                        <td><a href="{{url('admin/sinhvien/editsv/'.$item->id)}}">Sửa</a></td>
                        <td><a href="{{url('/deletelopsv/'.$item->id)}}">Xóa</a></td>
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