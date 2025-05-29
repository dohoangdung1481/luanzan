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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thoikhoabieu', function () {
    return view('thoikhoabieu');
});
Route::get('/xemdiem', function () {
    return view('xemdiem');
});
Route::get('/dangkihocphan', function () {
    return view('dangkihocphan');
});
Route::get('/xemlichthi', function () {
    return view('xemlichthi');
});
Route::get('/hocphi', function () {
    return view('hocphi');
});