{{-- resources/views/admin/danh-sach-nhan-vien.blade.php --}}

@extends('adminlte::page')

@section('title', 'danh-sach-nhan-vien')

@section('content_header')
    <h1>Danh sach nhân viên</h1>
@stop

@section('content')
<table class="table table-bordered">
        <tr class="success">
            <th>ID</th>
            <th>Tên Nhân Viên</th>
            <th>Action</th>
        </tr>
        @foreach($users as $p)
        <tr>
            <td>{{ $p->stt }}</td>
            <td><a href="{{''. $p->stt}}">{{ $p->ten_nhan_vien }}</a></td>
            <td>
            <a href="{{ '' . $p->stt . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
            <a href="{{ '' . $p->stt.'/destroys' }}"><span class="glyphicon glyphicon-trash">Delete</span></a>
            </td>
            
        </tr>
        @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

