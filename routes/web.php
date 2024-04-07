<?php

use App\Http\Controllers\TaskController; /* Use per Controlador*/ 
use App\Http\Controllers\ProfileController; /*Use per el Controlador de Perfil */
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite; /*Use per els oauths */
use App\Http\Controllers\Auth\LoginController;
use App\Models\User; /*Import per poder redirigir com usuari Oauth a Dashboard */

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

// Ruta per anar cap a index i mostrar artcles com anonim
Route::get('/',[TaskController::class,'index'])->name('articles')->middleware('guest');

//Ruta cap a Login
Route::get('/login',function(){ 
  return view('login');
})->name('login'); 

//Ruta cap a Registrar
Route::get('/register',function(){ 
  return view('register');
})->name('register');
/*
Route::get('/', function () {
    return view('welcome');
}); */

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login-google', function () {
  return Socialite::driver('google')->redirect();
})->name('login-google');

Route::get('/google-callback', function () {
  $user = Socialite::driver('google')->user();
  $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

  if($userExists){
    Auth::login($userExists);
  }else{
   $userNew = User::create([
      'name' => $user->name,
      'email' => $user->email,
      'avatar' => $user->avatar,
      'external_id' => $user->id,
      'external_auth' => 'google',
    ]);
    Auth::login($userNew);
  }

  return redirect()->route('home');
})->name('google-callback');


