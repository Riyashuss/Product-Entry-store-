<?php




use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WideController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EditController;
use App\Http\controllers\PopupController;





use Illuminate\Http\Request;







    


//Route::view('register','auth.register');
//Route::post('store',[RegisterController::class,'store']);
//Route::view('products','products');


//Route::view('login','auth.login');
//Route::post('authenticate',[LoginController::class,'authenticate']);





Auth::routes();

Route::get('/', function () {
    return redirect('/products');
});


Route::middleware('auth')->group(function () {
    Route::resource('products', StudentController::class);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/edit',[EditController::class,'editform']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);




    Route::get('/popup', [PopupController::class, 'popup']);
	
	
	
// 	// Routes for products
// Route::middleware('auth')->group(function () {
//     Route::get('products', [StudentController::class, 'index']);
//     Route::get('products/create', [StudentController::class, 'create']);
//     Route::post('products', [StudentController::class, 'store']);
//     Route::get('products/{id}/edit', [StudentController::class, 'edit']);
//     Route::put('products/{id}', [StudentController::class, 'update']);
//     Route::delete('products/{id}', [StudentController::class, 'destroy']);
// });
