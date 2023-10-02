<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\DiscountproductController;
use App\Models\Discountproduct;
use Illuminate\Support\Facades\Route;


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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/home', function () {
//     return view('Allpages.Home');
// });

Route::get('/home', [DiscountproductController::class, 'index']);


Route::get('/allproduct/{Category_ID}', [DiscountproductController::class, 'Allproduct'])->name('allproduct');
Route::get('/productdetail/{id}', [DiscountproductController::class, 'product_detail'])->name('productdetail');





// .....................admin..........................
Route::resource('category', CategoryController::class);
Route::resource('productadmin',ProductController::class);
Route::resource('user_admin',UserController::class);
Route::resource('admin',AdminController::class);
Route::resource('discount',DiscountController::class);
Route::resource('comments',ReviewController::class);
Route::resource('order',OrderController::class);
Route::resource('test',TestimonialController::class);


// ...................admin_login.................

Route::post('/adminlogin', [AuthenticatedSessionController::class,"create"]);
Route::middleware('admin')->group(function () {

    Route::get('/dash', function () {
        return view('Dashboard.Home');
    });
    
});

Route::get('/dash/login', [AdminLoginController::class, 'login'])->name("admin.login");
Route::get('/dash/home', [AdminLoginController::class, 'showLoginForm'])->name("admin.lolo");
Route::post('/dash/check', [AdminLoginController::class, 'check'])->name("admin.check");
Route::get('/adminlogout', [AdminLoginController::class, 'logout'])->name("admin.logout");






