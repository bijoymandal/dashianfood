<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminloginController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Auth\VendorRegisterController;
use App\Http\Controllers\Auth\VendorLoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SettingController;

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

Route::get('/', function () {
    return view('frontend');
});
Route::get('/', [FrontendController::class, 'index']);
Route::get('/userlogin',[FrontendController::class,'loginpage'])->name('userlogin');
Route::get('/useregister',[FrontendController::class,'registerpage'])->name('useregister');
Route::get('/contactus', [FrontendController::class, 'contactpage'])->name('contactus');
Route::get('/allproduct', [FrontendController::class, 'proitems'])->name('allproduct');
//Route::get('')


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/login', [AdminloginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminloginController::class, 'login'])->name('login.submit');
    Route::get('/register',[AdminRegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[AdminRegisterController::class,'register'])->name('register.submit');

    //Category
    Route::get('/catstatus/catstatus', [CategoryController::class, 'chnageStatus'])->name('category.catstatus');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    Route::resource('category', CategoryController::class);
    Route::resource('category', CategoryController::class);


    //slider
    Route::controller(SliderController::class)->group(function () {
        Route::get('/sliderstatus', 'chnageStatus')->name('sliderstatus');
        Route::get('/sliders/delete/{id}', 'delete')->name('delete');
        //Route::resource('sliders',
        Route::resource('sliders', SliderController::class);
    });
    
    //product
    Route::get('/productstatus', [ProductController::class, 'chnageStatus'])->name('productstatus');
    Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    Route::resource('products', ProductController::class);
    
    //setting
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::PATCH('/setting/webcontent', [SettingController::class, 'webtitle'])->name('setting.webcontent');
    Route::PATCH('updatelogo', [SettingController::class, 'logo'])->name('setting.updatelogo');
    Route::PATCH('/setting/updatefavicon', [SettingController::class, 'favicon'])->name('setting.updatefavicon');
    Route::PATCH('/setting/sociallink', [SettingController::class, 'social'])->name('setting.sociallink');
    Route::PATCH('/setting/officeinfo', [SettingController::class, 'office'])->name('setting.officeinfo');
    Route::PATCH('/setting/currencysml', [SettingController::class, 'currencysymbl'])->name('setting.currencysml');
    
    //profile settings
    Route::get('changepass', [AdminController::class, 'changepass'])->name('changepass');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::PATCH('/update-profile', [AdminController::class, 'updateprofile'])->name('updateprofile');
    Route::post('updatepass', [AdminController::class, 'updatepass'])->name('updatepass');
});
Route::get('/supplier',[FrontendController::class,'vendorside'])->name('supplier');
Route::group(['prefix' => 'vendor', 'as' => 'vendor.'],function()
{
    Route::get('/',[VendorController::class,'index'])->name('dashboard');
    Route::get('/login',[VendorLoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[VendorLoginController::class,'login'])->name('login.submit');
    Route::get('/register',[VendorRegisterController::class,'showRegisterForm'])->name('register');
    Route::post('/register',[VendorRegisterController::class,'register'])->name('register.submit');
});