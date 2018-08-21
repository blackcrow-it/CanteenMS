<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductInput;
use App\ProductInformation;
class ProductManage extends Controller
{
    public function index()
    {
        return view('productAdd');
    }
    // public function index()
    // {
    //     return view('productManage');
    // }

    public function show()
    {
    	$data = DB::table('product_infomation')->paginate(40);
        $data->setPath("");
    	return view('productManage',['data'=>$data]);
    }

    public function create(Request $req)
    {
    	$name = $req->name;
    	$producer = $req->producer;
    	$quantity = $req->quantity;
    	$unit = $req->unit;
    	$price = $req->price;
    	$date = $req->date;
    	$note = $req->note;
    	$alias = str_slug($name.'-'.$producer);
		

    	$data = DB::table('product_infomation')
    	->insert([
    		'ten_san_pham' => $name,
    		'ten_nha_san_xuat' => $producer,
    		'ten_alias' => $alias,
    		'don_gia' => $price,
    		'don_vi' => $unit,
    		'so_luong' => $quantity,
    		'ghi_chu' => $note,
    	]);

    	$data = DB::table('product_input')
    	->insert([
    		'ten_san_pham' => $name,
    		'ten_alias' => $alias,
    		'so_luong_nhap' => $quantity,
    		'ngay_nhap' => $date,
    		'ghi_chu' => $note,
    	]);
    return redirect('/admin/danh-sach-san-pham');
    }

    public function getEdit($id){
    	$product = DB::table('product_infomation')
    				->join('product_input','product_input.stt','=','product_infomation.ma_san_pham')
    	->where('ma_san_pham',$id)->first();
    	return view('productEdit',['data'=>$product]);
    }

    public function doEdit(Request $request){
    	$id = $request->id;
    	$name = $request->name;
    	// die($name);
    	$producer = $request->producer;
    	$quantity = $request->quantity;
    	$unit = $request->unit;
    	$price = $request->price;
    	$date = $request->date;
    	$note = $request->note;

    	$product = ProductInformation::where('ma_san_pham',$id)->first();
    	$product->ten_san_pham=$name;
    	$product->ten_nha_san_xuat=$producer;
    	$product->don_gia=$price;
    	$product->so_luong=$quantity;
    	$product->ghi_chu=$note;
    	$product->don_vi=$unit;
    	$product->save();

    	$product1 = ProductInput::where('stt',$id)->first();
    	if (!is_null($product1) ) {
    		$product1->ten_san_pham=$name;
	    	$product1->ngay_nhap=$date;
	    	$product1->so_luong_nhap=$quantity;
	    	$product1->ghi_chu=$note;
	    	$product1->save();
    	}
		

    	return redirect('/admin/danh-sach-san-pham');
    }

    public function doDelete($id){
    	$product = DB::table('product_infomation')
    	->where('ma_san_pham',$id)->delete();
    	$product_id =DB::table('product_input')
    	->where('stt',$id)->delete();
    }
}
