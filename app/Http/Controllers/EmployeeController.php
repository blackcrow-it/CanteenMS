<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Auth;
use Validator, Input, Redirect;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee_add');
    }
    public function create(Request $req)
    {
        $ten_tai_khoan = $req->ten_tai_khoan;
        $path_hinh_anh = $req->path_hinh_anh;
    	$ngay_sinh = $req->ngay_sinh;
    	$so_cmt = $req->so_cmt;
    	$dia_chi = $req->dia_chi;
    	$email = $req->email;
        $sdt = $req->sdt;
        $gioi_tinh = $req->gioi_tinh;
        $chuc_vu = $req->chuc_vu;
        $kieu_lam = $req->kieu_lam;
        $ghi_chu = $req->ghi_chu;
        $luong = $req->luong;
        $date    = new \DateTime();
        $my_date = $date->format('Y-m-d H:i:s');
    	$chuc_vu_alias = str_slug($chuc_vu);
		

        $data = DB::table('user_infomation')
        ->where('ten_tai_khoan', $ten_tai_khoan)
    	->update([
    		'ngay_sinh' => $ngay_sinh,
            'gioi_tinh' => $gioi_tinh,
            'path_hinh_anh' => $path_hinh_anh,
    		'so_cmt' => $so_cmt,
    		'sdt' => $sdt,
    		'dia_chi' => $dia_chi,
    		'email' => $email,
            'chuc_vu' => $chuc_vu,
            'chuc_vu_alias' => $chuc_vu_alias,
            'ngay_vao' => $my_date,
            'kieu_lam' => $kieu_lam,
            'so_ngay_nghi' => 0,
            'luong' => $luong,
            'ghi_chu' => $ghi_chu,
            'updated_at' => $my_date
    	]);
        
        if ($chuc_vu_alias == 'nguoi-dung') {
            $datauser = DB::table('users')
            ->where('email', $ten_tai_khoan)
            ->update([
                'role_id' => 4,
                'updated_at' => $my_date
            ]);
        } elseif ($chuc_vu_alias == 'nhan-vien') {
            $datauser = DB::table('users')
            ->where('email', $ten_tai_khoan)
            ->update([
                'role_id' => 3,
                'updated_at' => $my_date
            ]);
        } elseif ($chuc_vu_alias == 'quan-ly') {
            $datauser = DB::table('users')
            ->where('email', $ten_tai_khoan)
            ->update([
                'role_id' => 2,
                'updated_at' => $my_date
            ]);
        }

    	
    return redirect('/admin/danh-sach-nhan-vien');
    }

    public function show() {
        $email = Auth::user()->email;
    	$data = DB::table('user_infomation')->where('ten_tai_khoan', '!=', $email) ->paginate(40);
        $data->setPath("");
    	return view('employeeList',['data'=>$data]);
	}
	
	public function show_detail($stt) {
    	$data = DB::select('select * from user_infomation where stt = :stt', ['stt' => $stt]);
		return view('employeeDetail',['data'=>$data]);
    }

    public function getEdit($ten_tai_khoan){
    	$product = DB::table('user_infomation')
    	->where('ten_tai_khoan',$ten_tai_khoan)->first();
    	return view('employeeEdit',['data'=>$product]);
    }

    public function doEdit(Request $request){
		$validator = Validator::make($request->all(), [
            'ten_tai_khoan'       => 'required',
            'sdt'                => 'required|numeric',
            'ngay_sinh'          => 'required',
            'gioi_tinh'          => 'required',
            'so_cmt'             => 'required',
            'dia_chi'            => 'required',
            'email'              => 'required|email',
            'chuc_vu'            => 'required',
            'kieu_lam'           => 'required',
            'ghi_chu'            =>'required',
            'path_hinh_anh'      =>'required',
        ]);

        if ($validator->fails()) {
            return redirect::back()
                    ->withErrors($validator)
					->withInput();
		} else {
		
		$ten_tai_khoan       = $request->ten_tai_khoan;
		$path_hinh_anh      = $request->path_hinh_anh;
		$ngay_sinh          = $request->ngay_sinh;
		$gioi_tinh          = $request->gioi_tinh;
		$so_cmt             = $request->so_cmt;
		$sdt                = $request->sdt;
		$dia_chi            = $request->dia_chi;
		$email              = $request->email;
		$chuc_vu            = $request->chuc_vu;
        $kieu_lam           = $request->kieu_lam;
        $so_ngay_nghi       = $request->so_ngay_nghi;
		$date               = new \DateTime();
        $my_date           = $date->format('Y-m-d H:i:s');
        $ghi_chu            = $request->ghi_chu;
        $luong              = $request->luong;
        $chuc_vu_alias = str_slug($chuc_vu);

        $product = DB::table('user_infomation')
        ->where('ten_tai_khoan', $ten_tai_khoan)
        ->update([
			'ten_tai_khoan'       => $ten_tai_khoan,
			'path_hinh_anh'      => $path_hinh_anh,
			'ngay_sinh'          => $ngay_sinh,
			'gioi_tinh'          => $gioi_tinh,
			'so_cmt'             => $so_cmt, 
			'sdt'                => $sdt, 
			'dia_chi'            => $dia_chi,
			'email'              => $email,
			'chuc_vu'            => $chuc_vu,
			'chuc_vu_alias'      => $chuc_vu_alias,
			'kieu_lam'           => $kieu_lam,
			'ngay_vao'           => $my_date,
            'ghi_chu'            => $ghi_chu,
            'so_ngay_nghi'       => $so_ngay_nghi,
            'luong'              => $luong,
            'updated_at'         => $my_date
        ]);

        if ($chuc_vu_alias == 'nguoi-dung') {
            $datauser = DB::table('users')
            ->where('email', $ten_tai_khoan)
            ->update([
                'role_id' => 4,
                'updated_at' => $my_date
            ]);
        } elseif ($chuc_vu_alias == 'nhan-vien') {
            $datauser = DB::table('users')
            ->where('email', $ten_tai_khoan)
            ->update([
                'role_id' => 3,
                'updated_at' => $my_date
            ]);
        } elseif ($chuc_vu_alias == 'quan-ly') {
            $datauser = DB::table('users')
            ->where('email', $ten_tai_khoan)
            ->update([
                'role_id' => 2,
                'updated_at' => $my_date
            ]);
        }

    	return redirect('/admin/danh-sach-nhan-vien');
		}
    }

    public function doDelete($ten_tai_khoan){
    	$data = DB::table('user_infomation')
        ->where('ten_tai_khoan',$ten_tai_khoan)->delete();
        $user = DB::table('users')
		->where('email',$ten_tai_khoan)->delete();
		return redirect('/admin/danh-sach-nhan-vien');
    }


}
