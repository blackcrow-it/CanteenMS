{{-- resources/views/admin/thong-tin-nhan-vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'thong-tin-nhan-vien')

@section('content_header')
@foreach($data as $p)
    <h1>Thông tin tài khoản: {{ $p->ten_tai_khoan }}</h1>
@endforeach
@stop

@section('content')
<div class="panel">
	<div class="panel-body">


    <div class="col-sm-3 ">
       <img src="{{ $p->path_hinh_anh }}" width="100%" alt="" class="thumbnail">
    </div>

        
    <div class="col-xs-4 wow animated slideInLeft" data-wow-delay=".5s">
        <table class="table ">
        @foreach($data as $p)
           <tr>
           <th class="success"><label for="staticEmail" class="col-form-label">Tên Nhân Viên</label></th>
                        <td>{{ $p->ten_nhan_vien }}</td>
            </tr>
            
            <tr>
           <th class="success"><label for="staticEmail" class="col-form-label">Ngày sinh:</label></th>
                        <td>{{ $p->ngay_sinh }}</td>
            </tr>

            <tr>
           <th class="success"><label for="staticEmail" class="col-form-label">Số CMT:</label></th>
                        <td>{{ $p->so_cmt }}</td>
            </tr>

            <tr>
           <th class="success"><label for="staticEmail" class="col-form-label">Email:</label></th>
                        <td>{{ $p->email }}</td>
            </tr>

           <tr>
           <th class="success"><label for="staticEmail" class="col-form-label">Chức vụ </label></th>
                        <td>{{ $p->chuc_vu }}</td>
            </tr>
                
            <tr>    
            <th class="success"><label for="staticEmail" class="col-form-label">ngày nghỉ/tháng </label></th>
                <td>{{ $p->so_ngay_nghi }}</td>
            </tr>

            <tr>    
            <th class="success"><label for="staticEmail" class="col-form-label">Lương </label></th>
                <td>{{ $p->luong }}</td>
            </tr>
        @endforeach
        </table>

    </div>   
        

    <div class="col-xs-4 wow animated slideInRight" data-wow-delay=".5s">
        <table class="table table-bordered">
        @foreach($data as $p)
            <tr> 
                <th class="success"><label for="staticEmail" class="col-form-label">Mã nhân viên: </label></th>
                <td>{{ $p->stt }}</td>
            </tr> 
            <tr> 
                <th class="success"><label for="staticEmail" class="col-form-label">Giới tính: </label></th>
                <td>{{ $p->gioi_tinh }}</td>
            </tr> 
            <tr> 
                <th class="success"><label for="staticEmail" class="col-form-label">SDT: </label></th>
                <td>{{ $p->sdt }}</td>
            </tr> 
            <tr> 
                <th class="success"><label for="staticEmail" class="col-form-label">Địa chỉ: </label></th>
                <td>{{ $p->dia_chi }}</td>
            </tr> 


           <tr>
                <th class="success"><label for="staticEmail" class="col-form-label">Ngày vào:</label></th>
                <td>{{ $p->ngay_vao }}</td>
            </tr>
            <tr>    
                <th class="success"><label for="staticEmail" class="col-form-label">Kiểu làm: </label></th>
                <td>{{ $p->kieu_lam }}</td>
            </tr>
            <tr>    
                <th class="success"><label for="staticEmail" class="col-form-label">Ghi chú: </label></th>
                <td>{{ $p->ghi_chu }}</td>
            </tr>
        @endforeach
        </table>

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

