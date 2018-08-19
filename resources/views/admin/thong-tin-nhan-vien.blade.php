{{-- resources/views/admin/thong-tin-nhan-vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'thong-tin-nhan-vien')

@section('content_header')
@foreach($users as $p)
    <h1>Thông tin tài khoản: {{ $p->ten_tai_khoa }}</h1>
@endforeach
@stop

@section('content')

    <div class="col-sm-3 ">

    </div>

        
    <div class="col-sm-5">
        <table class="table table-bordered">
        @foreach($users as $p)
           <tr>
                <th class="success">Tên Nhân Viên</th>
                <td>{{ $p->ten_nhan_vien }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Ngày sinh: </th>
                <td>{{ $p->ngay_sinh }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Số CMT: </th>
                <td>{{ $p->so_cmt }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Email: </th>
                <td>{{ $p->email }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
        @endforeach
        </table>

        <table class="table table-bordered">
        @foreach($users as $p)
           <tr>
                <th class="success">Chức vụ:</th>
                <td>{{ $p->chuc_cu }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Số ngày nghỉ trong tháng:</th>
                <td>{{ $p->so_ngay_nghi }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Lương: </th>
                <td>{{ $p->luong }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
        @endforeach
        </table>

    </div>   
        

    <div class="col-sm-4">
        <table class="table table-bordered">
        @foreach($users as $p)
            <tr> 
                <th class="success">Mã nhân viên: </th>
                <td>{{ $p->stt }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr> 
            <tr> 
                <th class="success">Giới tính: </th>
                <td>{{ $p->gioi_tinh }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr> 
            <tr> 
                <th class="success">SDT: </th>
                <td>{{ $p->sdt }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr> 
            <tr> 
                <th class="success">Địa chỉ: </th>
                <td>{{ $p->dia_chi }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr> 
            @endforeach
        </table>

        <table class="table table-bordered">
        @foreach($users as $p)
           <tr>
                <th class="success">Ngày vào:</th>
                <td>{{ $p->ngay_vao }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Kiểu làm: </th>
                <td>{{ $p->kieu_lam }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
            <tr>    
                <th class="success">Ghi chú: </th>
                <td>{{ $p->ghi_chu }}</td>
                <td>
                    <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                </td>
            </tr>
        @endforeach
        </table>

    </div> 

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

