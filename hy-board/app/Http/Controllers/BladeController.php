<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
