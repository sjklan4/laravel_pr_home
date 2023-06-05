<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BladeController extends Controller
{
    function index(){
        $arr = [
            'name' => '박상준'
            ,'gender' => '남자'
            ,'birthday' => '19900606'
            ,'addr' => '구미'
            ,'tel' => '0102212593'
        ];
        return view('blad')->with('data',$arr);
    }


    function write(){
        return view('write');
    }






    function insert(Request $req){
        $date = Carbon::now();
    DB::insert("INSERT INTO hyboardprs(list,Ltitle,Lcontent,created_at,updated_at)
    VALUES(?,?,?,?,?)",[1,$req->Ltitle,$req->Lcontent,$date,$date]);
    
    return redirect()->route('blade.index');
    }


}
