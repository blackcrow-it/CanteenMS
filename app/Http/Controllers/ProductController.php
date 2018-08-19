<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator, Input, Redirect; 
use Illuminate\Foundation\Http\FormRequest;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('admin.them-nhan-vien');
    }

    public function store(Request $request)
    {
        $users = \DB::select('select ten_tai_khoa from user_information');

        $validator = Validator::make($request->all(), [
            'ten_nhan_vien'      => 'required|max:4',
            'ten_tai_khoa'       => 'required',
            'sdt'                => 'required|numeric',
            'ngay_sinh'          => 'required',
            'gioi_tinh'          => 'required',
            'so_cmt'             => 'required',
            'dia_chi'            => 'required',
            'email'              => 'required',
            'chuc_cu'            => 'required',
            'kieu_lam'           => 'required',
            'ghi_chu'            =>'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/create')
                    ->withErrors($validator)
                    ->withInput();
        } else {
            // Lưu thông tin vào database
            $users_id =  DB::table('user_information')->insertGetId([
                'ten_tai_khoa'       => $request->input('ten_tai_khoa'),
                'path_hinh_anh'      => $request->input('path_hinh_anh'),
               'ten_nhan_vien'       => $request->input('ten_nhan_vien'),
                'ngay_sinh'          => $request->input('ngay_sinh'),
                'gioi_tinh'          => $request->input('gioi_tinh'),
                'so_cmt'             => $request->input('so_cmt'),
                'sdt'                => $request->input('sdt'),
                'dia_chi'            => $request->input('dia_chi'),
                'email'              => $request->input('email'),
                'chuc_cu'            => $request->input('chuc_cu'),
                'kieu_lam'           => $request->input('kieu_lam'),
                'ngay_vao'           =>  \Carbon\Carbon::now(),
                'ghi_chu'            => $request->input('ghi_chu'),
                ]);
                $request->session()->flash('success', 'Thêm nhân viên thành công với ID: ' . $users_id); 
                return redirect('admin/them-nhan-vien');
                
        }        
        
    }

    public function show_nv($id)
    {
        $users = \DB::select('select * from user_information where stt = :stt', ['stt' => $id]);
        return view('admin.thong-tin-nhan-vien', ['users'=>$users]);
    }

    
    public function index()
    {
        $users = \DB::select('select * from user_information');
        return view('admin.danh-sach-nhan-vien', ['users'=>$users]);
    }


    public function edit($id)
    {
        $users = DB::table('user_information')
                ->whereIn('stt', [$id])
                ->get();
        return view('admin.edit', ['users'=>$users]);
    }

    public function update(Request $request, $id)
    {

        $updated = DB::table('user_information')
            ->where('stt', '=', $id)
            ->update([
                'ten_tai_khoa'       => $request->input('ten_tai_khoa'),
                'path_hinh_anh'      => $request->input('path_hinh_anh'),
                'ten_nhan_vien'      => $request->input('ten_nhan_vien'),
                'ngay_sinh'          => $request->input('ngay_sinh'),
                'gioi_tinh'          => $request->input('gioi_tinh'),
                'so_cmt'             => $request->input('so_cmt'),
                'sdt'                => $request->input('sdt'),
                'dia_chi'            => $request->input('dia_chi'),
                'email'              => $request->input('email'),
                'chuc_cu'            => $request->input('chuc_cu'),
                'kieu_lam'           => $request->input('kieu_lam'),
                'ghi_chu'            => $request->input('ghi_chu'),                    
                ]);

                return Redirect::back()
                ->with('message', 'Cập nhật sản phẩm thành công')
                ->withInput();
        
    }

    public function destroys($id)
    {
        DB::table('user_information')
              ->where('stt', '=', $id)
              ->delete();    
              return  Redirect::back();
    }


}

