@include('admin.layouts.header')
<div class="container">
<title>Biểu đồ các môn</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Biểu đồ các môn</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Môn</th>
                    <th>Chi tiết</th>
                </thead>
                <tbody>
                @forelse ($thongkes as $item)
                    <tr>
                        <td>{{$index++}}</td>
                        <td>{{$item->mon}}</td>
                        <td><a href="{{url('admin/thongke/bd_detail/'.$id_lop.'/'.$item->id)}}">Xem</a></td>
                    </tr>
                @empty
                    <tr><td colspan="5" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.layouts.footer')