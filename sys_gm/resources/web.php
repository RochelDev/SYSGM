<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DepartementController;


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
});

Route::get('/Apropos', function () {
    return view('PageWeb.Apropos');
});

Route::get('/louer', function () {
    return view('PageWeb.louer');
});

// Route::get('/show', [\App\Http\Controllers\AnnonceController::class, 'show']);

// Route::get('/immo', [\App\Http\Controllers\HomeController::class, 'index']);

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

// // Route::get('page',[App\Http\Controllers\AnnonceController::class, 'index'] )->except(['show']);
Route::get('immo/biens', [\App\Http\Controllers\AnnonceController::class, 'index'] )->name('annonce.index');
Route::get('immo/biens/{slug}-{annonce}', [\App\Http\Controllers\AnnonceController::class, 'show'] )->name('annonce.show')->where([
    'annonce' =>$idRegex,
    'slug' =>$slugRegex,
]);



Route::get('annonce', [\App\Http\Controllers\User\AnnonceController::class, 'index' ]);



Route::prefix('admin')->name('admin.')->group(function () {

   Route::resource('departement',\App\Http\Controllers\Admin\DepartementController::class )->except(['show']);
   Route::resource('commune',\App\Http\Controllers\Admin\CommuneController::class )->except(['show']);
   Route::resource('categorie',\App\Http\Controllers\Admin\CategorieController::class )->except(['show']);
   Route::resource('annonce',\App\Http\Controllers\Admin\AnnonceController::class )->except(['show']);

});


Route::prefix('dashboard')->name('user.')->group(function () {

    Route::resource('annonce', \App\Http\Controllers\User\AnnonceController::class )->except(['show']);
    Route::resource('visiteur', \App\Http\Controllers\VisiteurController::class )->except(['show']);
    Route::resource('contact', \App\Http\Controllers\ContactController::class )->except(['show']);
 
 });



// Route::prefix('admin')->name('admin.')->group(function () {

//     Route::get('departement',[DepartementController::class, 'index'] )->name('departement.index');
//     Route::get('departement/create',[DepartementController::class, 'create'] )->name('departement.create');
//     Route::post('departement/store',[DepartementController::class, 'store'] )->name('departement.store');
//     // Route pour montrer le formulaire d'édition d'un étudiant existant
//      Route::get('departement/{departement}/edit', [DepartementController::class, 'edit'])->name('departement.edit');
 
//  // Route pour mettre à jour un étudiant
//      Route::put('departement/{departement}', [DepartementController::class, 'update'])->name('departement.update');
 
//  // Route pour supprimer un étudiant
//      Route::delete('departement/{departement}', [DepartementController::class, 'destroy'])->name('departement.destroy');
 
//  });


// Route::prefix('/admin')->name('admin.')->controller(DepartementController::class)->group(function () {

//    Route::get('/', 'index')->name('index')->with('departements', $departements);
//     Route::get('/create', 'create')->name('create');

// });



Route::get('/dashboard/base', function () {
    return view('users.dashboard2');
})->name('base');

// Route::get('/base', function () {
//     return view('users/account');
// })->name('base');

// Route::prefix('/')->name('page.')->group(function () {

//    Route::get('/', function () { return view('PageWeb/annonces/index'); })->name('acceuil.index');
//     // Route::get('/create', 'create')->name('create');

// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('users/account');
// })->middleware(['auth', 'verified'])->name('account');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
