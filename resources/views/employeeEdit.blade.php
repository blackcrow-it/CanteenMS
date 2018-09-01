{{-- resources/views/admin/edit.blade.php --}}

@extends('adminlte::page')

@section('title', 'Sửa thông tin')

@section('content_header')

@stop

@section('content')
<div class="panel box box-danger">
    <div class="panel-body"> 
			<div class="box-header with-border">
					<div class="box-title header-title">chỉnh sửa thông tin nhân viên</div>
					
			</div>
			<br>
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
		<form action="{{ route('Employee.edit') }}" method="POST">
		{{ csrf_field() }}

<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Tên tài khoản</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="ten_tai_khoan" name="ten_tai_khoan" value="{{$data->ten_tai_khoan}}" readonly>
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
				<input type="text" class="form-control" id="sdt" name="sdt" value="{{$data->sdt}}">	
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">link ảnh</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="path_hinh_anh" name="path_hinh_anh" value="{{$data->path_hinh_anh}}">	
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
                <select class="form-control" id="gioi_tinh" name="gioi_tinh" value="{{$data->gioi_tinh}}">
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
                <select class="form-control" id="chuc_vu" name="chuc_vu" value="{{$data->chuc_vu}}">
                    <option>Người dùng</option>
                    <option>Nhân viên</option>
                    <option selected>Quản lý</option>
                </select>
			</div>
		</div>
		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Kiểu làm</label>
			<div class="col-sm-8">
				<!-- <input type="text" class="form-control" id="kieu_lam" name="kieu_lam" required> -->
                <select class="form-control" id="kieu_lam" name="kieu_lam" value="{{$data->kieu_lam}}">
                    <option>Full-time</option>
                    <option>Part-time</option>
                </select>
			</div>
		</div>

        <div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Lương</label>
			<div class="col-sm-8">
				<input type="number" class="form-control" id="luong" name="luong" value="{{$data->luong}}">
			</div>
		</div>
        <div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Số ngày nghỉ/tháng</label>
			<div class="col-sm-8">
				<input type="number" class="form-control" id="so_ngay_nghi" name="so_ngay_nghi" value="{{$data->so_ngay_nghi}}">
			</div>
		</div>

		<div class="form-group row">
			<label for="staticEmail" class="col-sm-4 col-form-label">Ghi chú</label>
			<div class="col-sm-8">
				<textarea  class="form-control" rows="4" id="ghi_chu" name="ghi_chu" >{{$data->ghi_chu}}</textarea> 
			</div>
		</div>
</div>


		<button style="float:right;" class="btn btn-success" type="submit">Sửa</button>

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
var1 = '{{ $data->gioi_tinh }}';
$("select#gioi_tinh option").filter(function() {
    return $(this).text() == var1; 
}).prop('selected', true);
var2 = '{{ $data->chuc_vu }}';
$("select#chuc_vu option").filter(function() {
    return $(this).text() == var2; 
}).prop('selected', true);
var3 = '{{ $data->kieu_lam }}';
$("select#kieu_lam option").filter(function() {
    return $(this).text() == var3; 
}).prop('selected', true);
</script>
@stop