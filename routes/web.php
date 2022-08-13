<?php

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


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
     $categories = Category::with('product')->get();
     $products = Product::with('category','brand')->get();
     return view('home',compact('categories','products'));
})->name("home");
Route::get('products-p1',function(){

    $products = Product::with('category','brand')->get();
    return view('products.foods',compact('products'));

});

Route::get("/signup",[UserController::class,"signup"])->name("signup");
Route::post("/signup-submit",[UserController::class,"signupSubmit"])->name("signup.submit");
Route::get("/login",[UserController::class,"login"])->name("login");
Route::post('/login-submit',[UserController::class,"loginSubmit"])->name("login.submit");
Route::post('/logout',[UserController::class,"logout"])->name('logout.user');
// cart shop
Route::post('/add-to-cart/{id}',[OrderController::class,"addToCart"])->name('add.to.cart');
Route::get('/cart',[OrderController::class,"cart"])->name('cart');
Route::patch('/cart/{id}/{quty}',[OrderController::class,"updateCart"])->name('update.cart');
Route::delete('/cart/{id}',[OrderController::class,"deleteCart"])->name('del.cart');
Route::post('/order',[OrderController::class,"store"])->name('order.cart.store');

// cart shop

// search ajax
Route::post('/search',[ProductController::class,"searchFoodAjax"]);

// for Admin

Route::group(['prefix'=>"/admin","middleware"=>['auth','Admin']],function(){
     Route::resource('order','App\Http\Controllers\OrderController');
     Route::get("/dashboard",[UserController::class,"index"])->name("dashboard");
     Route::post("/logout",[UserController::class,"logout"])->name("logout");
     Route::get("/edit/{id}",[UserController::class,"edit"])->name("update.profile");
     Route::resource("users",'App\Http\Controllers\UserController')->whereNumber("id")->parameter("user","id");
     Route::resource('products','App\Http\Controllers\ProductController')->whereNumber('id');
     // livewire
     Route::get('/category', App\Http\Livewire\Admin\CategoryLivewire::class)->name('category');
});
// for User




