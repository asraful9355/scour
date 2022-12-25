<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\FeaturedProjectContoller;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TeamController;
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

    Route::group(['prefix'=>'banner'], function(){
        Route::get('/index', [BannerController::class, 'index'])->name('banner.index');
        Route::get('/create', [BannerController::class, 'create'])->name('banner.create');
        Route::post('/store', [BannerController::class, 'store'])->name('banner.store');
        Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
        Route::post('/update/{id}', [BannerController::class, 'update'])->name('banner.update');
        Route::get('/destroy/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
        Route::get('/banner-active/{id}', [BannerController::class, 'active'])->name('banner.active');
        Route::get('/banner-inactive/{id}', [BannerController::class, 'inactive'])->name('banner.in_active');

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

        // ==== Description=========
        Route::get('/company/description/', [AboutController::class, 'description_index'])->name('about.description.index');
        Route::get('/company/description/create', [AboutController::class, 'description_create'])->name('about.description.create');
        Route::post('/company/description/store', [AboutController::class, 'description_store'])->name('about.description.store');
        Route::get('/company/description/edit/{id}', [AboutController::class, 'description_edit'])->name('about.description.edit');
        Route::post('/company/description/update/{id}', [AboutController::class, 'description_update'])->name('about.description.update');
        Route::get('/company/description/destroy/{id}', [AboutController::class, 'description_destroy'])->name('about.description.destroy');
        Route::get('/company/description/menu-active/{id}', [AboutController::class, 'description_active'])->name('about.description.active');
        Route::get('/company/description/menu-inactive/{id}', [AboutController::class, 'description_inactive'])->name('about.description.in_active');

    });

    Route::group(['prefix'=>'project'], function(){

        // ==== Description=========
        Route::get('/featured/description/', [FeaturedProjectContoller::class, 'description_index'])->name('project.description.index');
        Route::get('/featured/description/create', [FeaturedProjectContoller::class, 'description_create'])->name('project.description.create');
        Route::post('/featured/description/store', [FeaturedProjectContoller::class, 'description_store'])->name('project.description.store');
        Route::get('/featured/description/edit/{id}', [FeaturedProjectContoller::class, 'description_edit'])->name('project.description.edit');
        Route::post('/featured/description/update/{id}', [FeaturedProjectContoller::class, 'description_update'])->name('project.description.update');
        Route::get('/featured/description/destroy/{id}', [FeaturedProjectContoller::class, 'description_destroy'])->name('project.description.destroy');
        Route::get('/featured/description/menu-active/{id}', [FeaturedProjectContoller::class, 'description_active'])->name('project.description.active');
        Route::get('/featured/description/menu-inactive/{id}', [FeaturedProjectContoller::class, 'description_inactive'])->name('project.description.in_active');
        
        Route::get('/index', [FeaturedProjectContoller::class, 'index'])->name('project.index');
        Route::get('/create', [FeaturedProjectContoller::class, 'create'])->name('project.create');
        Route::post('/store', [FeaturedProjectContoller::class, 'store'])->name('project.store');
        Route::get('/edit/{id}', [FeaturedProjectContoller::class, 'edit'])->name('project.edit');
        Route::post('/update/{id}', [FeaturedProjectContoller::class, 'update'])->name('project.update');
        Route::get('/destroy/{id}', [FeaturedProjectContoller::class, 'destroy'])->name('project.destroy');
        Route::get('/menu-active/{id}', [FeaturedProjectContoller::class, 'active'])->name('project.active');
        Route::get('/menu-inactive/{id}', [FeaturedProjectContoller::class, 'inactive'])->name('project.in_active');
        

    }); 
    
    Route::group(['prefix'=>'services'], function(){
        Route::get('/index', [ServiceController::class, 'index'])->name('services.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('services.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit');
        Route::post('/update/{id}', [ServiceController::class, 'update'])->name('services.update');
        Route::get('/destroy/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
        Route::get('/menu-active/{id}', [ServiceController::class, 'active'])->name('services.active');
        Route::get('/menu-inactive/{id}', [ServiceController::class, 'inactive'])->name('services.in_active');

        // ==== Description=========
        Route::get('/description/', [ServiceController::class, 'description_index'])->name('services.description.index');
        Route::get('/description/create', [ServiceController::class, 'description_create'])->name('services.description.create');
        Route::post('/description/store', [ServiceController::class, 'description_store'])->name('services.description.store');
        Route::get('/description/edit/{id}', [ServiceController::class, 'description_edit'])->name('services.description.edit');
        Route::post('/description/update/{id}', [ServiceController::class, 'description_update'])->name('services.description.update');
        Route::get('/description/destroy/{id}', [ServiceController::class, 'description_destroy'])->name('services.description.destroy');
        Route::get('/description/menu-active/{id}', [ServiceController::class, 'description_active'])->name('services.description.active');
        Route::get('/description/menu-inactive/{id}', [ServiceController::class, 'description_inactive'])->name('services.description.in_active');

    });
    
    Route::group(['prefix'=>'team'], function(){
        Route::get('/index', [TeamController::class, 'index'])->name('team.index');
        Route::get('/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/store', [TeamController::class, 'store'])->name('team.store');
        Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
        Route::post('/update/{id}', [TeamController::class, 'update'])->name('team.update');
        Route::get('/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
        Route::get('/menu-active/{id}', [TeamController::class, 'active'])->name('team.active');
        Route::get('/menu-inactive/{id}', [TeamController::class, 'inactive'])->name('team.in_active');

        // ==== Description=========
        Route::get('/description/', [TeamController::class, 'description_index'])->name('team.description.index');
        Route::get('/description/create', [TeamController::class, 'description_create'])->name('team.description.create');
        Route::post('/description/store', [TeamController::class, 'description_store'])->name('team.description.store');
        Route::get('/description/edit/{id}', [TeamController::class, 'description_edit'])->name('team.description.edit');
        Route::post('/description/update/{id}', [TeamController::class, 'description_update'])->name('team.description.update');
        Route::get('/description/destroy/{id}', [TeamController::class, 'description_destroy'])->name('team.description.destroy');
        Route::get('/description/menu-active/{id}', [TeamController::class, 'description_active'])->name('team.description.active');
        Route::get('/description/menu-inactive/{id}', [TeamController::class, 'description_inactive'])->name('team.description.in_active');

    });
    
    Route::group(['prefix'=>'client'], function(){
        Route::get('/index', [ClientController::class, 'index'])->name('client.index');
        Route::get('/create', [ClientController::class, 'create'])->name('client.create');
        Route::post('/store', [ClientController::class, 'store'])->name('client.store');
        Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
        Route::post('/update/{id}', [ClientController::class, 'update'])->name('client.update');
        Route::get('/destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
        Route::get('/menu-active/{id}', [ClientController::class, 'active'])->name('client.active');
        Route::get('/menu-inactive/{id}', [ClientController::class, 'inactive'])->name('client.in_active');

        // ==== Description=========
        Route::get('/description/', [ClientController::class, 'description_index'])->name('client.description.index');
        Route::get('/description/create', [ClientController::class, 'description_create'])->name('client.description.create');
        Route::post('/description/store', [ClientController::class, 'description_store'])->name('client.description.store');
        Route::get('/description/edit/{id}', [ClientController::class, 'description_edit'])->name('client.description.edit');
        Route::post('/description/update/{id}', [ClientController::class, 'description_update'])->name('client.description.update');
        Route::get('/description/destroy/{id}', [ClientController::class, 'description_destroy'])->name('client.description.destroy');
        Route::get('/description/menu-active/{id}', [ClientController::class, 'description_active'])->name('client.description.active');
        Route::get('/description/menu-inactive/{id}', [ClientController::class, 'description_inactive'])->name('client.description.in_active');

    });


    Route::group(['prefix'=>'contact'], function(){
        Route::get('/index', [ContactController::class, 'index'])->name('contact.index');
        Route::post('/update', [ContactController::class, 'update'])->name('update.contact');
    });
    Route::group(['prefix'=>'setting'], function(){
        Route::get('/index', [SettingController::class, 'index'])->name('setting.index');
        Route::post('/update/{id}', [SettingController::class, 'update'])->name('update.setting');
    });





require __DIR__.'/auth.php';
