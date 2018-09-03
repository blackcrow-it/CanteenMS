{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Chi tiết')

@section('content_header')
   
@stop

@section('content')
<div class="box box-danger" data-widget="box-widget">
		<div class="box-header with-border">
				<div class="box-title header-title"> <h3>Hoá Đơn: {{ $bill->ma_hoa_don }}</h3></div>
				
		</div>
		<div class="panel-heading">
			<h5 style="float: right;">Ngày bán {{ $bill->ngay_ban}}</h5>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Tên nhà sản xuất</th>
						<th>Đơn giá</th>
						<th>Đơn vị</th>
						<th>Số Lượng Xuất</th>
						<th>Thành Tiền</th>
					</tr>
				</thead>
				<tbody id="myTable">
					@foreach($data as $item)
					<tr >
						<td>{{ $index++ }}</td>
						<td>{{ $item->ten_san_pham }}</td>
						<td>{{ $item->ten_nha_san_xuat }}</td>
						<td>{{ $item->don_gia }}</td>
						<td>{{ $item->don_vi }}</td>
						<td>{{ $item->so_luong_xuat }}</td>
						<td>{{ $item->thanh_tien }}</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<th>Tổng: {{ $bill->tong_tien }} VND</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
@stop