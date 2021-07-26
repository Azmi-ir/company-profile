<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'index']);

//Route lihat layanan
Route::get('/lihat-layanan/{layanan}', [FrontendController::class, 'lihatLayanan']);
//Route lihat portofolio
Route::get('/lihat-portofolio/{portofolio}', [FrontendController::class, 'lihatPortofolio']);
//Route lihat berita
Route::get('/lihat-berita/{berita}', [FrontendController::class, 'lihatBerita']);

Route::post('/kirim-pesan', [PesanController::class, 'kirimPesan']);


//Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);

//Route Halaman Khusus Admin
Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard.dashboard');
    });

    //Route CRUD profil instansi
    Route::get('/admin/profil-instansi', ([ProfilController::class, 'profil']));
    Route::post('/admin/update-profil/{profil}', ([ProfilController::class, 'updateProfil']));
    //Route crud layanan
    Route::resource('/admin/layanan', LayananController::class);
    //Route crud portofolio
    Route::resource('/admin/portofolio', PortofolioController::class);
    //Route crud testimoni
    Route::resource('/admin/testimoni', TestimoniController::class);
    //Route crud staff
    Route::resource('/admin/staff', StaffController::class);
    //Route crud berita
    Route::resource('/admin/berita', BeritaController::class);
    //edit profil user
    Route::get('/admin/user/{user}/edit', [AuthController::class, 'edit']);
    Route::patch('/admin/user/update', [AuthController::class, 'update']);
    Route::get('/admin/user/editpassword', [AuthController::class, 'passwordEdit']);
    Route::patch('/admin/user/updatepassword', [AuthController::class, 'passwordUpdate']);
    Route::get('/admin/list-user', [AuthController::class, 'list_user']);
    //pesan masuk
    Route::get('/admin/pesan-masuk', [PesanController::class, 'index']);
    Route::get('/admin/lihat-pesan/{detail_pesan}', [PesanController::class, 'lihatPesan']);
    Route::get('/admin/balas-pesan/{detail_pesan}', [PesanController::class, 'balasPesan']);
    Route::get('/admin/kirim-balasan/{detail_pesan}', [PesanController::class, 'kirimBalasan']);
    Route::delete('/admin/hapus-pesan/{detail_pesan}', [PesanController::class, 'destroy']);
    Route::post('/admin/ubah-pesan/{detail_pesan}', [PesanController::class, 'update']);
    //register
    Route::get('/admin/register', [AuthController::class, 'register']);
    Route::post('/postregister', [AuthController::class, 'postregister']);
    //hapus akun
    Route::delete('/admin/hapus/{user}', [AuthController::class, 'destroy']);
    //logout
    Route::get('/logout', [AuthController::class, 'logout']);



    //Route CKEDITOR
    Route::post('/admin/layanan/create', [layananController::class, 'ckeditor'])->name('ckeditor.image-upload');
});
