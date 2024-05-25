<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;
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
    return view('home');
});

// Route::get('/rol',function(){
//     return view('rol.index');
// });
// Route::get('/rol/create',[rolController::class, 'create']);

Route::resource('rol',rolController::class);
