<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'user_infomation';
    protected $fillable=['ten_tai_khoa','path_hinh_anh','ten_nhan_vien','ngay_sinh','gioi_tinh','so_cmt','sdt','dia_chi','email','chuc_vu','chuc_vu_alias','ngay_vao','kieu_lam','so_ngay_nghi','luong','ghi_chu'];
  
}
