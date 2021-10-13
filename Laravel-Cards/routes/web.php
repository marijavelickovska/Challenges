<?php

use App\Http\Controllers\BrainsterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

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
//     return view('welcome');
// });

Route::get('/', [BrainsterController::class, 'index'])->name('brainster.index');
Route::get('/admin/add_project', [BrainsterController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [BrainsterController::class, 'store'])->name('admin.store');
Route::get('/admin/edit_project', [BrainsterController::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}', [BrainsterController::class, 'update'])->name('admin.update');
Route::delete('/admin/destroy/{id}', [BrainsterController::class, 'destroy'])->name('admin.destroy');

Route::get('/admin', [LoginController::class, 'login_form'])->name('admin.login_form');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');

Route::post('/brainster/companyInfo', [BrainsterController::class, 'company'])->name('brainster.companyInfo');
Route::get('/send-mail', [BrainsterController::class, 'sendMail'])->name('send-mail');
