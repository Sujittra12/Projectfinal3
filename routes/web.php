<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\EnsureTokenIsValid;




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

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [LoginController::class, 'index']);

Route::get('/login/home', [LoginController::class,'check'])->name('login.check');

// Route::get('/profile',function(){
// })->middleware(EnsureTokenIsValid::class);

// Route::get('/profile',function(){
// })->middleware('auth'::class);

// Route::get('/',function(){
// })->middleware('login');
// //group
// Route::middleware([
//     'auth:sanctum',
//     config('jutstream.auth_session'),
//     'verified'
// ])->group(function(){
//       Route::get('/login',function(){return view('login');})->name('login');

// });



