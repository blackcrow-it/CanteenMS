{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Thông tin')

@section('content_header')

@stop

@section('content')
<style type="text/css" media="screen">
.content-information {
    font-size: 15px;
    margin-bottom: 3px;
}
.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}
.containe {
    position: relative;
    text-align: center;
    color: white;
}
</style>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;">
            <h1>Thông tin tài khoản</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="containe">
                    <img src="{{ asset($data->path_hinh_anh) }}" width="100%" alt="" class="thumbnail">
                    <div class="bottom-right"><a href="#" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></a></div>
                </div>
                </div>
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="content-information">Tên nhân viên: {{ $data->ten_nhan_vien }}</div>
                        <div class="content-information">Ngày sinh: {{ $data->ngay_sinh }}</div>
                        <div class="content-information">Số CMT: {{ $data->so_cmt }}</div>
                        <div class="content-information">Email: {{ $data->email }} <a href="#" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></a></div>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <div class="content-information">Tên tài khoản: {{ $data->ten_tai_khoan }}</div>
                        <div class="content-information">Giới tính: {{ $data->gioi_tinh }}</div>
                        <div class="content-information">Số điện thoại: {{ $data->sdt }} <a href="#" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></a></div>
                        <div class="content-information">Địa chỉ: {{ $data->dia_chi }} <a href="#" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></a></div>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <div class="content-information">Chức vụ: {{ $data->chuc_vu }}</div>
                        <div class="content-information">Số ngày nghỉ trong tháng: {{ $data->so_ngay_nghi }}</div>
                        <div class="content-information">Lương: {{ $data->luong }}</div>
                    </div>
                    <div class="col-md-5">
                        <div class="content-information">Ngày vào: {{ $data->ngay_vao }}</div>
                        <div class="content-information">Kiểu làm: {{ $data->kieu_lam }}</div>
                        <div class="content-information">Ghi chú: {{ $data->ghi_chu }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
        <br>
            {{-- <div class="col-md-10">   
                <button type="button" class="btn btn-success" style="float: right">Chỉnh sửa</button>
            </div> --}}
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
