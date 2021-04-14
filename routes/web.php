<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioAuthController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/',[UsuarioAuthController::class, 'login']);
Route::get('/registro',[UsuarioAuthController::class,'cadastro']);
Route::post('/registrar',[UsuarioAuthController::class,'registro']);
Route::post('/logando',[UsuarioAuthController::class,'checage'])->name('auth.checage');
Route::post('/admin',[UsuarioAuthController::class,'perfilAdmin']);
