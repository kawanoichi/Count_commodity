<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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

Route::get('/', function () {
    // welcom.blade.phpのファイル(HTMLのソースコード)を返す
    return view('welcome');
});

// Route::get('hello', function () {
//     // view('フォルダ名 . ファイル名')
//     return view('hello.index');
// });

// Route::get('表示するURL', [クラス名::class, '関数名']);
// Route::get('/hello/{id?}', [HelloController::class, 'index']);
// Route::post('/hello/{id?}', [HelloController::class, 'post']);
Route::get('/hello', [HelloController::class, 'index']);
