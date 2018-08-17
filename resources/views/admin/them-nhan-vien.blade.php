{{-- resources/views/admin/them-nhan-vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'them-nhan-vien')

@section('content_header')
<h1>Thêm Nhân Viên</h1>
@stop

@section('content')

    @if(isset($success))
		<div class="alert alert-success" role="alert">{{ $success }}</div>
    @endif
    @if(isset($fail))
		<div class="alert alert-danger" role="alert">{{ $fail }}</div>
    @endif

<html>
<link rel="stylesheet" href="../../public/css/ahihi.css">
<div class="inner contact">
    <!-- Form Area -->
    <div class="contact-form">

        <!-- Form -->
        <form id="contact-us" method="post" action="{{ url('/admin') }}" >
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <!-- Left Inputs -->
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                <!-- Name -->
                <input type="text" name="ten_tai_khoa" id="ten_tai_khoa" required="required" class="form" placeholder="Tên Tài khoản" />
                <!-- bithday -->
                <input type="date" name="ngay_sinh" id="ngay_sinh" required="required" class="form" placeholder="date"/>
                <!-- số_CMT -->
                <input type="text" name="so_cmt" id="so_cmt" required="required" class="form" placeholder="Số CMT" />
                <!-- địa chỉ -->
                <input type="text" name="dia_chi" id="dia_chi" required="required" class="form" placeholder="Địa Chỉ" />
                <!-- Email -->
                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                <!-- sdt -->
               <input type="text" name="sdt" id="sdt" required="required" class="form" placeholder="Số điện thoại"/>
            </div>
            <!-- End Left Inputs -->

            <!-- Right Inputs -->
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
            <!-- tên nhân viên -->
            <input type="text" name="ten_nhan_vien" id="ten_nhan_vien" required="required" class="form" placeholder="Tên Nhân Viên"/>
            <!-- sex -->
            <input type="text" name="gioi_tinh" id="gioi_tinh" required="required" class="form" placeholder="Giới tính" />
            <!-- Chức vụ -->
            <input type="text" name="chuc_cu" id="chuc_cu" required="required" class="form" placeholder="Chức Vụ"/>
            <!-- kiểu làm -->
            <input type="text" name="kieu_lam" id="kieu_lam" required="required" class="form" placeholder="Kiểu làm"/>
            <!-- ghi chú -->
            <textarea cols="30" rows="6" name="ghi_chu" id="ghi_chu" required="required" class="form" placeholder="Ghi chú"></textarea>
            </div>
            <!-- End Right Inputs -->
            
            <!-- Bottom Submit -->
            <div class="relative fullwidth col-xs-12">
                <!-- Send Button -->
                <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
            </div><!-- End Bottom Submit -->

            <!-- Clear -->
            <div class="clear"></div>
        </form>

        <!-- Your Mail Message -->
        <div class="mail-message-area">
            <!-- Message -->
            <div class="alert gray-bg mail-message not-visible-message">
                <strong>Thank You !</strong> Your email has been delivered.
            </div>
        </div>

    </div><!-- End Contact Form Area -->
</div><!-- End Inner -->
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
