<?php

use App\Models\Images;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

 
/*
*
* User Routes for Ecommerce App
*
*/

Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
});

Route::get('/debug', function () {
    $images = Images::with('product')->get();
    $products = Products::get();
    return view('debuging', compact('images', 'products'));
});

/*
*
* Admin Routes for dahsboard
*
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'verifyAdmin',
])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/',fn ()=>view('dashboard.main'))->name('dashboard');


        Route::prefix('/products')->group(function () {
            Route::get('/',[App\Http\Controllers\Admin\ProductController::class,'index'])->name('dashboard.products');
            Route::get('/create',[App\Http\Controllers\Admin\ProductController::class,'create'])->name('dashboard.products.create');
            Route::post('/',[App\Http\Controllers\Admin\ProductController::class,'store'])->name('dashboard.products.store');
            Route::get('/{product:slug}',[App\Http\Controllers\Admin\ProductController::class,'edit'])->name('dashboard.products.edit');
            Route::delete('/{product:slug}',[App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('dashboard.products.delete');
            
        });
        
    });
    
});


/*
*
* Livewire Routes for dahsboard
*
*/


require __DIR__ . '/jetstream.php';
