<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortafoliController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
}); */

/*
Route::get('/',function(){
  return "Bon dia des de la pàgina d'inici"
}) */

/*
Route::get('salutacions/{nom}', function($nom){
    return "Salutacions " . $nom;
  });
  
  Route::get('contactes', function () {
    return "Secció de contactes";
  });
  
  
  Route::get('/',function(){
    echo "<a href='salutacions/Paras'>Contactes 1</a><br>";
    echo "<a href='/contactes'>Contactes 2</a><br>";
    echo "<a href='/contactes'>Contactes 3</a><br>";
    echo "<a href='/contactes'>Contactes 4</a><br>";
    echo "<a href='/contactes'>Contactes 5</a><br>";
  });

  
  Route::get('contactam',function(){
    return "Secció de contactes";
  })->name('contactes');
 */
/*
  Route::get('/',function(){
    return view('home');
  })->name('home');
*/
/*
  Route::get('/',function(){
    $nom = "Pere Pi";  
    return view('home');
  })->name('home'); */


  // 1/5 
  /*
  Route::get('/',function(){
    $nom = "Pere Pi";  
    return view('home')->with('nom', $nom);
  })->name('home'); */

  // 2/5
  /*
  Route::get('/',function(){
    $nom = "Pere Pi";  
    return view('home')->with(['nom' => $nom]);
  })->name('home'); */

  // 3/5
  /*
  Route::get('/',function(){
    $nom = "Pere Pi";  
    return view('home', ['nom' => $nom]);
  })->name('home'); */

  // 4/5
  /*
  Route::get('/',function(){
    $nom = "Pere Pir";  
    return view('home', compact('nom'));
  })->name('home'); */

  // 5/5
  
  //Route::view('/', 'home');


//Route::view('/', 'home')->name('home');
// Ruta per anar cap a index i mostrar artcles com anonim
Route::get('/',[TaskController::class,'index'])->name('articles');
//Ruta cap a Login
Route::get('/login',function(){ 
  return view('login');
})->name('login'); 


//Ruta cap a Registrar
Route::get('/register',function(){ 
  return view('register');
})->name('register'); 




//Route::get('/new-task',[TaskController::class, 'create'])->name('create');
//Route::post('/new-task',[TaskController::class, 'save'])->name('save');

/*
Route::view('/about', 'about')->name('about');
Route::view('/portafoli', 'portafoli')->name('portafoli');
Route::view('/contact', 'contact')->name('contact');
*/
/*
$portafoli = [
  ['title' => 'Projecte #1'],
  ['title' => 'Projecte #2'],
  ['title' => 'Projecte #3'],
  ['title' => 'Projecte #4'],
]; 

Route::view('/portafoli', 'portafoli', compact('portafoli'))->name('portafoli');


Route::get('/portafoli',PortafoliController::class);
Route::post('contact', [MessagesController::class,'store']);
*/