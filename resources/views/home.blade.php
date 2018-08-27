{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')
<style>
    .content div {
        color: white;
        text-align: center;
    }
    .content div h2 {
        padding-top: 10%;
        /* font-size: 60px; */
        font-family:Montserrat, sans-serif;
    }
    .content div h1 {
        /* padding-top: 10%; */
        font-size: 60px;
        font-family:Montserrat, sans-serif;
    }
</style>
@section('content_header')
    {{-- <h1>Welcome</h1> --}}
@stop

@section('content')
    <div>
        <h2>Chào Mừng Qúy Khách Đến Với</h2>
        <h1>CanteenMS</h1>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
