<?php

use App\Livewire\Settings\Profile;
use App\Http\Controllers\Admin\MinistereController;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin'])->prefix('/admin')->group(function () {
    Route::get('/', function () { return view('admin.index');})->name('admindashboard');
    Route::name('admin.')->group(function () {
        Route::resource('ministere', MinistereController::class )->except(['show']);
    });
    // Route::get('ministeres', [MinistereController::class, 'index'])->name('admin.ministere.index');
    // Route::get('ministeres/create', [MinistereController::class, 'create'])->name('admin.ministere.create');
    // Route::post('ministeres', [MinistereController::class, 'store'])->name('admin.ministere.store');
    // Route::get('ministeres/{ministere}/edit', [MinistereController::class, 'edit'])->name('admin.ministere.edit');
    // Route::put('ministeres/{ministere}', [MinistereController::class, 'update'])->name('admin.ministere.update');
    // Route::delete('ministeres/{ministere}', [MinistereController::class, 'destroy'])->name('admin.ministere.destroy');

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
