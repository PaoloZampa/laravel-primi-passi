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
    $data = [
        'name' => 'Paolo',
        'surname' => 'Zampa',
        'age' => 25
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'producer' => 'Paolo Zampa',
        'agency' => 'ZampaCorporation',
        'description' => "ZampaCorporation è un'azienda informatica statunitense che offre servizi online, con quartier generale a Mountain View in California, nel cosiddetto Googleplex. Tra la grande quantità di prodotti o servizi offerti troviamo il motore di ricerca Google, il sistema operativo Android, il sistema operativo Chrome OS e servizi web quali YouTube, Gmail, Play Store, Google Maps e molti altri.

        È una delle più importanti aziende informatiche statunitensi, nonché una delle più grandi aziende a livello globale con capitalizzazione azionaria di più di un bilione[2] di dollari (mille miliardi di dollari).[3] Possiede oltre 70 uffici in 50 Paesi[4] e ha alle proprie dipendenze 135.301 persone.
        
        Al momento è gestita con capitali privati dove i maggiori detentori di quote sono Kleiner Perkins Caufield & Byers and Sequoia Capital. A seguito di una ristrutturazione interna, dal 5 ottobre 2015 Google è una controllata della holding Alphabet."
    ];
    return view('about', $data);
});