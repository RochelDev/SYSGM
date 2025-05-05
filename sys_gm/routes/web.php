<?php


use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\FonctionController;
use App\Http\Controllers\Admin\MinistereController;
use App\Http\Controllers\Admin\PosteController;
use App\Http\Controllers\Admin\ProfilAccessController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\TypeMobiliteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dossier', function () {
    return view('pages.dossiers.index');
})->name('dossier');


Route::get('/home', function () {
    return view('web.page');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admindashboard')->middleware(['auth', 'verified', 'admin']);

// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admindashboard')->middleware(['auth', 'verified', 'admin']);

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin'])->prefix('/admin')->group(function () {
    Route::get('/', function () { return view('admin.index');})->name('admindashboard');
    Route::name('admin.')->group(function () {
        Route::resource('user', UserController::class )->except(['show']);
        Route::resource('ministere', MinistereController::class )->except(['show']);
        Route::resource('structure', StructureController::class )->except(['show']);
        Route::resource('poste', PosteController::class )->except(['show']);
        Route::resource('fonction', FonctionController::class )->except(['show']);
        Route::resource('agent', AgentController::class )->except(['show']);
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
