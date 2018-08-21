{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Quản lý Sản Phẩm</h1>
@stop

@section('content')
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
				<tbody>
					@foreach($data as $item)
					<tr>
						<td>{{ $item->ma_san_pham }}</td>
						<td id="name">{{ $item->ten_san_pham }}</td>
						<td>{{ $item->ten_nha_san_xuat }}</td>
						<td>{{ $item->don_gia }}</td>
						<td>{{ $item->don_vi }}</td>
						<td>{{ $item->so_luong }}</td>
						<td>
							<a href="{{url('/admin/edit',['ten_alias'=>$item->ten_alias])}}" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
							<a href="{{url('/admin/delete',['ten_alias'=>$item->ten_alias])}}" class="btn btn-danger" id="confirm_delete" data-name={{$item->ten_san_pham}}><span class="glyphicon glyphicon-trash"></span> Xoá</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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
@stop