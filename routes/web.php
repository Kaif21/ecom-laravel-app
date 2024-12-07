<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopGridController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CustomerAuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });

// GET
//ShopGrid
Route::get('/', [ShopGridController::class, 'index'])->name('website.home');
//product-detail
Route::get('/product-detail/{id}', [ShopGridController::class, 'product'])->name('website.product-detail');
//product-category
Route::get('/product-category/{id}', [ShopGridController::class, 'category'])->name('website.product-category');
//product-subcategory
Route::get('/product-subcategory/{id}', [ShopGridController::class, 'subcategory'])->name('website.product-subcategory');
//login
Route::get('/customer-login', [ShopGridController::class, 'login'])->name('website.login');
//register
Route::get('/customer-register', [ShopGridController::class, 'register'])->name('website.register');
//cart
Route::get('/cart', [CartController::class, 'index'])->name('website.cart.index');
//cart-store
Route::post('/cart/store/{id}', [CartController::class, 'store'])->name('website.cart.store');




//customer-Dashboard
Route::get('/customer/dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');


//customer-login-view
Route::get('/customer/login-page', [CustomerAuthController::class, 'loginView'])->name('customer.login-page');
//customer-register-view
Route::get('/customer/register-page', [CustomerAuthController::class, 'registerView'])->name('customer.register-page');

//customer-auth
Route::get('/customer/login-register', [CustomerAuthController::class, 'index'])->name('customer.login-register');
//customer-login
Route::post('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');
//customer-logout
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');
//customer-register
Route::post('/customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');


//checkout
Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout.index');
//checkout-payemntinfo
Route::get('/checkout/payment-info', [CheckOutController::class, 'paymentinfo'])->name('checkout.paymentinfo');


//POST
//product
//POST
Route::middleware([
    'auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// admin
// GET
//category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
//category
//sub_category
Route::get('/subcategory', [SubCategoryController::class, 'index'])->name('subcategory.index');
Route::get('/subcategory/create', [SubCategoryController::class, 'create'])->name('subcategory.create');
Route::get('/subcategory/edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::get('/subcategory/delete/{id}', [SubCategoryController::class, 'delete'])->name('subcategory.delete');
//sub_category
//brand
Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');
//brand
//unit
Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');
Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');
//unit
//product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');
//product

// GET


//category
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
//category
//sub_category
Route::post('/subcategory/store', [SubCategoryController::class, 'store'])->name('subcategory.store');
Route::post('/subcategory/update/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
//sub_category
//brand
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
//brand
//unit
Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
//unit
//product
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');


});
// admin
