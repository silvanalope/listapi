<?php
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ListaController;


Route::view('/','home')->name('home');

Route::view('/about','about')->name('about');

route::get('/portafolio',[PortafolioController::class,'index'])->name('portafolio');
Route::view('/contact', 'contact')->name('contact');








//Route::get('/', function() {

    //$nombre = "silvia lopez";

    //return view('home', compact('nombre')); // este array es iguak q compact['nombre'=>$nombre];

//})->name('home');


