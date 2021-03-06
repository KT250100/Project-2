@include('admin.layouts.header')
<style>
    .lopmon {
        position: relative;
        margin-bottom: -40px;
    }
</style>
<div class="container">
<title>Chi tiết điểm danh</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Chi tiết điểm danh</h2>
        </div>
        <div class="lopmon">
            @foreach ($lop as $item)
            <div>Lớp: {{$item->lop}}{{$item->khoa}}</div>
            @endforeach
            @foreach ($mon as $item)
            <div>Môn: {{$item->mon}}</div>
            @endforeach
        </div>
        <div class="search">
            <form method="GET">
                <input type="date" name="keyword">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>Ngày điểm danh</th>
                    <th>Giảng viên</th>
                    <th>Chi tiết</th>
                </thead>
                <tbody>
                @foreach($details as $item)
                    <tr>
                        <td>{{$item->ngaydiemdanh}}</td>
                        <td>{{$item->gv}}</td>
                        <td><a href="{{url('admin/ddhistory/detail/'.$id_lop.'/'.$id_mon.'/'.$item->ngaydiemdanh)}}">Xem</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $details->withQueryString()->links() }}
    </div>
</div>
@include('admin.layouts.footer')