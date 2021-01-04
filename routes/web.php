<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $array_dischi=config('dischi');
    $collection_dischi = collect($array_dischi);
    $nazione_inghilterra = $collection_dischi->where('nazione_artista','inghilterra');
    $nazione_italia = $collection_dischi->where('nazione_artista','italia');
    $nazione_stati_uniti = $collection_dischi->where('nazione_artista','stati uniti');


    $data = [
        'nazioni' =>[
        'Nazionalità Inglese' => $nazione_inghilterra,
        'Nazionalità Italiana' =>$nazione_italia,
        'Nazionalità Americana' =>$nazione_stati_uniti
        ]
    ];
// dd($data);
    return view('home',$data);
})->name('homepage');

Route::get('/acquista',function(){
    return view('acquista');
}) ->name('acquista');

Route::get('/contatti',function(){
    return view('contatti');
}) ->name('contatti');
