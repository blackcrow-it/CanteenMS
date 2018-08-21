@extends('adminlte::page')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('InfoController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="ten_nhan_vien" class="form-control" value="{{$info->ten_nhan_vien}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="file" name="path_hinh_anh" class="form-control" value="{{$info->path_hinh_anh}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="ngay_sinh" class="form-control" value="{{$info->ngay_sinh}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="gioi_tinh" class="form-control" value="{{$info->gioi_tinh}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="so_cmt" class="form-control" value="{{$info->so_cmt}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="sdt" class="form-control" value="{{$info->sdt}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="dia_chi" class="form-control" value="{{$info->dia_chi}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" value="{{$info->email}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="chuc_vu" class="form-control" value="{{$info->chuc_vu}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="ngay_vao" class="form-control" value="{{$info->ngay_vao}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="kieu_lam" class="form-control" value="{{$info->kieu_lam}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="so_ngay_nghi" class="form-control" value="{{$info->so_ngay_nghi}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="luong" class="form-control" value="{{$info->luong}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="text" name="ghi_chu" class="form-control" value="{{$info->ghi_chu}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
