<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FeaturedProjectContoller;
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
	// Route::get('/logout',[AdminController::class, 'AminLogout'])->name('admin.logout');


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

    Route::group(['prefix'=>'about'], function(){
        Route::get('/index', [AboutController::class, 'index'])->name('about.index');
        Route::get('/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/update/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::get('/destroy/{id}', [AboutController::class, 'destroy'])->name('about.destroy');
        Route::get('/menu-active/{id}', [AboutController::class, 'active'])->name('about.active');
        Route::get('/menu-inactive/{id}', [AboutController::class, 'inactive'])->name('about.in_active');

        Route::get('/company/descriptio/', [AboutController::class, 'descriptio_index'])->name('about.description.index');
        Route::get('/company/descriptio/create', [AboutController::class, 'descriptio_create'])->name('about.description.create');
        Route::post('/company/descriptio/store', [AboutController::class, 'descriptio_store'])->name('about.description.store');
        Route::get('/company/descriptio/edit/{id}', [AboutController::class, 'descriptio_edit'])->name('about.description.edit');
        Route::post('/company/descriptio/update/{id}', [AboutController::class, 'descriptio_update'])->name('about.description.update');
        Route::get('/company/descriptio/destroy/{id}', [AboutController::class, 'descriptio_destroy'])->name('about.description.destroy');
        Route::get('/company/descriptio/menu-active/{id}', [AboutController::class, 'descriptio_active'])->name('about.description.active');
        Route::get('/company/descriptio/menu-inactive/{id}', [AboutController::class, 'descriptio_inactive'])->name('about.description.in_active');

    });

    Route::group(['prefix'=>'project'], function(){

        Route::get('/featured/descriptio/', [FeaturedProjectContoller::class, 'descriptio_index'])->name('project.description.index');
        Route::get('/featured/descriptio/create', [FeaturedProjectContoller::class, 'descriptio_create'])->name('project.description.create');
        Route::post('/featured/descriptio/store', [FeaturedProjectContoller::class, 'descriptio_store'])->name('project.description.store');
        Route::get('/featured/descriptio/edit/{id}', [FeaturedProjectContoller::class, 'descriptio_edit'])->name('project.description.edit');
        Route::post('/featured/descriptio/update/{id}', [FeaturedProjectContoller::class, 'descriptio_update'])->name('project.description.update');
        Route::get('/featured/descriptio/destroy/{id}', [FeaturedProjectContoller::class, 'descriptio_destroy'])->name('project.description.destroy');
        Route::get('/featured/descriptio/menu-active/{id}', [FeaturedProjectContoller::class, 'descriptio_active'])->name('project.description.active');
        Route::get('/featured/descriptio/menu-inactive/{id}', [FeaturedProjectContoller::class, 'descriptio_inactive'])->name('project.description.in_active');
        
        Route::get('/index', [FeaturedProjectContoller::class, 'index'])->name('project.index');
        Route::get('/create', [FeaturedProjectContoller::class, 'create'])->name('project.create');
        Route::post('/store', [FeaturedProjectContoller::class, 'store'])->name('project.store');
        Route::get('/edit/{id}', [FeaturedProjectContoller::class, 'edit'])->name('project.edit');
        Route::post('/update/{id}', [FeaturedProjectContoller::class, 'update'])->name('project.update');
        Route::get('/destroy/{id}', [FeaturedProjectContoller::class, 'destroy'])->name('project.destroy');
        Route::get('/menu-active/{id}', [FeaturedProjectContoller::class, 'active'])->name('project.active');
        Route::get('/menu-inactive/{id}', [FeaturedProjectContoller::class, 'inactive'])->name('project.in_active');
        

    }); 





require __DIR__.'/auth.php';
