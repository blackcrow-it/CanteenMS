<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BillModel;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('product_infomation')->get();
        return view('bill')->with([
            'data' => $data,
            'index' => 1,
            'total' => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $name = $req->name;
        $producer = $req->producer;
        $price = $req->price;
        $unit = $req->unit;
        $quantity = $req->quantity;
        $amount = $req->amount;
        $count = count($name);
        $alias = $req->alias;
        $id_bill = $req->bill;
        $total_products = $req->products;
        $date = new \DateTime();
        $my_date = $date->format('Y-m-d H:i:s');
        $total = $req->total;

        $data = DB::table('bill_infomation')->insert([
            'ma_hoa_don' => $id_bill,
            'so_loai_san_pham' => $total_products,
            'ngay_ban' => $my_date,
            'tong_tien' => $total
        ]);

        for ($i=0; $i < $count ; $i++) { 
            $billModel = new BillModel();
            $billModel->ten_san_pham = $name[$i];
            $billModel->ten_nha_san_xuat = $producer[$i];
            $billModel->ten_alias = $alias[$i];
            $billModel->don_gia = $price[$i];
            $billModel->don_vi = $unit[$i];
            $billModel->so_luong_xuat = $quantity[$i];
            $billModel->thanh_tien = $amount[$i];
            $billModel->ma_hoa_don = $id_bill;
            $billModel->save();

            $editQuantity = DB::table('product_infomation')
            ->where('ten_alias', '=', $alias[$i])
            ->first();
            // $convertQuantity = ;

            // $subQuantity = (int)$convertQuantity - (int);

            $editedQuantity = DB::table('product_infomation')
            ->where('ten_alias', '=', $alias[$i])
            ->update(['so_luong' => $editQuantity->so_luong - $quantity[$i]]);
        }


        return redirect('/admin/phieu-mua-hang');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('product_output')
        ->where('ma_hoa_don', '=', $id)
        ->get();

        $bill = DB::table('bill_infomation')
        ->where('ma_hoa_don', '=', $id)
        ->first();

        return view('show_bill')->with([
            'index' => 1,
            'data' => $data,
            'bill' => $bill
        ]);
    }


    public function list()
    {
        $data = DB::table('bill_infomation')
        ->get();
        return view('list_bill')->with([
            'index' => 1,
            'data' => $data,
            'route_name' => 'listBill'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
