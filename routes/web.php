<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/find-jobs', function () {
    return view('find-jobs');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/application', function () {
    return view('application');
});

/*Succeessful Login*/
Route::get('/povjob', [CustomAuthController::class, 'povjob'])->name('povjob');
Route::get('/userpov', [CustomAuthController::class, 'userPov'])->name('pov.userpov');
Route::get('/home', [CustomAuthController::class, 'home'])->name('home');
Route::get('/categoriespov', [CustomAuthController::class, 'categoriespov'])->name('pov.categoriespov');
Route::get('/blogspov', [CustomAuthController::class, 'blogspov'])->name('blogspov');






Route::get('register', [CustomAuthController::class, 'register']);
Route::post('register', [CustomAuthController::class, 'create'])->name('register');
Route::get('login', [CustomAuthController::class, 'login']);
Route::post('login', [CustomAuthController::class, 'authenticate'])->name('login');
Route::get('logout', [CustomAuthController::class, 'logout']);
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');



Route::get('/dashboard', [CustomAuthController::class, 'userpov'])
    ->name('dashboard')
    ->middleware('auth');