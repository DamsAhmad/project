<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardHunianController;
use App\Http\Controllers\DashboardTransaksiController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\RentWebControler;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiMainController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/db', [HaloController::class, 'index']);

require __DIR__ . '/auth.php';

// Route::resource('dashboard', DashboardController::class);

Route::resource('dashboard', DashboardController::class);

// Route Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate'])->middleware('auth');
Route::post('/login', [LoginController::class, 'authenticate'])->name('/login');
// Route::post('/login', ['as' => '/login', 'uses' => 'LoginController@authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    //Route Dashboard
    Route::get('/dashboard/hunian/index', [DashboardHunianController::class, 'index']);
    Route::get('/dashboard/hunian/create', [DashboardHunianController::class, 'create']);
    Route::post('/dashboard/hunian/store', [DashboardHunianController::class, 'store']);
    Route::get('/dashboard/hunian/edit/{id}', [DashboardHunianController::class, 'edit']);
    Route::put('/dashboard/hunian/update/{id}', [DashboardHunianController::class, 'update']);
    Route::delete('/dashboard/hunian/delete/{id}', [DashboardHunianController::class, 'destroy']);
});
//Route Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route User
Route::resource('/dashboard/hunian/user', DashboardUserController::class);
Route::resource('/dashboard/hunian/user/{id}/edit', DashboardUserController::class);

//Route Transaksi
Route::resource('/dashboard/hunian/transaksi ', DashboardTransaksiController::class);

//Route Website Utama
Route::resource('/', RentController::class);
Route::resource('/store', RentController::class);


Route::resource('/transaksi', TransaksiMainController::class);
Route::resource('/transaksi/store', TransaksiMainController::class);


// Route::get('/hunian/{id}', function () {
//     // fungsi nampilin UI nyewa
//     return 'OK';
// })->middleware(Authenticate::class);

//Route Detail Web
Route::resource('/detail/{id}', DetailController::class);
