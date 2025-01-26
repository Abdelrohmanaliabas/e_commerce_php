<?php

use App\Http\Controllers\ItemsController ;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Items;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['items'=>Items::all()]);
});

Route::get('/itemdetails/{item:id}', function () {
return view('itemdetails');
});
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
       




Route::middleware(['auth',/**AdminMiddleware::class**/])->group(
    function(){
        

        Route::post('/items', [ ItemsController::class, 'store']);
        Route::get('/itemsCreate', [ItemsController::class, 'create']);

        
    }
);
