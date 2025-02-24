<?php

use App\Http\Controllers\ItemsController ;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\ItemsModel;
use App\Models\ItemImageModel;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemsController::class, 'index']);
Route::middleware(['auth',AdminMiddleware::class])->group(
    function(){
        Route::post('/items', [ ItemsController::class, 'store']);
        Route::get('/itemsCreate', [ItemsController::class, 'create']);
    }
);
//Route::get('/itemdetails/{item:id}', function ($id) {
//    return view('itemdetails',ItemsController::class.'show');
//});

Route::get('/itemdetails/{id}', [ItemsController::class,'show']);
Route::get('/contact', function () {
return view('contact');
});
Route::get('/card', function () {
return view('card');
});Route::get('/about', function () {
return view('about');
});






Route::get('/login', function () {
return view('auth.logIn');
});
Route::get('/register', function () {
return view('auth.register');
});

// Route::get('/items/create', function () {
//     return view('/itemsCreate');
// })->middleware('auth');


Route::middleware('guest')->group(
    function () {
        Route::get('/register', [ RegisterUserController::class, 'create']);
        Route::post('/register', [ RegisterUserController::class, 'store']);
        Route::get('/login', [ SessionController::class, 'create']);
        Route::post('/login', [ SessionController::class, 'store']);
    }
);

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');






