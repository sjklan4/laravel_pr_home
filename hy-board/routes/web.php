<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test1',function(){
    return '실험1 : route의 단순url지정 방법 실험';
});

Route::get('/test2',function(){
    return view('prview');
});



// 아래 구문에서 with을 이용한 체이닝시 with('view 에서 불러오기 위한 이름','표시할 내용 또는 값')의 순서로 작성후 
// view에서는 주소식으로 부르기 위해서 {{'라우트에서 지정한 이름'}} 을 작성해서 사용한다. 
Route::get('/test3',function(){
    return view('prview')->with('name','with실험용:with체이닝 실험중');
});


use \App\Http\Controllers\TestController;
Route::resource('/testcn1', TestController::class);

Route::get('/method', function () {
    return 'GET Method!!';
});

Route::get('/query', function(Request $request){
    return $request->id.", ".$request->name.",".$request->title;
});

Route::get('/segment2/{id?}', function($id = 'base'){
    return 'segment2 ID : '.$id;
});