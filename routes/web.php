<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('admin')->group(function () {

    Route::get('/dash', function () {
        return view('Dashboard.Home');
    });
    
});

require __DIR__.'/auth.php';




// ................all_product and single_product.......................
Route::get('/', [DiscountproductController::class, 'index'])->name('home');
// Route::get('/navbar', [DiscountproductController::class, 'index2'])->name('home');
Route::get('/search', [DiscountproductController::class, 'search'])->name('search');
Route::get('/allproduct/{Category_ID}', [DiscountproductController::class, 'Allproduct'])->name('allproduct');
Route::get('/productdetail/{id_product}', [DiscountproductController::class, 'product_detail'])->name('productdetail');
Route::post('/productdetail/comment/{id_comment}', [DiscountproductController::class, 'product_comment'])->name('productcomment');




//...............cart.....................
Route::post('/productdetail/add/{id}', [DiscountproductController::class,'add_cart'])->name('addcart');
Route::post('/discountcoupon', [CartitemController::class, 'index'])->name('discountcoupon');
Route::get('/cart', [CartitemController::class, 'index'])->name('cart');

// Example routes
Route::patch('/updatecart/{id}', [CartitemController::class, 'update'])->name('updatecart');
Route::delete('/deletecart/{id}', [CartitemController::class, 'destroy'])->name('deletecart');









// ....................checkout.....................
Route::get('/adresses/{iduser}', [DiscountproductController::class, 'addresess'])->name('adresess_user');
Route::match(['get', 'post'],'/shath', [DiscountproductController::class, 'CheckoutAddress'])->name('checkout_address');
Route::get('/orders/{order}', [DiscountproductController::class, 'Order'])->name('orders');
Route::get('/confirm/{order}', [DiscountproductController::class, 'Confirm'])->name('confirm');





// ...............contact us ..................
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


Route::get('/about', function () {
    return view('AllPages.about');
})->name('about');

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

Route::get('/dash', [AdminLoginController::class, 'showLoginForm']);
Route::get('/adminlogout', [AdminLoginController::class, 'logout'])->name("admin.logout");
Route::match(['get', 'post'],'/dash/login', [AdminLoginController::class, 'login'])->name("admin.login");


















