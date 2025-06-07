<?php


use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PosteController;
use App\Http\Controllers\Admin\FonctionController;
use App\Http\Controllers\DrscTraitementController;
use App\Http\Controllers\Admin\MinistereController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\DossierControllertraitement;
use App\Http\Controllers\Admin\ProfilAccessController;
use App\Http\Controllers\Admin\TypeMobiliteController;
use App\Http\Controllers\OrdonnateurTraitementController;


Route::get('/', function () {
    return view('web.index');
})->name('home');

Route::get('/dossier', function () {
    return view('pages.dossiers.index');
})->name('dossier');


Route::get('/home', function () {
    return view('web.index');
});


Route::get('/about', function () {
    return view('web.about');
})->name('about');

Route::get('/services', function () {
    return view('web.services');
})->name('services');

Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admindashboard')->middleware(['auth', 'verified', 'admin']);

// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admindashboard')->middleware(['auth', 'verified', 'admin']);

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/switch-profil', [ProfilController::class, 'switch'])->name('switch.profil');





Route::resource('demande', DemandeController::class)->middleware(['auth', 'verified']);
Route::get('demande/showdetails/{demande}', [DemandeController::class,'showdetails'])->name('demande.showdetails')->middleware(['auth', 'verified']);
// Route::resource('agent', AgentController::class )->middleware(['auth', 'verified'])->except(['show']);
Route::resource('agent', AgentController::class )->except(['show']);


Route::resource('dossier', DossierController::class)->middleware(['auth', 'verified']);
Route::get('dossier/showdetails/{dossier}', [DossierController::class,'showdetails'])->name('dossier.showdetails')->middleware(['auth', 'verified']);
Route::get('dossier_reçus/showdetails/{dossier}', [DossierController::class,'showdetails'])->name('dossier.reçus.showdetails')->middleware(['auth', 'verified']);
Route::get('dossier_encours/showdetails/{dossier}', [DossierController::class,'showdetails'])->name('dossier.encours.showdetails')->middleware(['auth', 'verified']);
Route::get('validations/showdetails/{dossier}', [DossierController::class,'showdetails'])->name('dossier.validation.showdetails')->middleware(['auth', 'verified']);
Route::get('historique_transfert/showdetails/{dossier}', [DossierController::class,'showdetails'])->name('dossier.transfert.showdetails')->middleware(['auth', 'verified']);




Route::get('dossiers',[DossierControllertraitement::class,'index'])->name('traitement.index')->middleware(['auth', 'verified']);
Route::get('dossiers_en_cours', [DossierControllertraitement::class,'encours'])->name('traitement.encours')->middleware(['auth', 'verified']);
Route::get('dossiers_reçus',[DossierControllertraitement::class,'dossierReçus'])->name('dossier.reçus')->middleware(['auth', 'verified']);
Route::get('historique_transfert',[DossierControllertraitement::class,'dossierTransfert'])->name('dossier.transfert')->middleware(['auth', 'verified']);
Route::get('validations',[DossierControllertraitement::class,'validations'])->name('dossier.validation')->middleware(['auth', 'verified']);



// Routes pour l'ordonnateur
Route::name('ordonnateur.')->group(function () {
    Route::get('/ordonnateur/dossiers', [OrdonnateurTraitementController::class, 'index'])->name('dossier.index');
    Route::post('/ordonnateur/traitement/{dossier}/traiter', [OrdonnateurTraitementController::class, 'traiter'])->name('traiter');
    Route::post('/ordonnateur/traitement/{dossier}/valider', [OrdonnateurTraitementController::class, 'valider'])->name('valider');
    Route::post('/ordonnateur/traitement/{dossier}/soumettre', [OrdonnateurTraitementController::class, 'soumettre'])->name('soumettre');
    Route::post('/ordonnateur/traitement/{dossier}/differer', [OrdonnateurTraitementController::class, 'differerDossier'])->name('differer');
    Route::get('/ordonnateur/traitement/{dossier}/ajouter-fichiers', [OrdonnateurTraitementController::class, 'formulaireAjouterFichiers'])->name('fichiers.form');
    Route::post('/ordonnateur/traitement/{dossier}/ajouter-fichiers', [OrdonnateurTraitementController::class, 'ajouterFichiers'])->name('fichiers.ajouter');

});


// Routes pour le DRSC
Route::name('drsc.')->group(function () {
    Route::post('/drsc/traitement/{dossier}/traiter', [DrscTraitementController::class, 'traiter'])->name('traiter');
    Route::post('/drsc/traitement/{dossier}/valider', [DrscTraitementController::class, 'valider'])->name('valider');
    Route::post('/drsc/traitement/{dossier}/soumettre', [DrscTraitementController::class, 'soumettre'])->name('soumettre');
    Route::post('/drsc/traitement/{dossier}/differer', [DrscTraitementController::class, 'differerDossier'])->name('differer');
    Route::get('/drsc/traitement/{dossier}/ajouter-fichiers', [DrscTraitementController::class, 'formulaireAjouterFichiers'])->name('fichiers.form');
    Route::post('/drsc/traitement/{dossier}/ajouter-fichiers', [DrscTraitementController::class, 'ajouterFichiers'])->name('fichiers.ajouter');
});




Route::middleware(['auth', 'verified', 'admin'])->prefix('/admin')->group(function () {
    Route::get('/', function () { return view('admin.index');})->name('admindashboard');
    Route::name('admin.')->group(function () {
        Route::resource('user', UserController::class )->except(['show']);
        Route::resource('ministere', MinistereController::class )->except(['show']);
        Route::resource('structure', StructureController::class )->except(['show']);
        Route::resource('poste', PosteController::class )->except(['show']);
        Route::resource('fonction', FonctionController::class )->except(['show']);
        Route::resource('profil', ProfilAccessController::class )->except(['show']);
        Route::resource('type_mobilite', TypeMobiliteController::class )->except(['show']);
    });


});

// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admindashboard')->middleware(['auth', 'verified', 'admin']);

// Route::get('/users', function () {
//     return view('users.index');
// })->middleware(['auth', 'verified'])->name('user');


Route::get('/userhome', function () {
    return view('users.user');
})->middleware(['auth', 'verified'])->name('userUser');



//route vers dashboard

// Route::view('/user', 'users.index')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth', 'verified', 'profilAccess'])->group(function () {
// });




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';





