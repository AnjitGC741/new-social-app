<?php
use App\Http\Controllers\first;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[first::class,'forLoginPage']);
Route::get('/dashboard',[first::class,'forDashboard']);
Route::get('/signup',[first::class,'forSignupPage']);
Route::post('/signup',[first::class,'signupUser'])->name('signupUser');
Route::post('/',[first::class,'loginUser'])->name('loginUser');
