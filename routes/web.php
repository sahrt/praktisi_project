<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\VerifyEmailController;
use App\Models\penguna;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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

Route::get('/login', [GudangController::class,'login'])->name('login');
Route::get('/register', [GudangController::class,'register'])->name('register');
Route::get('/contact', [GudangController::class,'contact'])->name('contact');
Route::get('/help', [GudangController::class,'help'])->name('help');

// untuk proses dalamnya
// saya mengunakan method perfik yang method ini digunakan untuk mengelompokan bila parent link memiliki nilai sama user/register user/login


Route::group(['prefix' => 'user/'], function(){
    Route::post('process-register', [GudangController::class, 'registerProcess'])->name('registerProcess');
    Route::get('register-success/{id}',[GudangController::class, 'registerSuccess'])->name('registerSuccess');
    Route::post('login', [GudangController::class,'loginProsess'])->name('login-process');

});

// Proses Verifikasi email
// Proses Verifikasi email
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])
    ->middleware(['throttle:6,1']) // 6 eksekusi per IP setiap 1 menit
    ->name('verification.verify');

// Resend New Verification Email
Route::get('/email/verification/{id}', function ($id) {
    $user = User::where("id", $id)->first();

    $user->sendEmailVerificationNotification();

    return redirect("user/register-success/$id")->withSuccess("Link berhasil di kirim kan kembali!");
})->middleware(['throttle:6,1'])->name('verification.send');


//route member controller
Route::group(['prefix' => 'user/'], function(){
    Route::get("admin/dashboard", [MemberController::class,'index'])->name('dashboard')->middleware('auth','check-access:1'); // auth -> untuk apakah user sudah login kemudian chek-acces sesuai
    Route::get("admin/logout", [MemberController::class,'logout'])->name('logout');
    Route::get('member/all',[MemberController::class,'getAll'])->name('member')->middleware('auth','check-access:0'); 
    Route::get('view/type',[MemberController::class,'getList'])->name('type'); 
    //dynamic route
    Route::get('member/view/list/{jenis?}/{id?}/{nama?}',[MemberController::class,'getview'])->name('view');
    Route::get('member/view/type/{id?}',[MemberController::class,'getdaftar'])->name('daftar'); 
    Route::get('member/view/contact_me',[MemberController::class,'getContact'])->name('contact-member'); 

});


//route show barang
Route::group(['prefix'=>'user/gudang'], function(){
    Route::get('{type?}',[GudangController::class,'viewPage'])->name('viewPage')->middleware('auth','check-access:1');
   
});



