<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManuController;
use App\Http\Controllers\ProtypeController;
use Illuminate\Http\Request;

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
Route::get('protypes', [ProtypeController::class, 'index']);
Route::get('edit-protype/{protype_id}', [ProtypeController::class, 'edit'])->name('edit-protype');
Route::put('update-protype/{protype_id}', [ProtypeController::class, 'update'])->name('update-protype');
Route::get('delete/{protype_id}', [ProtypeController::class,'delete']);
Route::post('add-protype', [ProtypeController::class,'add'])->name('add-protype');
Route::get('showprotype', [ProtypeController::class,'index']);


Route::get('manufactures', [ManuController::class, 'index']);
Route::get('edit-manu/{manu_id}', [ManuController::class, 'edit'])->name('edit-manu');
Route::put('update-manu/{manu_id}', [ManuController::class, 'update'])->name('update-manu');
Route::get('delete/{manu_id}', [ManuController::class,'delete']);
Route::post('add-manu', [ManuController::class,'add'])->name('add-manu');
Route::get('showmanu', [ManuController::class,'index']);



Route::get('uploadfile', function () {
   return view('add');
});
Route::post('upload', function(Request $request) {
   //Kiểm tra xem file đã được upload chưa   
   if(!$request->hasFile('image')) {
      //Nếu chưa có file upload thì báo lỗi
      return 'Hãy chọn file để upload';
   }
   else {
      //Xử lý file upload
      $image = $request->file('image');
      //Lưu trữ file tại public/images
      $image = $image->move('images', $image->getClientOriginalName());
      return 'Lưu trữ file thành công';
   }
})->name('add-product');
Route::get('checkout/{id}', [MyController::class,'getProductByiddd'])->name('checkout');
Route::get('addtocart/{id}', [MyController::class,'getProductByidd'])->name('addtocart');
Route::get('products', [ProductController::class, 'index']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::put('update/{id}', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProtypeController::class,'detroy'])->name('delete-product');
Route::post('add-product', [ProductController::class,'add'])->name('add-product');
Route::get('admin', [ProductController::class,'index']);
Route::get('search', [MyController::class,'searchProduct']);

Route::get('/{page?}', [MyController::class,'index']);

Route::get('/product/{id}', [MyController::class,'getProductByid']);
// Route::resource('comments.store', CommentController::class);




Route::get('login', [UserController::class, 'logout']);

//login, register, checklogin
Route::get('login', function () { return view('login');});
Route::get('register', function () {
    return view('register');
});

Route::post('register-user', [UserController::class, 'store'])->name('register-user');
Route::post('login-user', [UserController::class, 'login'])->name('login-user');


 
