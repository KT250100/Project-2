@include('admin.layouts.header')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thống kê tình trạng</h2>
        </div>
        <div class="panel-body">
            <table border="1px" class="table table-bordered">
                <thead>
                    <th>Số buổi học</th>
                    <th>Số buổi nghỉ</th>
                    <th>Tình trạng</th>
                </thead>
                <tbody>
                @forelse ($detail3_1 as $item)
                    <tr>
                        @foreach($sobuoidihoc as $item2)
                        @foreach($sbdanghi as $item3)
                        @foreach($sbdimuon as $item4)
                        @if($item->sobuoi == 0)
                            <td>_ / _</td>
                            <td>_ / _</td>
                            <td>_</td>
                        @elseif($item->sobuoi > 0)
                            <td>{{$item2->sobuoidihoc}}/{{$item->sobuoi}}</td>
                            @foreach($detail3_2 as $item5)
                            @if($item3->sbdanghi+$item4->sbdimuon < $item->sobuoinghi)
                            <td style="color: blue;">{{$item3->sbdanghi+$item4->sbdimuon}}/{{$item->sobuoinghi}}</td>
                            <td>Được học tiếp</td>
                            @elseif($item3->sbdanghi+$item4->sbdimuon >= $item->sobuoinghi && $item3->sbdanghi+$item4->sbdimuon < $item5->sobuoinghi2)
                            <td style="color: orange">{{$item3->sbdanghi+$item4->sbdimuon}}/{{$item5->sobuoinghi2}}</td>
                            <td>Cấm thi đợt 1</td>
                            @else
                            <td style="color: red;">{{$item3->sbdanghi+$item4->sbdimuon}}/{{$item5->sobuoinghi2}}</td>
                            <td>Học lại</td>
                            @endif
                            @endforeach
                        @endif
                        @endforeach
                        @endforeach
                        @endforeach
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