{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Thêm thông tin nhân viên')

@section('content_header')

@stop

@section('content')
 <div class="box box-success" data-widget="box-widget">
		<div class="box-header ">
				<div class="box-header with-border">
						<div class="box-title header-title">Thêm nhân viên</div>
						
				</div>
				
	<div class="col-md-12">
			
		<br>
		<form action="{{ route('addEmployee') }}" method="POST">
		{{ csrf_field() }}

<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên tài khoản</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_tai_khoan" name="ten_tai_khoan" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Ngày sinh</label>
			<div class="col-sm-8">
				<input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">CMT</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="so_cmt" name="so_cmt" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Địa chỉ</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="dia_chi" name="dia_chi" required>
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Số điện thoại</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="sdt" name="sdt" required>	
			</div>
		</div>
        <div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">link ảnh</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="path_hinh_anh" name="path_hinh_anh" required>	
			</div>
		</div>
</div>


<div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
		<!-- <div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên Nhân viên</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_nhan_vien" name="ten_nhan_vien" required>
			</div>
		</div> -->
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Giới tính</label>
			<div class="col-sm-8">
				<!-- <input type="text" class="form-control" id="gioi_tinh" name="gioi_tinh" required> -->
                <select class="form-control" id="gioi_tinh" name="gioi_tinh" required>
                    <option>Khác</option>
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ</label>
			<div class="col-sm-8">
				<!-- <input type="text" class="form-control" id="chuc_cu" name="chuc_cu" required> -->
                <select class="form-control" id="chuc_vu" name="chuc_vu" required>
                    <option>Người dùng</option>
                    <option>Nhân viên</option>
                    <option>Quản lý</option>
                </select>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Kiểu làm</label>
			<div class="col-sm-8">
				<!-- <input type="text" class="form-control" id="kieu_lam" name="kieu_lam" required> -->
                <select class="form-control" id="kieu_lam" name="kieu_lam" required>
                    <option>Full-time</option>
                    <option>Part-time</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Lương</label>
			<div class="col-sm-8">
				<input type="number" class="form-control" id="luong" name="luong" required>
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Ghi chú</label>
			<div class="col-sm-8">
				<textarea  class="form-control" rows="4" id="ghi_chu" name="ghi_chu" required></textarea> 
			</div>
		</div>
</div>


		<button style="float:right;" class="btn btn-success" type="submit">Thêm nhân viên</button>

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