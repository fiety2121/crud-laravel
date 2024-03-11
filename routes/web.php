<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClientController;
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

// Route::get('/', function () {
//     return 'welcome';
// });

// Route::get('/inscription' , function() {
//     return view('inscription');
// });

// Route::match(['get', 'post'], '/', function () {});
// Route::get('user/{id}', function ($id) { 
//     return 'User '.$id; 
//     }); 

// Route::get('/apprenants/index',function(){ 
// return view('apprenants/index'); 
// }); 
// Route::get('bienvenue', function(){
//     $name = 'YASSINE REKIK';
//     $age = 22;
//     $ville = 'Paris';
//     $domaine = 'Informatique';

//     // Utilisez Carbon pour obtenir l'heure actuelle dans le fuseau horaire de Paris
//     $heureParis = \Carbon\Carbon::now('Europe/Paris')->format('H:i:s');

//     return view('bienvenue', [
//         'name' => $name,
//         'date' => date('d/m/y'),
//         'age' => $age,
//         'ville' => $ville,
//         'domaine' => $domaine,
//         'heureParis' => $heureParis
//     ]);
// });
// Route::get('/',function(){ 
//     return view('welcome/menu'); 
//         }); 
// Route::get('/about',function(){ 
//     return view('welcome/about'); 
//         }); 
// Route::get('/contacte',function(){ 
//     return view('welcome/contacte'); 
//         }); 
            
Route::get('/home', [MenuController::class, 'home'])->name('home');
Route::get('/about', [MenuController::class, 'about'])->name('about');
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');
Route::get('/WebSite', [MenuController::class, 'WebSite'])->name('WebSite');
Route::resource('clients', ClientController::class);
// Route::get('/index', [ClientController::class, 'index'])->name('clients.index');
// Route::get('/create', [ClientController::class, 'create'])->name('clients.create');

        
