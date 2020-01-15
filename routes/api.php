<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/member', function (Request $request) {
    return $request->member();
});
    
Route::post('v1/user/create', 'MemberController@store'); //註冊
// Route::post('admin', 'MemberController@adminstore');
Route::post('v1/user/login', 'LoginController@login'); //登入


// Route::middleware('auth:api')->get('member', 'MemberController@index');  //查看
Route::middleware('auth:api')->put('v1/user/pwd/change', 'MemberController@update'); //編輯
Route::middleware('auth:api')->delete('member/{members}', 'MemberController@destroy'); //刪除
Route::middleware('auth:api')->get('logout', 'LogoutController@logout'); //登出




