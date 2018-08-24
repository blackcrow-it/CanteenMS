{{-- resources/views/admin/danh-sach-nhan-vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'danh-sach-nhan-vien')

@section('content_header')
    <h1>Danh sach nhân viên</h1>
@stop

@section('content')
<style type="text/css">
	.table-wrapper-scroll-y {
  display: block;
  max-height: 350px;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>

<input type="text" name="" id="myInput" placeholder="Tìm kiếm ..." class="form-control">

    <div class="panel">
    	<div class="panel-body">
			<table class="table table-hover">
				<thead>
                <tr class="success">
                    <th>ID</th>
                    <th>Tên Nhân Viên</th>
                    <th>Giới tính</th>
                    <th>SDT</th>
                    <th>Kiểu làm</th>
                    <th>Chức vụ</th>
                    <th>Action</th>
                </tr>
				</thead>
				<tbody id="myTable">
					@foreach($data as $item)
					<tr id="line_{{ $item->ten_nhan_vien }}" style="cursor: pointer;" class='clickable-row' >
						<td>{{ $item->stt }}</td>
						<td id="name"><a href="{{ '' . $item->stt}}">{{ $item->ten_nhan_vien }}</a></td>
						<td>{{ $item->gioi_tinh }}</td>
						<td>{{ $item->sdt }}</td>
						<td>{{ $item->kieu_lam }}</td>
						<td>{{ $item->chuc_vu }}</td>
						<td>
							<a href="{{url('/admin/Employee/edit',['ten_tai_khoan'=>$item->ten_tai_khoan])}}" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
							<a href="{{url('/admin/Employee/delete',['ten_tai_khoan'=>$item->ten_tai_khoan])}}" class="btn btn-danger" id="confirm_delete" data-name={{ $item->ten_nhan_vien }}><span class="glyphicon glyphicon-trash"></span> Xoá</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="../css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
	<script>
        $(document).on("click", "#confirm_delete", function (){
   
            return confirm('Bạn có chắc chắn  muốn xoá Nhân viên không ?');
        });
    </script>

	<script type="text/javascript">
    	$(document).ready(function(){
		    $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#myTable tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
		});
    </script>
@stop

