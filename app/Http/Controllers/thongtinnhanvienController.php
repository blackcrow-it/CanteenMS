<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class thongtinnhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show()
    {
        $users = \DB::select('select * from user_information where stt = :stt', ['stt' => 2]);
        return view('admin.thong-tin-nhan-vien', ['users'=>$users]);
    }
}

// INSERT INTO user_information (ten_tai_khoa, path_hinh_anh, ten_nhan_vien, ngay_sinh, gioi_tinh, so_cmt, sdt, dia_chi, email, chuc_cu, chuc_cu_alias, kieu_lam, so_ngay_nghi, luong, ghi_chu)
// VALUES ('myneilthu5ngay7@gmail.com', 'dakhsadl', 'tuananh', 19-1-1999, 'nam', 'ad1234', 01688618875, 'bac_ninh', 'nanhntd', 'chuc_cu', 'chuc_cu_alias', 'kieu_lam', 2, 12000, 'ghi_chu');