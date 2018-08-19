{{-- resources/views/admin/edit.blade.php --}}

@extends('adminlte::page')

@section('title', 'edit')

@section('content_header')
<h1>edit</h1>
@stop

@section('content')

 @if(isset($success))
		<div class="alert alert-success" role="alert">{{ $success }}</div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<html>
<link rel="stylesheet" href="../../../public/css/ahihi.css">
<div class="inner contact">
    <!-- Form Area -->
    
    <div class="contact-form">

        <!-- Form -->
        @foreach($users as $p)
        <form id="contact-us" method="post" action="{{ url('/admin/'. $p->stt) }}" >
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <!-- Left Inputs -->

            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                <!-- Name -->
                <input type="text" name="ten_tai_khoa" id="ten_tai_khoa" value="{{ $p->ten_tai_khoa }}" required="required" class="form" placeholder="Tên Tài khoản" />
                <!-- bithday -->
                <input type="date" name="ngay_sinh" id="ngay_sinh" value="{{ $p->ngay_sinh }}" required="required" class="form" placeholder="date"/>
                <!-- số_CMT -->
                <input type="text" name="so_cmt" id="so_cmt" value="{{ $p->so_cmt }}" required="required" class="form" placeholder="Số CMT" />
                <!-- địa chỉ -->
                <input type="text" name="dia_chi" id="dia_chi" value="{{ $p->dia_chi }}" required="required" class="form" placeholder="Địa Chỉ" />
                <!-- Email -->
                <input type="email" name="email" id="email" value="{{ $p->email }}" required="required" class="form" placeholder="Email" />
                <!-- sdt -->
               <input type="text" name="sdt" id="sdt" value="{{ $p->sdt }}" required="required" class="form" placeholder="Số điện thoại"/>
            </div>
            <!-- End Left Inputs -->

            <!-- Right Inputs -->
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
            <!-- tên nhân viên -->
            <input type="text" name="ten_nhan_vien" id="ten_nhan_vien" value="{{ $p->ten_nhan_vien }}" required="required" class="form" placeholder="Tên Nhân Viên"/>
            <!-- sex -->
            <select type="text" id="gioi_tinh" name="gioi_tinh" class="form">
                <option selected> Nam...</option>
                <option> Nữ...</option>
            </select>
            <!-- Chức vụ -->
            <select type="text" id="chuc_cu" name="chuc_cu" class="form">
                <option selected> Nhân viên</option>
                <option> Nhân viên văn phòng</option>
            </select>
            <!-- kiểu làm -->
            <select type="text" id="kieu_lam" name="kieu_lam" class="form">
                <option selected> Full-time</option>
                <option> Fart-time</option>
            </select><!-- ghi chú -->
            <textarea cols="30" rows="6" name="ghi_chu" id="ghi_chu" value="{{ $p->ghi_chu }}" required="required" class="form" placeholder="Ghi chú"></textarea>
            </div>
            <!-- End Right Inputs -->
            
            
            <!-- Bottom Submit -->
            <div class="relative fullwidth col-xs-12">
                <!-- Send Button -->
                <button type="submit" id="submit" name="submit" class="form-btn semibold" href="{{ url('/admin/'. $p->stt) }}">Update</button> 
            </div><!-- End Bottom Submit -->

            <!-- Clear -->
            <div class="clear"></div>
        </form>
        @endforeach

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
