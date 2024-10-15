<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductDetailController;
use App\Models\user;
use App\Http\Controllers\saerchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
use  App\Http\Controllers\AdminHomeController;
use  App\Http\Controllers\AdminUserController;
use  App\Http\Controllers\AdminproductController;
use  App\Http\Controllers\AdmincustomerController;
use  App\Http\Controllers\AdminAddImgProductDetails;
use App\Http\Controllers\AdminEditProductController;
use App\Http\Controllers\billController;
use PHPUnit\Metadata\Uses;
use App\Http\Controllers\categoryController;

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



//user 
Route::get('/',[ProductController::class , 'index'])->name('home');
Route::get('login',[UserController::class,'index'])->name('login');
Route::post('login',[UserController::class,'store'])->name('post.login');
Route::post('register.login',[UserController::class,'register'])->name('register.login');
Route::get('logout',[UserController::class, 'destroy'])->name('logout');
Route::get('product/{product_id}',[ProductController::class, 'show'])->name('product');
Route::get('contact',[ContactController::class ,'index'])->name('index_contact');
Route::get('cart/{id}',[CartController::class,'show'])->name('cart');
Route::get('shop',[ShopController::class,'index'])->name('shop');
Route::post('addcart/{id}',[CartController::class, 'store'])->name('addcart');
Route::get('delete/Cart/{id}', [CartController::class,'edit'])->name('deletecart');
Route::get('search',[saerchController::class,'index'])->name('search');
Route::get('bill',[billController::class,'index'])->name('bill');
Route::post('bill',[billController::class,'addbill'])->name('addbill');
Route::get('bill/{id}',[billController::class,'history'])->name('history');
Route::view('success', 'frontend.success')->name('success');


//admin
Route::get("admin/product",[AdminproductController::class, 'index'])->name('admin_product');
Route::get("admin/home",[AdminHomeController::class, 'index'])->name('admin_home');
Route::get("admin/user",[AdminUserController::class, 'index'])->name('admin_users');
Route::get("admin/customer",[AdmincustomerController::class, 'index'])->name('admin_customer');
Route::get("admin/addproduct",[AdminproductController::class, 'addProduct'])->name('admin_addproduct');
Route::post("admin/addproduct",[AdminproductController::class, 'create'])->name('admin_addproduct_create');
Route::get("admin/addIMGproducdetails/{id}",[AdminAddImgProductDetails::class, 'index'])->name('admin_add_IMG_product_details');
Route::post("admin/addIMGproducdetails/form/{id}",[AdminAddImgProductDetails::class, 'create'])->name('admin_add_IMG_product_details_form');
Route::get("admin/editProduct/{id}",[AdminEditProductController::class,'edit'])->name('admin_edit_product');
Route::post("admin/updetaProduct/{id}",[AdminEditProductController::class,'update'])->name('admin_update_product');
Route::get("admin/deleteProduct/{id}",[AdminproductController::class,'delete'])->name('deleteProduct');
Route::get("admin/searchProduct",[AdminproductController::class,'search'])->name('searchProduct');
Route::get("admin/addUser",[AdminUserController::class,'indexAddUser'])->name('addUser');
Route::post("admin/addUser",[AdminUserController::class,'create'])->name('create_adminUser');
Route::post("admin/editUser/{id}",[AdminUserController::class,'editUser'])->name('edit_adminUser');
Route::get("admin/delete/{id}",[AdminUserController::class,'deleteUser'])->name('deleteUserId');
Route::get("admin/editUser/{id}",[AdminUserController::class,'edit'])->name('editUserId');
Route::get("admin/Search/User",[AdminUserController::class,'SearchUser'])->name('searchUser');
Route::get("admin/customer/{id}",[AdmincustomerController::class,'indexDetali'])->name('admin_customer_detali');
Route::get("admin/customer/status/{id}/{id_product}",[AdmincustomerController::class,'status'])->name('status');
Route::post('contact/email', [ContactController::class, 'contact'])->name('contact');
Route::get("admin/category/{id}",[categoryController::class,'index'])->name('category');
Route::get("admin/addcategory",[categoryController::class,'create'])->name('addcategory');
Route::post("admin/addcategory",[categoryController::class,'store'])->name('store');



