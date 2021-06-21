<?php

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
//frontend routs
Route::get('/', [App\Http\Controllers\Frontend\MainController::class, 'main']);
Route::get('/backend',[App\Http\Controllers\Frontend\IndexController::class,'index']);
Route::get('/design',[App\Http\Controllers\Frontend\MainController::class,'design']);
Route::get('/event-planing',[App\Http\Controllers\Frontend\MainController::class,'eventPlaning']);
Route::get('/gallery',[App\Http\Controllers\Frontend\MainController::class,'gallery']);
Route::get('/clients',[App\Http\Controllers\Frontend\MainController::class,'clients']);
Route::get('/press',[App\Http\Controllers\Frontend\MainController::class,'press']);
Route::get('/contact',[App\Http\Controllers\Frontend\MainController::class,'contact']);
Route::get('/about',[App\Http\Controllers\Frontend\MainController::class,'about']);
Route::get('/village/{slag}',[App\Http\Controllers\Frontend\MainController::class,'village'])->name('village');
Route::get('/menu',[App\Http\Controllers\Frontend\MainController::class,'menu']);
Route::get('/partnior',[App\Http\Controllers\Frontend\MainController::class,'partnior']);







//Auth::routes();


// routs
Route::prefix('/backend')->group(function () {
   // Route::get('', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('/main', [App\Http\Controllers\Backend\MainController::class, 'index'])->name('main');
Route::get('/users', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('users');
Route::get('/edit-user/{id}', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('/edit-user');
    Route::resource('/users', App\Http\Controllers\Backend\UserController::class);
    Route::get('/users/editpass/{id}', [App\Http\Controllers\Backend\UserController::class, 'editPass'])->name('editpass');
    Route::post('/users/changepass', [App\Http\Controllers\Backend\UserController::class, 'changePass'])->name('changepass');
//Route::delete('/delete.user/{id}', [App\Http\Controllers\Backend\UserController::class, 'delete']);


    Route::resource('/menus', App\Http\Controllers\Backend\MenuController::class);
    Route::resource('/pages', App\Http\Controllers\Backend\PageController::class);
    Route::resource('/partnior', App\Http\Controllers\Backend\PartniorController::class);
    Route::resource('/social', App\Http\Controllers\Backend\SocialController::class);
    Route::resource('/banner',\App\Http\Controllers\Backend\BannerController::class);
    Route::post('/update-banner-status',[\App\Http\Controllers\Backend\BannerController::class,'updateStatus']);

//AjaxController
    Route::post('/deletedmenu', [App\Http\Controllers\Backend\AjaxController::class, 'deletedMenu'])->name('deletedmenu');
});
Route::match(['get','post'],'backend/logins',[\App\Http\Controllers\Backend\UserController::class,'logins']);
