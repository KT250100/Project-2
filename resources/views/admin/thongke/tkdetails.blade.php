@include('admin.layouts.header')
<style>
    .lopmon {
        position: relative;
        margin-bottom: -8px;
    }
</style>
<div class="container">
<title>Thống kê các môn</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thống kê các môn</h2>
        </div>
        <div class="lopmon">
            @foreach ($lop as $item)
            <div>Lớp: {{$item->lop}}{{$item->khoa}}</div>
            @endforeach
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
                        <td><a href="{{url('admin/thongke/detail/'.$id_lop.'/'.$item->id)}}">Xem</a></td>
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