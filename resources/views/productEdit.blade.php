{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="panel box box-danger">
	<div class="panel-body ">
		<div class="box-header with-border">
			<div class="box-title header-title">Sản phẩm</div>
			
	</div>
	<br>
	<div class="col-md-10">
		<form action="{{ route('product.edit') }}" method="POST">
		{{ csrf_field() }}
		<input type="text" name="alias" id="alias" value="{{$data->ten_alias}}" style="display: none;">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" value="{{$data->ten_san_pham}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Tên nhà sản xuất</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="producer" name="producer" value="{{$data->ten_nha_san_xuat}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Số lượng</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="quantity" name="quantity" value="{{$data->so_luong}}" style="display: none;">
				<input type="text" class="form-control" id="quantity_update" name="quantity_update" value="0">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Đơn vị:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="unit" name="unit" value="{{$data->don_vi}}">
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Đơn giá:</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="price" name="price" value="{{$data->don_gia}}">
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Ghi chú</label>
			<div class="col-sm-10">
				<textarea  class="form-control" rows="4" id="note" name="note">{{$data->ghi_chu}}</textarea> 
			</div>
		</div>


		<button class="btn btn-success" type="submit">Sửa</button>

	</form>
	</div>
	</div>
	
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop