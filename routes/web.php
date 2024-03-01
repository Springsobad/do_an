<?php

use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController; //Tạo đường dẫn
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::middleware(['auth'])->group(function () {

    #Menu

    Route::prefix('admin')->group(function () {
        Route::get('main', [MainController::class, 'index']);
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::prefix('menus')->group(function () {
            Route::get('add ', [MenuController::class, 'create']);
            Route::post('add ', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            //Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::match(['get', 'post'], 'edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });

        #Product    
        Route::prefix('products')->group(function () {
        });
    });
});
