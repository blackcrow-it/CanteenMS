@extends('adminlte::page')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">List</h3>
  <br />
  @if($message = Session::get('success'))
 <div class="alert alert-success">
  <p>{{$message}}</p>
 </div>
 @endif
  <table class="table table-bordered table-striped">
   <tr>
    <th>Tên nhân viên</th>
    <th>Hình ảnh</th>
    <th>Ngày sinh</th>
    <th>Giới tính</th>
    <th>Số cmt</th>
    <th>Số điện thoại </th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Chức vụ </th>
    <th>Ngày vào</th>
    <th>Kiểu làm</th>
    <th>Số ngày nghỉ</th>
    <th>Lương</th>
    <th>Ghi chú</th>
    <th>Action</th>
    <th></th>
   </tr>
   @foreach($infos as $row)
   <tr>
     <td>{{$row['ten_nhan_vien']}}</td>
     <td><img src="{{ asset($row['path_hinh_anh']) }}"  width="120" height="120"></td>
    <td>{{$row['ngay_sinh']}}</td>
    <td>{{$row['gioi_tinh']}}</td>
    <td>{{$row['so_cmt']}}</td>
    <td>{{$row['sdt']}}</td>
    <td>{{$row['dia_chi']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['chuc_vu']}}</td>
    <td>{{$row['ngay_vao']}}</td>
    <td>{{$row['kieu_lam']}}</td>
    <td>{{$row['so_ngay_nghi']}}</td>
    <td>{{$row['luong']}}</td>
    <td>{{$row['ghi_chu']}}</td>
    <td><a href="{{action('InfoController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
    <form method="post" class="delete_form" action="{{action('InfoController@destroy', $row['id'])}}">
     {{csrf_field()}}
     <input type="hidden" name="_method" value="DELETE" />
     <button type="submit" class="btn btn-danger">Delete</button>
    </form>
   </td>
    <td>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
@endsection
