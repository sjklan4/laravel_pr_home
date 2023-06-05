<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BladeController extends Controller
{
    function index(){
        $result = DB::select('select * from hyboardprs');
        return view('blad')->with('data',$result);
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
