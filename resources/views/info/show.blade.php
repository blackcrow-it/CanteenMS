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
    <div class="panel panel-default box box-success">
        <div class="panel-heading" style="text-align: center;">
            <h1>Thông tin tài khoản</h1>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="containe">
                    <img src="{{$data->path_hinh_anh}}" width="100%" alt="" class="thumbnail">
                    <div class="bottom-right"><button class="edit-img" data-email="{{ $data->ten_tai_khoan }}" data-img="{{ $data->path_hinh_anh }}" style="background-color: transparent; border-color: transparent; color: black;"><span class="glyphicon glyphicon-pencil"></span></button></div>
                </div>
                </div>
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="content-information">Tên nhân viên: {{ $data->ten_nhan_vien }}</div>
                        <div class="content-information">Ngày sinh: {{ $data->ngay_sinh }}</div>
                        <div class="content-information">Số CMT: {{ $data->so_cmt }}</div>
                        <div class="content-information">Email: {{ $data->email }} <button class="edit-text" data-email="{{ $data->ten_tai_khoan }}" data-text="{{ $data->email }}" data-type="Email" data-alias="email" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></button></div>
                        <br>
                    </div>
                    <div class="col-md-5">
                        <div class="content-information">Tên tài khoản: {{ $data->ten_tai_khoan }}</div>
                        <div class="content-information">Giới tính: {{ $data->gioi_tinh }}</div>
                        <div class="content-information">Số điện thoại: {{ $data->sdt }} <button class="edit-text" data-email="{{ $data->ten_tai_khoan }}" data-text="{{ $data->sdt }}" data-type="Số điện thoại" data-alias="sdt" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></button></div>
                        <div class="content-information">Địa chỉ: {{ $data->dia_chi }} <button class="edit-text" data-email="{{ $data->ten_tai_khoan }}" data-text="{{ $data->dia_chi }}" data-type="Địa chỉ" data-alias="dia_chi" style="background-color: transparent; border-color: transparent;"><span class="glyphicon glyphicon-pencil"></span></button></div>
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
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" action="{{ route('editImage') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group" style="display: none;">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="email_edit" name="email" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="thumbnail">Path Hình Ảnh:</label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" id="thumbnail" name="path_hinh_anh" autofocus>
                            <img id="image" width="50%" alt="" class="thumbnail">
							<p class="errorTitle text-center alert alert-danger hidden"></p>
						</div>
					</div>

				<div class="modal-footer">
					<button accept="" type="submit" class="btn btn-primary edit-image" data-dismiss="modal">
						<span class='glyphicon glyphicon-check'></span> Edit
					</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal">
						<span class='glyphicon glyphicon-remove'></span> Close
					</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="editModalText" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group" style="display: none;">
						<label class="control-label col-sm-2" for="user">User:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="user_edit" name="user" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 text-control" for="text_edit"></label>
						<div class="col-sm-10">
                            <input type="text" class="form-control" id="text_edit" name="text" autofocus>
							<p class="errorTitle text-center alert alert-danger hidden"></p>
						</div>
					</div>

				<div class="modal-footer">
					<button accept="" type="submit" class="btn btn-primary edit-text-user" data-dismiss="modal">
						<span class='glyphicon glyphicon-check'></span> Edit
					</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal">
						<span class='glyphicon glyphicon-remove'></span> Close
					</button>
				</div>
				</form>
			</div>
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
    $(document).on('click', '.edit-img', function() {
        $('.modal-title').text('Sửa ảnh đại diện');
        $('#email_edit').val($(this).data('email'));
        $('#thumbnail').val($(this).data('img'));
        url_img = $('#thumbnail').val()
        $('#image').attr('src',url_img);
        url_img1 = url_img;
        $('#thumbnail').keyup(function(event) {
            url_img1 = $('#thumbnail').val();
            $('#image').attr('src',url_img1);
        });
        $('#editModal').modal('show');
        email = $('#email_edit').val();
        console.log(email);
    });

    $('.modal-footer').on('click', '.edit-image', function() {
        console.log(url_img1);
        // name_edit = $('#name_edit').val();
        // alias_edit = $('#alias_edit').val();
        $.ajax({
            type: 'POST',
            url: 'thong-tin/edit/img',
            data: {
                '_token': $('input[name=_token]').val(),
                'path_hinh_anh': url_img1,
                'email' : email,
            },
            success: function(data) {
                location.reload()
            }
        });
    });


    $(document).on('click', '.edit-text', function() {
        $('.modal-title').text('Sửa thông tin');
        $('#user_edit').val($(this).data('email'));
        $('#text_edit').val($(this).data('text'));
        $('.text-control').text($(this).data('type'));
        text = $('#text_edit').val();
        $('#editModalText').modal('show');
        user = $('#user_edit').val();
        console.log(user);
        type_text = $(this).data('alias');
    });

    $('.modal-footer').on('click', '.edit-text-user', function() {
        text_edit = $('#text_edit').val();
        console.log(type_text);console.log(text_edit);
        if (type_text == 'email'){
            $.ajax({
                type: 'POST',
                url: 'thong-tin/edit/text/email',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'email': text_edit,
                    'ten_tai_khoan' : user,
                },
                success: function(data) {
                    location.reload()
                }
            }); 
        } else if (type_text == 'sdt'){
            $.ajax({
                type: 'POST',
                url: 'thong-tin/edit/text/sdt',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'sdt': text_edit,
                    'ten_tai_khoan' : user,
                },
                success: function(data) {
                    location.reload()
                }
            }); 
        } else if (type_text == 'dia_chi'){
            $.ajax({
                type: 'POST',
                url: 'thong-tin/edit/text/dia-chi',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'dia_chi': text_edit,
                    'ten_tai_khoan' : user,
                },
                success: function(data) {
                    location.reload()
                }
            }); 
        }
        
    });

    function ChangeToSlug(title)
    {
        var slug;
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        return slug;
    }
</script>
@stop
