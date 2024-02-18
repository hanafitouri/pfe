<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AmbassadeurController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DigitalbusinesscardController;
use App\Http\Controllers\EntreprisepersonnemoraleController;
use App\Http\Controllers\EntreprisepersonnephysiqueController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\PaiementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/modifier-facture/{id}',[FactureController::class, 'getfactureId']);
Route::get('/modifier-notifications/{id}',[NotificationController::class, 'getnotificationId']);
Route::get('/modifier-admin/{id}',[AdminController::class, 'getAdminId']);
Route::get('/modifier-ambassadeur/{id}',[AmbassadeurController::class, 'getAmbassadeurId']);
Route::get('/modifier-entreprise-personnephysique/{id}',[EntreprisepersonnephysiqueController::class, 'getentreprisepersonnephysiqueId']);
Route::get('/modifier-entreprise-personnemorale/{id}',[EntreprisepersonnemoraleController::class, 'getentreprisepersonnemoraleId']);
Route::get('/modifier-paiement/{id}',[PaiementController::class, 'getpaiementId']);
Route::get('/modifier-digitalbusinesscard/{id}',[DigitalbusinesscardController::class, 'getdigitalbusinesscardId']);



Route::get('/ajouter-ambassadeur', function () {
    return view('ajouter-ambassadeur');
});
Route::get('/ajouter-digitalbusinesscard', function () {
    return view('ajouter-digitalbusinesscard');
});
Route::get('/ajouter-admin', function () {
    return view('ajouter-admin');
});
Route::get('/ajouter-entreprise-personnephysique', function () {
    return view('ajouter-entreprise-personnephysique');
});
Route::get('/ajouter-entreprise-personnemorale', function () {
    return view('ajouter-entreprise-personnemorale');
});
Route::get('/ajouter-facture', function () {
    return view('ajouter-facture');
});
Route::get('/ajouter-paiement', function () {
    return view('ajouter-paiement');
});
Route::get('/ajouter-notifications', function () {
    return view('ajouter-notifications');
});


Route::post('/addAdmin',[AdminController::class, 'ajoutAdmin']);
Route::post('/addentreprise-personnephysique',[EntreprisepersonnephysiqueController::class, 'ajoutentreprisepersonnephysique']);
Route::post('/adddigitalbusinesscard',[DigitalbusinesscardController::class, 'ajoutdigitalbusinesscard']);
Route::post('/addfacture',[FactureController::class, 'ajoutfacture']);
Route::post('/addnotification',[NotificationController::class, 'ajoutnotification']);
Route::post('/addpaiement',[PaiementController::class, 'ajoutpaiement']);
Route::post('/addAmbassadeur',[AmbassadeurController::class, 'ajoutAmbassadeur']);
Route::post('/addentreprise-personnemorale',[EntreprisepersonnemoraleController::class, 'ajoutentreprisepersonnemorale']);

Route::get('/suppfacture/{id}',[FactureController::class, 'deletefacture']);
Route::get('/suppnotification/{id}',[NotificationController::class, 'deletenotification']);
Route::get('/supppaiement/{id}',[PaiementController::class, 'deletepaiement']);
Route::get('/suppdigitalbusinesscard/{id}',[DigitalbusinesscardController::class, 'deletedigitalbusinesscard']);
Route::get('/suppentreprise-personnephysique/{id}',[EntreprisepersonnephysiqueController::class, 'deleteentreprisepersonnephysique']);
Route::get('/suppentreprise-personnemorale/{id}',[EntreprisepersonnemoraleController::class, 'deleteentreprisepersonnemorale']);
Route::get('/suppAdmin/{id}',[AdminController::class, 'deleteAdmin']);
Route::get('/suppAmbassadeur/{id}',[AmbassadeurController::class, 'deleteAmbassadeur']);
Route::get('/suppcontact/{id}',[ContactController::class, 'deletecontact']);

Route::get('liste-ambassadeur',[AmbassadeurController::class,'getAmbassadeur']);
Route::get('liste-admin',[AdminController::class,'getAdmin']);
Route::get('liste-facture',[FactureController::class,'getfacture']);
Route::get('liste-paiement',[PaiementController::class,'getpaiement']);
Route::get('liste-digitalbusinesscard',[DigitalbusinesscardController::class,'getdigitalbusinesscard']);
Route::get('liste-entreprise-personnemorale',[EntreprisepersonnemoraleController::class,'getentreprisepersonnemorale']);
Route::get('liste-entreprise-personnephysique',[EntreprisepersonnephysiqueController::class,'getentreprisepersonnephysique']);
Route::get('liste-notifications',[NotificationController::class,'getnotification']);
Route::get('liste-contact',[ContactController::class,'getcontact']);

Route::get('/modifier-admin', function () {
    return view('modifier-admin');
});
Route::get('/modifier-entreprise-personnephysique', function () {
    return view('modifier-entreprise-personnephysique');
});
Route::get('/modifier-entreprise-personnemorale', function () {
    return view('modifier-entreprise-personnemorale');
});
Route::get('/modifier-facture', function () {
    return view('modifier-facture');
});
Route::get('/modifier-notifications', function () {
    return view('modifier-notifications');
});
Route::get('/modifier-paiement', function () {
    return view('modifier-paiement');
});
Route::get('/modifier-digitalbusinesscard', function () {
    return view('modifier-digitalbusinesscard');
});
Route::get('/modifier-ambassadeur', function () {
    return view('modifier-ambassadeur');
});

Route::post('/modifieradmin',[AdminController::class, 'updateAdmin']);
Route::post('/modifierfacture',[FactureController::class, 'updatefacture']);
Route::post('/modifiernotification',[NotificationController::class, 'updatenotification']);
Route::post('/modifierdigitalbusinesscard',[DigitalbusinesscardController::class, 'updatedigitalbusinesscard']);
Route::post('/modifierentreprisepersonnephysique',[EntreprisepersonnephysiqueController::class, 'updateentreprisepersonnephysique']);
Route::post('/modifierentreprisepersonnemorale',[EntreprisepersonnemoraleController::class, 'updateentreprisepersonnemorale']);
Route::post('/modifierambassadeur',[AmbassadeurController::class, 'updateAmbassadeur']);
Route::post('/modifierpaiement',[PaiementController::class, 'updatepaiement']);

