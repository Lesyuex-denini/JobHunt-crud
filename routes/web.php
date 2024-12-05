<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them 
| will be assigned to the "web" middleware group. Make something great!
|
*/

// General Views
Route::view('/', 'welcome')->name('welcome');
Route::view('/find-jobs', 'find-jobs')->name('find-jobs');
Route::view('/categories', 'categories')->name('categories');
Route::view('/blogs', 'blogs')->name('blogs');
Route::view('/status', 'pov.status')->name('status');



// Successful Login Views
Route::get('/povjob', [CustomAuthController::class, 'povjob'])->name('povjob');
Route::get('/userpov', [CustomAuthController::class, 'userPov'])->name('pov.userpov');
Route::get('/home', [CustomAuthController::class, 'home'])->name('home');
Route::get('/categoriespov', [CustomAuthController::class, 'categoriespov'])->name('pov.categoriespov');
Route::get('/blogspov', [CustomAuthController::class, 'blogspov'])->name('pov.blogspov');

// Application Routes
Route::view('/application/create', 'pov.create')->name('application.create');
Route::post('/application/store', [CustomAuthController::class, 'store'])->name('application.store');

// Status Page (Protected by Auth Middleware)
Route::get('/application/status', [CustomAuthController::class, 'status'])
    ->name('application.status')
    ->middleware('auth');
Route::get('/status', [CustomAuthController::class, 'status'])->name('status');


// Authentication Routes
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('register', [CustomAuthController::class, 'create']);
Route::get('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('login', [CustomAuthController::class, 'authenticate']);
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

// Dashboard (Protected by Auth Middleware)
Route::get('/dashboard', [CustomAuthController::class, 'home'])
    ->name('dashboard')
    ->middleware('auth');