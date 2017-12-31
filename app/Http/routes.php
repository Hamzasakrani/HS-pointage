<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//conge
Route::post('ajouterconge','CongeController@ajouterconge');
Route::get('consulterconge','CongeController@consulterconge');
//Gestion Emprint
Route::post('ajoutEmprint','GestionPointController@ajoutEmprint');
Route::post('ajouterbout','GestionPointController@ajouterbout');
Route::post('modif','GestionPointController@modif');
Route::post('modifboutique','GestionPointController@modifboutique');
Route::get('sup/{id}','GestionPointController@sup');
Route::get('boutique','GestionPointController@ajouterboutique');
Route::get('afficheEmprint','GestionPointController@afficheEmprint');

Route::get('gestionP','GestionPointController@index');
Route::get('supboutique/{idb}','GestionPointController@supboutique');
//Gestion Horaire

Route::post('affecterplanning','HoraireController@affecterplanning');
Route::post('ajouterplanninghoraire','HoraireController@ajouterplanninghoraire');
Route::get('cong','HoraireController@cong');
Route::get('affectationplanning','HoraireController@affectationplanning');
Route::get('ajouterPlan','HoraireController@ajouterplan');
Route::get('ajouterPlanNuit','HoraireController@ajouterPlanNuit');
 Route::post('ajouterPlanning','HoraireController@ajouterPlanning');
  Route::get('consultPlanning','HoraireController@consultPlanning');
  Route::get('Planning','HoraireController@Planning');
//charts  
  Route::get('Rendement','RendementController@Rendement');
//gestion pointage
Route::get('filtre','PointageController@filter');

Route::get('pe','PointageController@pointageexep');
Route::get('consulterpointage','PointageController@consulterpointage');
Route::get('pdfview','PointageController@pdfview');
Route::get('exportPDF', 'PointageController@exportPDF');
//connexion
Route::get('connexion','ConnexionController@connexion');
Route::get('deconnexion','ConnexionController@deconnexion');
Route::get('/','ConnexionController@connexion');
Route::post('controlconnexion','ConnexionController@controlconnexion');
//contact
Route::post('contacttransmi','ContactController@contacttransmi');
Route::get('contactentrent','ContactController@contactentrent');
Route::get('contactsortent','ContactController@contactsortent');
Route::get('ajoutercontact','ContactController@ajoutercontact');
//privilege
Route::get('listeutilisateur','PrivilegeController@listeutilisateur');
Route::get('interfaceajouter','PrivilegeController@interfaceajouter');
Route::post('ajouteruser','PrivilegeController@ajouteruser');
Route::get('menu','PrivilegeController@menu');
Route::get('sousmenu','PrivilegeController@sousmenu');
Route::get('profil','PrivilegeController@profil');
Route::get('debrif','PrivilegeController@debrif');
//laravel
Route::get('home', 'HomeController@index');
Route::get('sasasa', 'WelcomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//notif
/*get('vu/{id}', function($id){

 DB::update('update messages set vu = ? where id = ?',array(1 ,$id));

return redirect('contactsortent');
});*/

Route::get('countavis', 'NotifController@countavis');
Route::get('listavis', 'NotifController@listavis');
Route::get('vu/{id}', 'NotifController@vu');
Route::get('countcontact', 'NotifController@countcontact');
Route::get('listcontact', 'NotifController@listcontact');
Route::get('utilisateur', 'NotifController@utilisateur');
//affectation
Route::get('affectationgroup', 'AffectationController@affectationgroup');
Route::get('affectationplanning', 'AffectationController@affectationplanning');
