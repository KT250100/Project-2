@include('web.layouts.header')
<title>Lịch sử điểm danh</title>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 style="padding-top: 35px;" class="text-center">Lịch sử điểm danh</h2>
        </div>
        <div class="search">
            <form method="GET">
                <input style="height: 35px;" type="text" name="keyword2" placeholder="Tên môn, lớp ...">
                <input type="date" name="keyword">
                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th style="width: 35%">Ngày điểm danh</th>
                    <th>Lớp</th>
                    <th>Môn</th>
                    <th>Chi tiết</th>
                </thead>
                <tbody>
                @foreach($details as $item)
                    <tr>
                        <td>{{$item->ngaydiemdanh}}</td>
                        <td>{{$item->lop}}{{$item->khoa}}</td>
                        <td>{{$item->mon}}</td>
                        <td><a href="{{url('detail/'.$item->id_lop.'/'.$item->id_mon.'/'.$item->ngaydiemdanh)}}">Xem</a></td>
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
@include('web.layouts.footer')