<?php

use App\Models\User;
use App\Models\products;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/users', UserController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/permissions', PermissionController::class);
