<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;

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

// permite traducir al español con los archivos que tenemos
App::setLocale('es');

Route::get('/', function() {
    $nombre = "Invitado";
    return view('home', compact('nombre'));
})->name('home');

Route::view('/about','about')->name('about');
Route::get('/project', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/project/create', [ProjectController::class, 'create'])->name('create');
Route::patch('/project/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::post('/project/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::view('/contact','contact')->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('message.store');


/*Route::get('/', function () {
    return view('welcome');
});*/

// aprendible.com = Route::get('/', function);
// aprendible.com/contacto = Route::get('contacto', function);
/*
Route::get('/', function() {
    return "Hola desde la página de inicio";
});

Route::get('contacto', function() {
    return "Hola desde la página de contacto";
});

// en saludo1 es obligatorio pasarle un parámetro
Route::get('saludo1/{nombre}', function($nombre) {
   return "Saludos " . $nombre; 
});

// en saludo2 no es obligatorio pasarle un parámetro
Route::get('saludo2/{nombre?}', function($nombre = "Invitado") {
   return "Saludos " . $nombre; 
});

// Route::get(); podemos atender peticiones con post

// Rutas con Nombre

Route::get('contactame', function() {
    return "Sección de contactos";
})->name('contactos');

Route::get('/', function() {
    echo "<a href='". route('contactos') ."'>Contactos 1</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 2</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 3</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 4</a><br>";
    echo "<a href='". route('contactos') ."'>Contactos 5</a><br>";
});


// Devolvemos paginas web html

Route::get('/', function() {
    $nombre = "Jorge";
    return view('home')->with('nombre', $nombre);
    //return view('home')->with(['nombre'=> $nombre]);
    //return view('home', ['nombre'=> $nombre]);
    //return view('home', compact('nombre'));
})->name('home');*/


//Route::resource('projects', PortfolioController::class);
//Route::resource('projects', PortfolioController::class)->only(['index', 'show']);
//Route::resource('projects', PortfolioController::class)->except(['index', 'show']);

