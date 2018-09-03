{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Quản lý sản phẩm')

@section('content_header')
   
@stop

@section('content')
<div class="box box-success" data-widget="box-widget">
		<div class="box-header with-border">
			<h3 class="box-title">Sản phẩm</h3>
			<div class="box-tools pull-right">
				<input type="text" style=" border: none;" name="" id="myInput" placeholder="Tìm kiếm ..." class="form-control">
			</div>
		</div>
    <div class="panel">
    	<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên Sản Phẩm</th>
						<th>Tên Nhà Sản Xuất</th>
						<th>Đơn Giá</th>
						<th>Đơn Vị</th>
						<th>Số Lượng</th>
						<th></th>
					</tr>
				</thead>
				<tbody id="myTable">
					@foreach($data as $item)
					<tr>
						<td>{{ $index++ }}</td>
						<td id="name">{{ $item->ten_san_pham }}</td>
						<td>{{ $item->ten_nha_san_xuat }}</td>
						<td>{{ $item->don_gia }}</td>
						<td>{{ $item->don_vi }}</td>
						<td>{{ $item->so_luong }}</td>
						<td>
							<a href="{{url('/admin/edit',['ten_alias'=>$item->ten_alias])}}" class="btn btn-info">
								<span class="glyphicon glyphicon-edit"></span>Sửa</a>
							<a href="{{url('/admin/delete',['ten_alias'=>$item->ten_alias])}}" class="btn btn-danger" id="confirm_delete" data-name={{$item->ten_san_pham}}>
								<span class="glyphicon glyphicon-trash"></span> Xoá</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $data->links() }}
		</div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        $(document).on("click", "#confirm_delete", function (){
   
            return confirm('Bạn có chắc chắn  muốn xoá san pham không ?');
        });
    </script>
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
@stop

