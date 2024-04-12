<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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

Route::get('/tmp', function () {
    return view('home/layout');
});

Route::get('/min', function () {
    return view('admin/layout');
});

Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/shop/{id?}','shop')->name('shop');
    // Route::get('/checkout','checkout')->name('checkout');
    Route::get('/details/{id?}','details')->name('details');
    // Route::get('/cart','cart')->name('cart');
    Route::get('/blog','blog')->name('blog');
    Route::get('/contactus','contactus')->name('contactus');
    Route::get('/gioi-thieu','gioithieu')->name('gioithieu');
    Route::get('/phan-mem','phanmem')->name('phanmem');
    Route::get('/lien-he','lienhe')->name('lienhe');
});

Route::controller(App\Http\Controllers\LoaiSanPhamController::class)->group(function(){
    Route::get('/admin/kart/index','index')->name('admin.kart.index');
});
Route::controller(App\Http\Controllers\AdminController::class)->group(function(){
    Route::get('/adminindex','index')->name('index');
});

Route::controller(App\Http\Controllers\SanPhamController::class)->group(function(){
    Route::get('/admin/sanpham/index','index')->name('admin.sanpham.index');
});
Route::controller(App\Http\Controllers\NCCController::class)->group(function(){
    Route::get('/admin/nhacungcap/index','index')->name('admin.nhacungcap.index');
});

Route::controller(App\Http\Controllers\NhanVienController::class)->group(function(){
    Route::get('/admin/nhanvien/index','index')->name('admin.nhanvien.index');
});

Route::controller(App\Http\Controllers\TinTucController::class)->group(function(){
    Route::get('/admin/tintuc/index','index')->name('admin.tintuc.index');
});

Route::controller(App\Http\Controllers\KhachHangController::class)->group(function(){
    Route::get('/admin/khachhang/index','index')->name('admin.khachhang.index');
});

Route::controller(App\Http\Controllers\DonHangController::class)->group(function(){
    Route::get('/admin/donhang/index','index')->name('admin.donhang.index');

});

Route::controller(App\Http\Controllers\HoaDonNhapController::class)->group(function(){
    Route::get('/admin/hoadonnhap/index','index')->name('admin.hoadonnhap.index'); 
});

Route::controller(App\Http\Controllers\DangNhapController::class)->group(function(){
    Route::get('/admin/user/index','index')->name('admin.user.index'); 
});

use App\Http\Controllers\LoaiSanPhamController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    //  Route::get('kart/index', [LoaiSanPhamController::class, 'index'])->name('admin.kart.index');
    Route::get('kart/create', [LoaiSanPhamController::class, 'create'])->name('admin.kart.create');
    Route::post('kart/store', [LoaiSanPhamController::class, 'store'])->name('admin.kart.store');
    Route::get('kart/edit/{id}', [LoaiSanPhamController::class, 'edit'])->name('admin.kart.edit');
    Route::post('kart/update/{id}', [LoaiSanPhamController::class, 'update'])->name('admin.kart.update');
    Route::get('kart/delete/{id}', [LoaiSanPhamController::class, 'destroy'])->name('admin.kart.delete');
    Route::get('dashboard', [LoaiSanPhamController::class, 'dashboard'])->name('dashboard');
    Route::get('kart/read/{id}', [LoaiSanPhamController::class, 'show'])->name('admin.kart.show');
});


use App\Http\Controllers\DangNhapController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('user/index', [DangNhapController::class, 'index'])->name('admin.user.index');
    Route::get('user/create', [DangNhapController::class, 'create'])->name('admin.user.create');
    Route::post('user/store', [DangNhapController::class, 'store'])->name('admin.user.store');
    Route::get('user/edit/{id}', [DangNhapController::class, 'edit'])->name('admin.user.edit');
    Route::post('user/update/{id}', [DangNhapController::class, 'update'])->name('admin.user.update');
    Route::get('user/delete/{id}', [DangNhapController::class, 'destroy'])->name('admin.user.delete');
    Route::get('dashboard', [DangNhapController::class, 'dashboard'])->name('dashboard');
    Route::get('user/read/{id}', [DangNhapController::class, 'show'])->name('admin.user.show');
});





use App\Http\Controllers\SanPhamController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('sanpham/index', [SanPhamController::class, 'index'])->name('admin.sanpham.index');
    Route::get('sanpham/create', [SanPhamController::class, 'create'])->name('admin.sanpham.create');
    Route::post('sanpham/store', [SanPhamController::class, 'store'])->name('admin.sanpham.store');
    Route::get('sanpham/edit/{id}', [SanPhamController::class, 'edit'])->name('admin.sanpham.edit');
    Route::post('sanpham/update/{id}', [SanPhamController::class, 'update'])->name('admin.sanpham.update');
    Route::get('sanpham/delete/{id}', [SanPhamController::class, 'destroy'])->name('admin.sanpham.delete');
    Route::get('sanpham/read/{id}', [SanPhamController::class, 'show'])->name('admin.sanpham.show');
});




use App\Http\Controllers\NCCController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('nhacungcap/index', [NCCController::class, 'index'])->name('admin.nhacungcap.index');
    Route::get('nhacungcap/create', [NCCController::class, 'create'])->name('admin.nhacungcap.create');
    Route::post('nhacungcap/store', [NCCController::class, 'store'])->name('admin.nhacungcap.store');
    Route::get('nhacungcap/edit/{id}', [NCCController::class, 'edit'])->name('admin.nhacungcap.edit');
    Route::post('nhacungcap/update/{id}', [NCCController::class, 'update'])->name('admin.nhacungcap.update');
    Route::get('nhacungcap/delete/{id}', [NCCController::class, 'destroy'])->name('admin.nhacungcap.delete');
    Route::get('nhacungcap/read/{id}', [NCCController::class, 'show'])->name('admin.nhacungcap.show');
});




use App\Http\Controllers\NhanVienController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('nhanvien/index', [NhanVienController::class, 'index'])->name('admin.nhanvien.index');
    Route::get('nhanvien/create', [NhanVienController::class, 'create'])->name('admin.nhanvien.create');
    Route::post('nhanvien/store', [NhanVienController::class, 'store'])->name('admin.nhanvien.store');
    Route::get('nhanvien/edit/{id}', [NhanVienController::class, 'edit'])->name('admin.nhanvien.edit');
    Route::post('nhanvien/update/{id}', [NhanVienController::class, 'update'])->name('admin.nhanvien.update');
    Route::get('nhanvien/delete/{id}', [NhanVienController::class, 'destroy'])->name('admin.nhanvien.delete');
    Route::get('nhanvien/read/{id}', [NhanVienController::class, 'show'])->name('admin.nhanvien.show');
});



use App\Http\Controllers\TinTucController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('tintuc/index', [TinTucController::class, 'index'])->name('admin.tintuc.index');
    Route::get('tintuc/create', [TinTucController::class, 'create'])->name('admin.tintuc.create');
    Route::post('tintuc/store', [TinTucController::class, 'store'])->name('admin.tintuc.store');
    Route::get('tintuc/edit/{id}', [TinTucController::class, 'edit'])->name('admin.tintuc.edit');
    Route::post('tintuc/update/{id}', [TinTucController::class, 'update'])->name('admin.tintuc.update');
    Route::get('tintuc/delete/{id}', [TinTucController::class, 'destroy'])->name('admin.tintuc.delete');
    Route::get('tintuc/read/{id}', [TinTucController::class, 'show'])->name('admin.tintuc.show');
});




use App\Http\Controllers\KhachHangController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('khachhang/index', [KhachHangController::class, 'index'])->name('admin.khachhang.index');
    Route::get('khachhang/create', [KhachHangController::class, 'create'])->name('admin.khachhang.create');
    Route::post('khachhang/store', [KhachHangController::class, 'store'])->name('admin.khachhang.store');
    Route::get('khachhang/edit/{id}', [KhachHangController::class, 'edit'])->name('admin.khachhang.edit');
    Route::post('khachhang/update/{id}', [KhachHangController::class, 'update'])->name('admin.khachhang.update');
    Route::get('khachhang/delete/{id}', [KhachHangController::class, 'destroy'])->name('admin.khachhang.delete');
    Route::get('khachhang/read/{id}', [KhachHangController::class, 'show'])->name('admin.khachhang.show');
});





Route::controller(App\Http\Controllers\CartController::class)->group(function(){
    Route::get('cart','cartList')->name('cart.list');
    Route::post('cart','addToCart')->name('cart.store');
    Route::post('update-cart','updateCart')->name('cart.update');
    Route::post('remove','removeCart')->name('cart.remove');
    Route::post('clear','clearAllCart')->name('cart.clear');
    Route::get('/home/checkout', 'checkoutget')->name('cart.checkoutget');
    Route::post('/home/checkout', 'checkoutpost')->name('cart.checkoutpost');
   
});

use App\Http\Controllers\DonHangController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('donhang/index', [DonHangController::class, 'index'])->name('admin.donhang.index');
    Route::get('donhang/create', [DonHangController::class, 'create'])->name('admin.donhang.create');
    Route::post('donhang/store', [DonHangController::class, 'store'])->name('admin.donhang.store');
    Route::get('donhang/edit/{id}', [DonHangController::class, 'edit'])->name('admin.donhang.edit');
    Route::get('donhang/{id?}', [DonHangController::class, 'chitiet'])->name('admin.donhang.chitiet');
    Route::post('donhang/update/{id}', [DonHangController::class, 'update'])->name('admin.donhang.update');
    Route::get('donhang/delete/{id}', [DonHangController::class, 'destroy'])->name('admin.donhang.delete');
    Route::get('donhang/read/{id}', [DonHangController::class, 'show'])->name('admin.donhang.show');
});





use App\Http\Controllers\HoaDonNhapController;

Route::middleware(['admin.auth'])->prefix('admin')->group(function () {
    // Route::get('hoadonnhap/index', [HoaDonNhapController::class, 'index'])->name('admin.hoadonnhap.index');
    Route::get('hoadonnhap/createct', [HoaDonNhapController::class, 'createct'])->name('admin.hoadonnhap.createct');
    Route::post('hoadonnhap/storect', [HoaDonNhapController::class, 'storect'])->name('admin.hoadonnhap.storect');
    Route::get('hoadonnhap/create', [HoaDonNhapController::class, 'create'])->name('admin.hoadonnhap.create');
    Route::post('hoadonnhap/store', [HoaDonNhapController::class, 'store'])->name('admin.hoadonnhap.store');
    Route::get('hoadonnhap/edit/{id}', [HoaDonNhapController::class, 'edit'])->name('admin.hoadonnhap.edit');
    Route::get('hoadonnhap/{id?}', [HoaDonNhapController::class, 'chitiet'])->name('admin.hoadonnhap.chitiet');
    Route::post('hoadonnhap/update/{id}', [HoaDonNhapController::class, 'update'])->name('admin.hoadonnhap.update');
    Route::get('hoadonnhap/delete/{id}', [HoaDonNhapController::class, 'destroy'])->name('admin.hoadonnhap.delete');
    Route::get('hoadonnhap/read/{id}', [HoaDonNhapController::class, 'show'])->name('admin.hoadonnhap.show');
});




Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');