<?php

use App\Models\User;
use App\Models\products;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
})->name('welcome');
Route::get('/login', function () {
    $users = User::all();
    return view('login');
})->name('logincreate');



Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


    // Route::get('/users',[UserController::class,'index'])->name('users.index');
    // Route::post('/users',[UserController::class,'store'])->name('users.store');
    // Route::get('/users/create',[UserController::class,'create'])->name('users.create');
    // Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
    // Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
    // Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
    // Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');


    Route::resource('/users', UserController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/brands', BrandController::class);



    // Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    // Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    // Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    // Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    // Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    // Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    // Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');

});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthManager::class, 'login'])->middleware('guest')->name('login');
    Route::post('/login', [AuthManager::class, 'loginpost'])->name('login.post');
    Route::get('/register', [AuthManager::class, 'register'])->name('register');
    Route::post('/register', [AuthManager::class, 'registerpost'])->name('register.post');
});
