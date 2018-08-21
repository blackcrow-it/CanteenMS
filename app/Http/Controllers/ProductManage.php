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
    	$note = $req->note;
        $date    = new \DateTime();
        $my_date = $date->format('Y-m-d H:i:s');
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
    		'ngay_nhap' => $my_date,
    		'ghi_chu' => $note,
    	]);
    return redirect('/admin/danh-sach-san-pham');
    }

    public function getEdit($alias){
    	$product = DB::table('product_infomation')
    	->where('ten_alias',$alias)->first();
        $product_input = DB::table('product_input')
        ->where('ten_alias',$alias)->first();
    	return view('productEdit',['data'=>$product, 'data_input'=>$product_input]);
    }

    public function doEdit(Request $request){
    	$alias = $request->alias;
    	$name = $request->name;
    	$producer = $request->producer;
        $quantity_update = $request->quantity_update;
    	$quantity = $request->quantity + $quantity_update;
    	$unit = $request->unit;
    	$price = $request->price;
    	$date = $request->date;
    	$note = $request->note;
        $date    = new \DateTime();
        $my_date = $date->format('Y-m-d H:i:s');
        $alias_edit = str_slug($name.'-'.$producer);

        $product = DB::table('product_infomation')
        ->where('ten_alias', $alias)
        ->update([
            'ten_san_pham' => $name,
            'ten_nha_san_xuat' => $producer,
            'ten_alias' => $alias_edit,
            'don_gia' => $price,
            'don_vi' => $unit,
            'so_luong' => $quantity,
            'ghi_chu' => $note,
        ]);

        $product_input = DB::table('product_input')
        ->where('ten_alias', $alias)
        ->insert([
            'ten_san_pham' => $name,
            'ten_alias' => $alias_edit,
            'so_luong_nhap' => $quantity_update,
            'ghi_chu' => $note,
            'ngay_nhap' => $my_date
        ]);

    	// $product = ProductInformation::where('ten_alias',$alias)->first();
    	// $product->ten_san_pham=$name;
    	// $product->ten_nha_san_xuat=$producer;
    	// $product->don_gia=$price;
    	// $product->so_luong=$quantity;
    	// $product->ghi_chu=$note;
    	// $product->don_vi=$unit;
     //    $product->ten_alias=$alias_edit;
    	// $product->save();

    	// $product1 = ProductInput::where('ten_alias',$alias)->first();
    	// if (!is_null($product1) ) {
    	// 	$product1->ten_san_pham=$name;
	    // 	$product1->ngay_nhap=$my_date;
     //        $product1->ten_alias=$alias_edit;
	    // 	$product1->so_luong_nhap=$quantity;
	    // 	$product1->ghi_chu=$note;
	    // 	$product1->save();
    	// }
		

    	return redirect('/admin/danh-sach-san-pham');
    }

    public function doDelete($alias){
    	$product = DB::table('product_infomation')
    	->where('ten_alias',$alias)->delete();
    	$product_alias =DB::table('product_input')
    	->where('ten_alias',$alias)->delete();
    }
}
