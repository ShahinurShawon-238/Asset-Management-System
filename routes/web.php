<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\TotalAssetController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AdditionalAssetController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TODOController;

Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//admin index route
Route::get('/admin/dashboard', [IndexController::class, 'index'])->name('admin.index');
Route::get('/admin/login', [IndexController::class, 'logout'])->name('user.logout');

//building page routes
Route::get('/building', [BuildingController::class, 'building'])->name('building');
Route::get('/add/building', [BuildingController::class, 'addBuilding'])->name('addBuilding');
Route::post('/store/building', [BuildingController::class, 'storeBuilding'])->name('storeBuilding');
Route::get('/building/edit/{id}', [BuildingController::class, 'editBuilding']);
Route::post('/building/update/{id}', [BuildingController::class, 'updateBuilding']);
Route::get('/building/delete/{id}', [BuildingController::class, 'deleteBuilding']);

//floors page routes
Route::get('/floor', [FloorController::class, 'floor'])->name('floor');
Route::get('/add/floor', [FloorController::class, 'addFloor'])->name('addFloor');
Route::post('/store/floor', [FloorController::class, 'storeFloor'])->name('storeFloor');
Route::get('/floor/edit/{id}', [FloorController::class, 'editFloor']);
Route::post('/floor/update/{id}', [FloorController::class, 'updateFloor']);
Route::get('/floor/delete/{id}', [FloorController::class, 'deleteFloor']);

//shops page routes
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/add/shop', [ShopController::class, 'addShop'])->name('addShop');
Route::post('/store/shop', [ShopController::class, 'storeShop'])->name('storeShop');
Route::get('/shop/edit/{id}', [ShopController::class, 'editShop']);
Route::post('/shop/update/{id}', [ShopController::class, 'updateShop']);
Route::get('/shop/delete/{id}', [ShopController::class, 'deleteShop']);
Route::get('/changeStatus', [ShopController::class, 'changeStatus'])->name('changeStatus');

//rent page routes
Route::get('/rent', [RentController::class, 'rent'])->name('rent');
Route::get('/add/rent', [RentController::class, 'addRent'])->name('addRent');
Route::post('/store/rent', [RentController::class, 'storeRent'])->name('storeRent');
Route::get('/rent/edit/{id}', [RentController::class, 'editRent']);
Route::post('/rent/update/{id}', [RentController::class, 'updateRent']);
Route::get('/rent/delete/{id}', [RentController::class, 'deleteRent']);

//tenant page routes
Route::get('/tenant', [TenantController::class, 'tenant'])->name('tenant');
Route::get('/add/tenant', [TenantController::class, 'addTenant'])->name('addTenant');
Route::post('/store/tenant', [TenantController::class, 'storeTenant'])->name('storeTenant');
Route::get('/tenant/edit/{id}', [TenantController::class, 'editTenant']);
Route::post('/tenant/update/{id}', [TenantController::class, 'updateTenant']);
Route::get('/tenant/delete/{id}', [TenantController::class, 'deleteTenant']);
Route::get('/tenant/invoice/{id}', [TenantController::class, 'tenantInvoice']);
Route::get('/changeStatus2', [TenantController::class, 'changeStatus2'])->name('changeStatus2');


//Total asset page routes
Route::get('/total/asset', [TotalAssetController::class, 'totalAsset'])->name('totalAsset');

//Email routes
Route::get('/send-email/{id}', [MailController::class, 'sendEmail']);

//PDF routes
Route::get('/generate-pdf/{id}', [PDFController::class, 'generatePDF']);

//Additional assets routes
Route::get('/additional/asset', [AdditionalAssetController::class, 'additionalAsset'])->name('additionalAsset');
Route::get('/add/additional/asset', [AdditionalAssetController::class, 'addAsset'])->name('addAsset');
Route::post('/store/additional/asset', [AdditionalAssetController::class, 'storeAsset'])->name('storeAsset');
Route::get('/additional/asset/edit/{id}', [AdditionalAssetController::class, 'editAsset']);
Route::post('/additional/asset/update/{id}', [AdditionalAssetController::class, 'updateAsset']);
Route::get('/additional/asset/delete/{id}', [AdditionalAssetController::class, 'deleteAsset']);


//File page routes
Route::get('/file', [FileController::class, 'file'])->name('file');
Route::get('/add/file', [FileController::class, 'addFile'])->name('addFile');
Route::post('/store/file', [FileController::class, 'storeFile'])->name('storeFile');
Route::get('/file/view/{id}', [FileController::class, 'view']);
Route::get('/file/download/{file}', [FileController::class, 'download']);
Route::get('/file/delete/{id}', [FileController::class, 'delete']);
 
//ToDo page routes
Route::get('/todo', [TODOController::class, 'todo'])->name('todo');
Route::post('/store/task', [TODOController::class, 'storeTask'])->name('storeTask');
Route::get('/changeStatus3', [TODOController::class, 'changeStatus3'])->name('changeStatus3');
Route::get('/todo/delete/{id}', [TODOController::class, 'delete']);



});
