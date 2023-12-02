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
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\WishlistproductController;
use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\CartitemController;
use App\Http\Controllers\DiscountproductController;
use App\Http\Controllers\GoogleController;
use App\Models\Wishlist;
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


// ...............contact us ..................
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

// ...............About us ..................
Route::get('/about', function () {
    return view('AllPages.about');
})->name('about');

Route::get('/about1', function () {
    return view('Emails.discount');
});

// Route::get('/success_paypal', function () {
//     return view('AllPages.popop');
// })->name('popop');


Route::get('/paymentmethod', function () {
    return view('AllPages.payment_method');
})->name('paymentmethodmain');

// ...............Profile ..................
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile_user', [DiscountproductController::class, 'user_address'])->name('profile.general');



require __DIR__ . '/auth.php';




// ................all_product and single_product.......................
Route::get('/', [DiscountproductController::class, 'index'])->name('home');
// Route::get('/navbar', [DiscountproductController::class, 'index2'])->name('home');
Route::get('/search', [DiscountproductController::class, 'search'])->name('search');
Route::get('/allproduct/{Category_ID}', [DiscountproductController::class, 'Allproduct'])->name('allproduct');
Route::get('/productdetail/{id_product}', [DiscountproductController::class, 'product_detail'])->name('productdetail');
Route::post('/productdetail/comment/{id_comment}', [DiscountproductController::class, 'product_comment'])->name('productcomment');




//...............cart.....................
Route::post('/productdetail/add/{id}', [DiscountproductController::class, 'add_cart'])->name('addcart');
Route::post('/discountcoupon', [DiscountproductController::class, 'discounts'])->name('discountcoupon');
Route::get('/cart', [CartitemController::class, 'index'])->name('cart');
Route::put('/updatecart/{id}', [CartitemController::class, 'update'])->name('updatecart');
Route::delete('/deletecart/{id}', [CartitemController::class, 'destroy'])->name('deletecart');









// ....................checkout.....................
Route::get('/adresses/{iduser}', [DiscountproductController::class, 'addresess'])->name('adresess_user');
Route::match(['get', 'post'], '/shath', [DiscountproductController::class, 'CheckoutAddress'])->name('checkout_address');
Route::match(['get', 'post'], '/Payment_Cash', [DiscountproductController::class, 'Paymentmethod'])->name('Paymentmethod');


Route::match(['get', 'post'], '/Payment_paypal', [DiscountproductController::class, 'Paymentmethod_paypal'])->name('Paymentmethod_paypal');


Route::get('/orders/{order}', [DiscountproductController::class, 'Order'])->name('orders');
Route::get('/confirm/{order}', [DiscountproductController::class, 'Confirm'])->name('confirm');

// Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
// Route::match(['get', 'post'],'process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');



// .....................admin..........................
Route::resource('category', CategoryController::class);
Route::resource('productadmin', ProductController::class);
Route::resource('user_admin', UserController::class);
Route::resource('admin', AdminController::class);
Route::resource('discount', DiscountController::class);
Route::resource('comments', ReviewController::class);
Route::resource('order', OrderController::class);
Route::resource('test', TestimonialController::class);
Route::resource('review', DiscountproductController::class);
Route::resource('adminprofile', WishlistproductController::class);



// ...................admin_login.................
Route::middleware('admin')->group(function () {
    Route::get('/dash', function () {
        return view('Dashboard.Home');
    });
});



Route::get('/dash', [AdminLoginController::class, 'showLoginForm'])->name('todos.index');
Route::post('/dash/store', [AdminLoginController::class, 'store'])->name('todos.store');
Route::delete('/dash/{todo1}', [AdminLoginController::class, 'destroy'])->name('todos.destroy');

Route::get('/adminlogout', [AdminLoginController::class, 'logout'])->name("admin.logout");
Route::match(['get', 'post'], '/dash/login', [AdminLoginController::class, 'login'])->name("admin.login");


// ...................Recycling_form.................
Route::match(['get', 'post'], '/recyclings', [DiscountproductController::class, 'Recycling'])->name("form_recycling");
Route::get('/recyclings-page', function () {
    return view('AllPages.form');
})->name('form');





Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



Route::get('/home_master', [DiscountproductController::class, 'Home_admin']);
