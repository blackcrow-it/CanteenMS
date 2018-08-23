{{-- resources/views/admin/danh-sach-nhan-vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'danh-sach-nhan-vien')

@section('content_header')
    <h1>Danh sach nhân viên</h1>
@stop

@section('content')
    <div class="panel">
    	<div class="panel-body">
			<table class="table table-hover">
				<thead>
                <tr class="success">
                    <th>ID</th>
                    <th>Tên Nhân Viên</th>
                    <th>Action</th>
                </tr>
				</thead>
				<tbody>
					@foreach($data as $item)
					<tr>
						<td>{{ $item->stt }}</td>
						<td id="name"><a href="{{ '' . $item->stt}}">{{ $item->ten_nhan_vien }}</a></td>
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
@stop

