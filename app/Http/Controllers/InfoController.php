<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->email;
        $data = DB::table('user_infomation')
        ->where('ten_tai_khoan',$user)
        ->first();
        return view('info.show', [
          'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $info = Info::find($id);
      return view('info.edit', compact('info', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
                  'ten_nhan_vien'    =>  'required',
                  'path_hinh_anh'     =>  'required',
                  'ngay_sinh'    =>  'required',
                  'gioi_tinh'     =>  'required',
                  'so_cmt'    =>  'required',
                  'sdt'     =>  'required',
                  'dia_chi'    =>  'required',
                  'email'     =>  'required',
                  'chuc_vu'    =>  'required',
                  'ngay_vao'     =>  'required',
                  'kieu_lam'    =>  'required',
                  'so_ngay_nghi'     =>  'required',
                  'luong'    =>  'required',
                  'ghi_chu'     =>  'required',

              ]);
              $info = Info::find($id);
              $info->ten_nhan_vien = $request->get('ten_nhan_vien');
              $info->path_hinh_anh = $request->get('path_hinh_anh');
              $info->ngay_sinh = $request->get('ngay_sinh');
              $info->gioi_tinh = $request->get('gioi_tinh');
              $info->so_cmt = $request->get('so_cmt');
              $info->sdt = $request->get('sdt');
              $info->dia_chi = $request->get('dia_chi');
              $info->email = $request->get('email');
              $info->chuc_vu = $request->get('chuc_vu');
              $info->ngay_vao = $request->get('ngay_vao');
              $info->kieu_lam = $request->get('kieu_lam');
              $info->so_ngay_nghi = $request->get('so_ngay_nghi');
              $info->luong = $request->get('luong');
              $info->ghi_chu = $request->get('ghi_chu');
              $info->save();
              return redirect()->route('info.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $info = Info::find($id);
      $info->delete();
     return redirect()->route('info.index')->with('success', 'Data Deleted');
    }
}
