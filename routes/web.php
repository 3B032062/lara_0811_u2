<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*設定Route 回傳 view
Route::get('/', function () {
    return view('welcome');
});
*/
/*設定Route 回傳 字串
Route::get('/', function () {
    return 'welcome';
});
*/

/*設定Route 跳轉Route
Route::get('r1', function () {
    return redirect('r2');
});

Route::get('r2', function () {
    return view('welcome');
});
*/
/*修改Route接收參數
Route::get('hello/{name}', function ($name) {
    return 'Hello, '.$name;
});
*/
/*修改參數成選擇性
Route::get('hello/{name}', function ($name='Everybody') {
    return 'Hello, '.$name;
}) -> name('hello.index');
*/
/*
Route::get('dashboard', function () {
    return 'dashboard';
}) ;

Route::group(['prefix'=> 'admin'],function () {
    Route::get('dashboard',function (){
        return 'dashboard';
    });
}) ;
*/
//Route::get('hello'[HomeController::class],'index'>name('home.index'));

/*
Route::get('home', function () {
    return view('home.index');
});
*/

use App\Http\Controllers\HelloController;
Route::get('home/{name?}',[HelloController::class,'index'])->name('hello.index');





