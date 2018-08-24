{{-- resources/views/admin/them_nhan_vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'Thêm nhân viên')

@section('content_header')
<h1>Thêm nhân viên</h1>
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
		<form action="{{ route('addProduct') }}" method="POST">
		{{ csrf_field() }}

<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên tài khoản</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_tai_khoa" name="ten_tai_khoa" required>
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
				<input type="number" class="form-control" id="sdt" name="sdt" required>	
			</div>
		</div>
</div>


<div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên Nhân viên</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_nhan_vien" name="ten_nhan_vien" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Giới tính</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="gioi_tinh" name="gioi_tinh" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="chuc_cu" name="chuc_cu" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Kiểu làm</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="kieu_lam" name="kieu_lam" required>
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Ghi chú</label>
			<div class="col-sm-8">
				<textarea  class="form-control" rows="4" id="ghi_chu" name="ghi_chu" required></textarea> 
			</div>
		</div>
</div>


		<button class="btn btn-success" type="submit">Thêm nhân viên</button>

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
<script>
        $(document).on("click", "#confirm_delete", function (){
   
            return confirm('đăng kí thành công ?');
        });
    </script>
@stop