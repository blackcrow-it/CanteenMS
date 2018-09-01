<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    public function show()
    {
        $date    = new \DateTime();
        $my_date = $date->format('Y-m-d');
        $my_month = $date->format('Y-m');
        $week = $date->format('W');
        $month = $date->format('m');
        $year = $date->format('Y');
        $date1 = date( "Y-m-d", strtotime($year."W".$week."1") ); 
        $date2 = date( "Y-m-d", strtotime($year."W".$week."2") );
        $date3 = date( "Y-m-d", strtotime($year."W".$week."3") ); 
        $date4 = date( "Y-m-d", strtotime($year."W".$week."4") );
        $date5 = date( "Y-m-d", strtotime($year."W".$week."5") ); 
        $date6 = date( "Y-m-d", strtotime($year."W".$week."6") );  
        $date7 = date( "Y-m-d", strtotime($year."W".$week."7") );

        
        
        $sumForDay = DB::table('product_output')
        ->select(DB::raw('sum(so_luong_xuat) as tong_so_luong_xuat, ten_san_pham, ten_nha_san_xuat'))
        ->where('created_at', 'like', $my_date.'%')
        ->groupBy('ten_san_pham', 'ten_nha_san_xuat')
        ->get();
        $sumForMonth = DB::table('product_output')
        ->select(DB::raw('sum(so_luong_xuat) as tong_so_luong_xuat, ten_san_pham, ten_nha_san_xuat'))
        ->where('created_at', 'like', $my_month.'%')
        ->groupBy('ten_san_pham', 'ten_nha_san_xuat')
        ->get();
        $sumForYear = DB::table('product_output')
        ->select(DB::raw('sum(so_luong_xuat) as tong_so_luong_xuat, ten_san_pham, ten_nha_san_xuat'))
        ->where('created_at', 'like', $year.'%')
        ->groupBy('ten_san_pham', 'ten_nha_san_xuat')
        ->get();
        $sumForWeek = DB::table('product_output')
        ->select(DB::raw('sum(so_luong_xuat) as tong_so_luong_xuat, ten_san_pham, ten_nha_san_xuat'))
        ->where('created_at', 'like', $date1.'%')
        ->orWhere('created_at', 'like', $date2.'%')
        ->orWhere('created_at', 'like', $date3.'%')
        ->orWhere('created_at', 'like', $date4.'%')
        ->orWhere('created_at', 'like', $date5.'%')
        ->orWhere('created_at', 'like', $date6.'%')
        ->orWhere('created_at', 'like', $date7.'%')
        ->groupBy('ten_san_pham', 'ten_nha_san_xuat')
        ->get();
        return view('chart')->with([
            'sumForDay' => $sumForDay,
            'sumForWeek' => $sumForWeek,
            'sumForMonth' => $sumForMonth,
            'sumforYear' => $sumForYear
        ]);
    }
}
