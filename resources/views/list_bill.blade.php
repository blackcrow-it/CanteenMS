{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Danh sách hóa đơn')

@section('content_header')
    <h1>Danh sách hóa đơn</h1>
@stop

@section('content')
<style type="text/css">
	.table-wrapper-scroll-y {
  display: block;
  max-height: 350px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>
	<input type="text" name="" id="myInput" placeholder="Tìm kiếm ..." class="form-control">
    <div class="panel">
		<div class="panel-body table-wrapper-scroll-y">
			<table class="table table-hover" id="table-product">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã hóa đơn</th>
						<th>Số loại sản phẩm</th>
						<th>Ngày bán</th>
						<th>Tổng tiền</th>
					</tr>
				</thead>
				<tbody id="myTable">
					@foreach($data as $item)
					<tr id="line_{{ $item->ma_hoa_don }}" style="cursor: pointer;" class='clickable-row' data-href='{{ route($route_name) }}/{{ $item->ma_hoa_don }}'>
						<td>{{ $index++ }}</td>
						<td>{{ $item->ma_hoa_don }}</td>
						<td>{{ $item->so_loai_san_pham }}</td>
						<td>{{ $item->ngay_ban }}</td>
						<td>{{ $item->tong_tien }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript">
    	$(document).ready(function(){
		    $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#myTable tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
		});
    </script>
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
		    $(".clickable-row").click(function() {
		        window.location = $(this).data("href");
		    });
		});
    </script>
@stop