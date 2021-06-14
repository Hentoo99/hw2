<?php

use App\Models\lezioni_pvt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    return redirect('homepage');
});



//login
Route::get('login', 'LoginController@hasLogged');
Route::post('login', 'LoginController@login')->name('login');

//register
Route::post('login/register', 'LoginController@register')->name('register');

//logout
Route::get('logout', function(){
    Session::flush();
    return redirect('login');
})->name('logout');

//homepage
Route::get('homepage', 'HomepageController@hasLogged')->name('homepage');
Route::get('homepage/load', 'HomepageController@loadContenuti');
//weatherstack
Route::get('homepage/weather/{id}', 'HomepageController@weather');
//spotify
Route::post('homepage/spotify', 'HomepageController@spotify');

//profilo
Route::get('profilo', 'ProfileController@load')->name('profilo');

//istruttori
Route::get('istruttori', 'IstructorsController@load')->name('istruttori');
//findurpool
Route::get('findurpool', 'FindurpoolController@hasLogged')->name('findurpool');
Route::post('findurpool', 'FindurpoolController@load');
//abbonati
Route::get('page_abbonati', 'AbbonatiController@hasLogged')->name('abbonati');
Route::post('page_abbonati', 'AbbonatiController@insertAbb');
//lezioneprivata
Route::get('lezioneprivata', 'LezioneprivataController@hasLogged')->name('lezioneprivata');
Route::post('lezioneprivata','LezioneprivataController@getIstructors');
Route::post('lezioneprivata/insert', 'LezioneprivataController@insertLezione');
Route::post('lezioneprivata/delete', 'LezioneprivataController@deleteLezione');
//chisiamo
Route::get('chisiamo', 'ChisiamoController@load')->name('chisiamo');
?>