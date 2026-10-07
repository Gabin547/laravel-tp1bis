<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\magasinC;


Route::get('/', [magasinC::class, 'index']);
// Appel méthode index du contrôleur magasinC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/


Route::get('/consulter', [magasinC::class, 'all'])->name('consulter');
// Appel méthode all du contrôleur magasinC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/consulter
// nom donné à la route pour utiliser redirection lors de la création d'un nouveau produit


Route::get('/ajouter', [magasinC::class, 'newm']);  
// Appel méthode newp du contrôleur produitC à partir de l'url
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/ajouter
// => Form de saisie d'un nouveau produit



Route::post('ajoutersave', [magasinC::class, 'newsave']);  
// Appel méthode newsave du contrôleur à partir de l'url 
// => Traitement des données du form de saisie d'un nouveau produit


Route::post('consulterMag', [magasinC::class, 'allMag']);

Route::get('/consulterVille', [magasinC::class, 'allVille']);
