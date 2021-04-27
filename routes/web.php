<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateSCcode;

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
//


Route::get('/', function () {
    return view('CodeForm');
});
//Route::post('/generator', function () {
//    return view('CodeForm');
//});



Route::post('/generator', [GenerateSCcode::class,'ReceiveDataForm']);




////Route::get('/' , [GenerateSCcode::class , 'generateCodes']);
//
//Route::get('/CodeGenerator' , 'GenerateSCcode@ReceiveDataForm');
//
//
////TEST
//
//Route::get('/CodeGenerator', function (Request $request){
//    //
//});





//Route::get('test', function(){
//    return view('test', [
//        'testVariable' => 'testString'
//    ]);
//});