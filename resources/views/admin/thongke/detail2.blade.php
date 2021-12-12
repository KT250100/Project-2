@include('admin.layouts.header')
<div class="container">
<title>Chi tiết thống kê sinh viên</title>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Chi tiết thống kê sinh viên</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered" style="text-align: center">
                <thead>
                    <th>Ngày điểm danh</th>
                    <th>Tình trạng</th>
                </thead>
                <tbody>
                @forelse($detail2 as $item)
                    <tr>
                        <td>{{$item->ngaydiemdanh}}</td>
                        @if($item->status == 1)
                        <td>Đi học</td>
                        @elseif($item->status == 0)
                        <td>Nghỉ</td>
                        @elseif($item->status == -1)
                        <td>Đi muộn</td>
                        @elseif($item->status == 2)
                        <td>Nghỉ có phép</td>
                        @endif
                    </tr>
                @empty
                    <tr><td colspan="2" style="text-align:center">Danh sách rỗng</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $detail2->withQueryString()->links() }}
    </div>
</div>
@include('admin.layouts.footer')