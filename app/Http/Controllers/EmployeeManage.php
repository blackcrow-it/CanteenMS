<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductInput;
use App\ProductInformation;
use Validator, Input, Redirect; 

class EmployeeManage extends Controller{
    public function create()
    {
        return view('admin/create');
    }

    public function show() {
    	$data = DB::table('user_information')->paginate(40);
        $data->setPath("");
    	return view('admin/list',['data'=>$data]);
	}
	
	public function show_detail($stt) {
    	$data = DB::select('select * from user_information where stt = :stt', ['stt' => $stt]);
		return view('admin/detail',['data'=>$data]);
    }

    public function store(Request $request) {
		$validator = Validator::make($request->all(), [
            'ten_nhan_vien'      => 'required|max:255',
            'ten_tai_khoa'       => 'required',
            'sdt'                => 'required|numeric',
            'ngay_sinh'          => 'required',
            'gioi_tinh'          => 'required',
            'so_cmt'             => 'required|unique:user_information',
            'dia_chi'            => 'required',
            'email'              => 'required|email',
            'chuc_cu'            => 'required',
            'kieu_lam'           => 'required',
            'ghi_chu'            =>'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/them-nhan-vien')
                    ->withErrors($validator)
					->withInput();
		} else {
    
		$ten_tai_khoa       = $request->ten_tai_khoa;
		$path_hinh_anh      = $request->path_hinh_anh;
		$ten_nhan_vien      = $request->ten_nhan_vien;
		$ngay_sinh          = $request->ngay_sinh;
		$gioi_tinh          = $request->gioi_tinh;
		$so_cmt             = $request->so_cmt;
		$sdt                = $request->sdt;
		$dia_chi            = $request->dia_chi;
		$email              = $request->email;
		$chuc_cu            = $request->chuc_cu;
		$kieu_lam           = $request->kieu_lam;
		$date               = new \DateTime();
        $ngay_vao           = $date->format('Y-m-d H:i:s');
		$ghi_chu            = $request->ghi_chu;
		
    	$data = DB::table('user_information')
    	->insert([
			
			'ten_tai_khoa'       => $ten_tai_khoa,
			'path_hinh_anh'      => $path_hinh_anh,
		   'ten_nhan_vien'       => $ten_nhan_vien,
			'ngay_sinh'          => $ngay_sinh,
			'gioi_tinh'          => $gioi_tinh,
			'so_cmt'             => $so_cmt, 
			'sdt'                => $sdt, 
			'dia_chi'            => $dia_chi,
			'email'              => $email,
			'chuc_cu'            => $chuc_cu,
			'chuc_cu_alias'      => $so_cmt,
			'kieu_lam'           => $kieu_lam,
			'ngay_vao'           => $ngay_vao,
			'ghi_chu'            => $ghi_chu,
		]);
		
	return redirect('/admin/them-nhan-vien');
		}
    }

    public function getEdit($so_cmt){
    	$product = DB::table('user_information')
    	->where('so_cmt',$so_cmt)->first();
    	return view('admin/edit',['data'=>$product]);
    }

    public function doEdit(Request $request){
		$validator = Validator::make($request->all(), [
            'ten_nhan_vien'      => 'required|max:255',
            'ten_tai_khoa'       => 'required',
            'sdt'                => 'required|numeric',
            'ngay_sinh'          => 'required',
            'gioi_tinh'          => 'required',
            'so_cmt'             => 'required|unique:user_information',
            'dia_chi'            => 'required',
            'email'              => 'required|email',
            'chuc_cu'            => 'required',
            'kieu_lam'           => 'required',
            'ghi_chu'            =>'required',
        ]);

        if ($validator->fails()) {
            return redirect::back()
                    ->withErrors($validator)
					->withInput();
		} else {
		
		$ten_tai_khoa       = $request->ten_tai_khoa;
		$path_hinh_anh      = $request->path_hinh_anh;
		$ten_nhan_vien      = $request->ten_nhan_vien;
		$ngay_sinh          = $request->ngay_sinh;
		$gioi_tinh          = $request->gioi_tinh;
		$so_cmt             = $request->so_cmt;
		$sdt                = $request->sdt;
		$dia_chi            = $request->dia_chi;
		$email              = $request->email;
		$chuc_cu            = $request->chuc_cu;
		$kieu_lam           = $request->kieu_lam;
		$date               = new \DateTime();
        $ngay_vao           = $date->format('Y-m-d H:i:s');
		$ghi_chu            = $request->ghi_chu;

        $product = DB::table('user_information')
        ->where('so_cmt', $so_cmt)
        ->update([
			'ten_tai_khoa'       => $ten_tai_khoa,
			'path_hinh_anh'      => $path_hinh_anh,
		   'ten_nhan_vien'       => $ten_nhan_vien,
			'ngay_sinh'          => $ngay_sinh,
			'gioi_tinh'          => $gioi_tinh,
			'so_cmt'             => $so_cmt, 
			'sdt'                => $sdt, 
			'dia_chi'            => $dia_chi,
			'email'              => $email,
			'chuc_cu'            => $chuc_cu,
			'chuc_cu_alias'      => $so_cmt,
			'kieu_lam'           => $kieu_lam,
			'ngay_vao'           => $ngay_vao,
			'ghi_chu'            => $ghi_chu,
        ]);

    	return redirect('/admin/danh-sach-nhan-vien');
		}
    }

    public function doDelete($so_cmt){
    	$product = DB::table('user_information')
		->where('so_cmt',$so_cmt)->delete();
		return redirect('/admin/danh-sach-nhan-vien');
    }
}
