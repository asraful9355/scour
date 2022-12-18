<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Frontend\FrontendController;


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
Route::get('/',[FrontendController::class, 'index']);

// User Dashboard
Route::middleware(['auth'])->group(function() {

    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');

});

/// Admin Dashboard
Route::middleware(['auth','role:admin'])->group(function() {

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');

});

/* =============== Admin Login ============== */
// Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);

/* =============== Admin All Route ============== */
Route::middleware(['auth','role:admin'])->group(function() {

}); // Admin End Middleware

/*================== Backend Admin All Routes ==============*/
// Route::group(['middleware'=>['auth:sanctum', 'verified']], function(){
// 	Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
// 	Route::get('/logout',[AdminController::class, 'AminLogout'])->name('admin.logout');


//     Route::prefix('profile')->group(function(){
//         Route::get('/index', [UserController::class, 'index'])->name('my.profile');
//         Route::post('/update/{id}',[UserController::class,'updateProfile'])->name('update.profile');
//         Route::get('/password/change',[UserController::class,'ChangePassword'])->name('password.change');
//         Route::post('user/password/update',[UserController::class,'UserPasswordUpdate'])->name('user.password.update');

//     });
    // Route::group(['prefix'=>'category'], function(){
    //     Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
    //     Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    //     Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    //     Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    //     Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    //     Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    //     Route::get('/category-active/{id}', [CategoryController::class, 'active'])->name('category.active');
    //     Route::get('/category-inactive/{id}', [CategoryController::class, 'inactive'])->name('category.in_active');

    // });
    Route::group(['prefix'=>'menu'], function(){
        Route::get('/index', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/create', [MenuController::class, 'create'])->name('menu.create');
        Route::post('/store', [MenuController::class, 'store'])->name('menu.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::get('/destroy/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
        Route::get('/menu-active/{id}', [MenuController::class, 'active'])->name('menu.active');
        Route::get('/menu-inactive/{id}', [MenuController::class, 'inactive'])->name('menu.in_active');

    });



// });

// Route::get('/dashboard', function () {
//     return index('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
