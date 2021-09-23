@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Chi tiết thống kê</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th style="width:5%">STT</th>
                    <th>Môn học</th>
                    <th>Chi tiết</th>
                </thead>
                <tbody>
                @forelse ($thongkes as $item)
                    <tr>
                        <td>{{$index++}}</td>
                        <td hidden><input name="id_mon" value="{{$item->id}}"></td>
                        <td>{{$item->mon}}</td>
                        <td><a href="{{url('admin/sinhvien/detail/'.$id_sinhvien.'/'.$item->id)}}">Xem</a></td>
                    </tr>
                @empty
                    <tr><td colspan="3" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.layouts.footer')