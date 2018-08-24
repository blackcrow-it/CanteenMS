{{-- resources/views/admin/edit.blade.php --}}

@extends('adminlte::page')

@section('title', 'edit')

@section('content_header')
<h1>Chi tiết nhân viên</h1>
@stop

@section('content')
<div class="panel">
    <div class="panel-body"> 
	
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif	
	
	    <div class="col-md-12">
		<form action="{{ route('product.edit') }}" method="POST">
		{{ csrf_field() }}

<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên tài khoản</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_tai_khoa" name="ten_tai_khoa" value="{{$data->ten_tai_khoa}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Ngày sinh</label>
			<div class="col-sm-8">
				<input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{{$data->ngay_sinh}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">CMT</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="so_cmt" name="so_cmt" value="{{$data->so_cmt}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Địa chỉ</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="dia_chi" name="dia_chi" value="{{$data->dia_chi}}">
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Số điện thoại</label>
			<div class="col-sm-8">
				<input type="number" class="form-control" id="sdt" name="sdt" value="{{$data->sdt}}">	
			</div>
		</div>
</div>


<div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên Nhân viên</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_nhan_vien" name="ten_nhan_vien" value="{{$data->ten_nhan_vien}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Giới tính</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="gioi_tinh" name="gioi_tinh" value="{{$data->gioi_tinh}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="chuc_cu" name="chuc_cu" value="{{$data->chuc_cu}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Kiểu làm</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="kieu_lam" name="kieu_lam" value="{{$data->kieu_lam}}">
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Ghi chú</label>
			<div class="col-sm-8">
				<textarea  class="form-control" rows="4" id="ghi_chu" name="ghi_chu" value="{{$data->ghi_chu}}"></textarea> 
			</div>
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