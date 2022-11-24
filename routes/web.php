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

Route::get('/',[first::class,'forLoginPage'])->name('logout1');
Route::get('/dashboard',[first::class,'forDashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/signup',[first::class,'forSignupPage']);
Route::post('/signup',[first::class,'signupUser'])->name('signupUser1');
Route::post('/',[first::class,'loginUser'])->name('loginUser');
Route::get('/logout',[first::class,'logout'])->name('logout');
