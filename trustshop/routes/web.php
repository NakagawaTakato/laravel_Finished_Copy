<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OwnerController;

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


Route::get('/', [UsersController::class, 'index'])->name('root');
Route::middleware('auth')->group(function () {
    // 一般ユーザールート
    Route::get('/mypage', [UsersController::class, 'mypage'])->name('mypage');
    Route::post('/mypage', [UsersController::class, 'mypage'])->name('mypage');
    Route::post('/thanks', [UsersController::class, 'thanks'])->name('thanks');

    Route::get('/profile', [OwnerController::class, 'profile'])->name('profile');
    Route::post('/profile', [OwnerController::class, 'profile'])->name('profile');

    Route::patch('/profile/profile_thanks', [OwnerController::class, 'profile_thanks'])->name('profile.profile_thanks');

});

Route::middleware(['auth', 'checkOwner'])->group(function () {
    // オーナー専用ルート
    Route::get('/shop_edit', [OwnerController::class, 'shop_edit'])->name('shop_edit');
    Route::post('/shop_edit', [OwnerController::class, 'shop_edit'])->name('shop_edit');


    Route::get('/shop_edit/ShopName_registration', [OwnerController::class, 'ShopName_registration'])->name('ShopName_registration');
    Route::post('/shop_edit/ShopName_registration', [OwnerController::class, 'ShopName_registration'])->name('ShopName_registration');

    Route::get('/shop_edit/ShopName_edit', [OwnerController::class, 'ShopName_edit'])->name('ShopName_edit');
    Route::post('/shop_edit/ShopName_edit', [OwnerController::class, 'ShopName_edit'])->name('ShopName_edit');
    
    Route::post('/shop_edit/ShopName_registration/ShopName_registration_thanks', [OwnerController::class, 'ShopName_registration_thanks'])->name('ShopName_registration_thanks');
    Route::post('/shop_edit/ShopName_edit/ShopName_edit_thanks', [OwnerController::class, 'ShopName_edit_thanks'])->name('ShopName_edit_thanks');

    Route::post('/shop_edit/edit', [OwnerController::class, 'store'])->name('edit');
    Route::patch('/shop_edit/update', [OwnerController::class, 'update'])->name('update');
    Route::delete('/shop_edit/delete', [OwnerController::class, 'destroy'])->name('delete');

    Route::post('/favorite_merchandise', [OwnerController::class, 'favorite_merchandise'])->name('favorite_merchandise');
    Route::post('/csv-export', [OwnerController::class, 'exportCsv'])->name('csv.export');

    Route::post('/merchandise_detail', [OwnerController::class, 'merchandise_detail'])->name('merchandise_detail');

    Route::get('/merchandise_edit', [OwnerController::class, 'merchandise_edit'])->name('merchandise_edit');
    Route::post('/merchandise_edit', [OwnerController::class, 'merchandise_edit'])->name('merchandise_edit');
    Route::delete('/merchandise_edit/cancel', [OwnerController::class, 'cancel'])->name('cancel');

    Route::get('/merchandise_registration', [OwnerController::class, 'merchandise_registration'])->name('merchandise_registration');
    Route::post('/merchandise_registration', [OwnerController::class, 'merchandise_registration'])->name('merchandise_registration');

    Route::get('/merchandise_redact', [OwnerController::class, 'merchandise_redact'])->name('merchandise_redact');
    Route::post('/merchandise_redact', [OwnerController::class, 'merchandise_redact'])->name('merchandise_redact');

    Route::post('/merchandise_thanks', [OwnerController::class, 'merchandise_thanks'])->name('merchandise_thanks');

    Route::post('/merchandise_edit_thanks', [OwnerController::class, 'merchandise_edit_thanks'])->name('merchandise_edit_thanks');
    
});

require __DIR__ . '/auth.php';
