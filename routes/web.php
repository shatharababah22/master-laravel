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
use App\Http\Controllers\ContactController;

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\CartitemController;
use App\Http\Controllers\DiscountproductController;

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

// Route::get('/', function () {
//     return view('AllPages.Home');
// });
// Route::get('/cart', function () {
//     return view('AllPages.cart');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', [DiscountproductController::class, 'index'])->name('home');


Route::get('/allproduct/{Category_ID}', [DiscountproductController::class, 'Allproduct'])->name('allproduct');
Route::get('/productdetail/{id_cart}', [DiscountproductController::class, 'product_detail'])->name('productdetail');
Route::post('/productdetail/comment/{id}', [DiscountproductController::class, 'product_comment'])->name('productcomment');


//...............cart.....................
Route::post('/productdetail/add/{id}', [DiscountproductController::class,'add_cart'])->name('addcart');
Route::delete('/delete/{iddelete}', [CartitemController::class, 'delete_cart'])->name('deletecart');

// Route::get('/cart/update/{product_id}', [CartitemController::class, 'update_cart'])->name('updatecart');
// Route::get('/cart', [CartitemController::class, 'index']);

Route::post('/discountcoupon', [CartitemController::class, 'Discount'])->name('discountcoupon');
Route::get('/cart', [CartitemController::class, 'index']);



// .....................admin..........................
Route::resource('category', CategoryController::class);
Route::resource('productadmin',ProductController::class);
Route::resource('user_admin',UserController::class);
Route::resource('admin',AdminController::class);
Route::resource('discount',DiscountController::class);
Route::resource('comments',ReviewController::class);
Route::resource('order',OrderController::class);
Route::resource('test',TestimonialController::class);
Route::resource('review',DiscountproductController::class);


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

// ...............contact us ..................

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');












