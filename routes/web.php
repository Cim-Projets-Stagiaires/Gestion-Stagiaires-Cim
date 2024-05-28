<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrombinoController;

Route::get('Voir/{id}', [StagiairesController::class, 'voir']);
Route::get('/index', [StagiairesController::class, 'read'])->name('index');
Route::get('/listedatent', [StagiairesController::class, 'liste']);
Route::get('Delete/{id}', [StagiairesController::class, 'delete']);
Route::get('Update/{id}', [StagiairesController::class, 'update']);
Route::get('Update/traitement', [StagiairesController::class, 'updatestagiaire_traitement']);
Route::get('add',  function () {
    return view('add');
});

Route::post('ajouter', [StagiairesController::class, 'add']);
Route::post('update/{id}', [StagiairesController::class, 'update']);
Route::get('validationStagire/{id}', [StagiairesController::class, 'validationStagire']);
Route::get('cancelStagire/{id}', [StagiairesController::class, 'cancelStagire']);

Route::get('/nextStagiaire/{id}', [StagiairesController::class, 'next']);
Route::get('/previousStagiaire/{id}', [StagiairesController::class, 'previous']);
Route::get('/search', [StagiairesController::class, 'search']);
Route::get('/viewReport/{id}', [StagiairesController::class, 'viewReport']);
Route::get('/',  function () {
    return view('page');
});

Route::post('/semi-rapport-de-stage/{id}', [StagiairesController::class, 'semi Rapport de Stage'])->name('semi Rapport de Stage');

Route::post('/rapport-finale-de-stage/{id}', [StagiairesController::class, ' Rapport finale de Stage'])->name('Rapport finale de Stage');

Route::post('/assurance/{id}', [StagiairesController::class, ' assurance'])->name('assurance');

// Using controller classes
Route::get('/trombino', [TrombinoController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    // Routes that require authentication
    Route::get('/index', [StagiairesController::class, 'read']);
    // Route::get('/add', [StagiairesController::class, 'showForm']);
    Route::get('/trombino', [TrombinoController::class, 'index']);
    Route::get('/Voir', [StagiairesController::class, 'voir']);
    Route::get('/aaddadmin', [StagiairesController::class, 'addadmin']);

    // Add other authenticated routes here
});

// Other routes that don't require authentication

Route::post('/profile/upload-picture', [ProfileController::class, 'uploadPicture'])->name('profile.uploadPicture');
Route::get('/download-pdf', [StagiairesController::class, 'downloadPDF'])->name('download-pdf');

// Routes for login and logout (outside the middleware group)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// ...

Route::get('/user/profile', [ProfileController::class, 'read'])->name('profile.read'); // This is the route for the profile
Route::get('/user/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Update the user's profile information
Route::post('/user/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Delete the user's account
Route::post('/user/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/user/profile/show', [ProfileController::class, 'show'])->name('profile.show');
// ...
Route::get('/index', [StagiairesController::class, 'index']);

Route::get('/index/page/{page}', [StagiairesController::class, 'index'])->where('page', '[0-9]+');
Route::get('/download-pdf', [StagiairesController::class, 'downloadPDF'])->name('download-pdf');
Route::get('/footer', function () {
    return view('footer');
});


Route::get('/generate-attestation/{id}', [StagiairesController::class, 'generateAttestation'])->name('generateAttestation');
Route::get('/generate-convention/{id}', [StagiairesController::class, 'generateConvention'])->name('generateConvention');

Route::get('/profile', [StagiairesController::class, 'viewProfile'])->name('viewProfile');
// Add these lines to your routes/web.php file
Route::get('/view-cv/{id}', [StagiairesController::class, 'viewCV'])->name('view.cv');
Route::get('/view-demande/{id}', [StagiairesController::class, 'viewDemande'])->name('view.demande');

// Add a route for searching profiles on the profile page
Route::get('/searchProfile', [StagiairesController::class, 'searchProfile'])->name('searchProfile');
Route::get('/searchByPole', [StagiairesController::class, 'searchByPole'])->name('searchByPole');
// routes/web.php
Route::get('/search', [StagiairesController::class, 'search'])->name('search');
Route::get('/searchlistdattent', [StagiairesController::class, 'searchlistdattent'])->name('searchlistdattent');
// Add this to your routes/web.php or routes/api.php
Route::get('/download-pdf/{id}', [StagiairesController::class, 'generatePDF']);


Route::post('/ajouterstagiaireadmin', [StagiairesController::class, 'addadmin']);
Route::get('/addadmin', function () {
    return view('addadmin');
});
// Update Stagiaire Form
Route::get('/stagiaires/{id}/edit', [StagiairesController::class, 'edit'])->name('stagiaires.edit');

// Update Stagiaire
Route::put('/stagiaires/{id}', [StagiairesController::class, 'update'])->name('stagiaires.update');

Route::post('/stagiaires/{id}/update-assurance', [StagiairesController::class, 'updateAssurance'])->name('stagiaires.update-assurance');
