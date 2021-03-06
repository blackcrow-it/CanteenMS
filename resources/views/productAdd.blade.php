{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Thêm sản phẩm')

@section('content_header')

@stop

@section('content')
<div class="panel box box-danger">
	<div class="panel-body ">
		<div class="box-header with-border">
			<div class="box-title header-title">Thêm sản phẩm</div>
			
	</div>
<br>
	<div class="col-md-10">
		<form action="{{ route('addProduct') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Tên nhà sản xuất</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="producer" name="producer" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Số lượng</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="quantity" name="quantity" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Đơn vị:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="unit" name="unit" required>
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Đơn giá:</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="price" name="price" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-2 col-form-label">Ghi chú</label>
			<div class="col-sm-10">
				<textarea  class="form-control" rows="4" id="note" name="note" required></textarea> 
			</div>
		</div>


		<button class="btn btn-success" type="submit">Thêm</button>

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