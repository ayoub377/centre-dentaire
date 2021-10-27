<?php

use Illuminate\Support\Facades\DB;
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
    return view('layout/welcome');
});
Route::get('/Patients',function ()
{
    $data = DB::table('patients')->orderBy('created_at','DESC')->take(5)->get();
    return view('layout/patients',['data'=>$data]);
});
Route::get('/ajouterpatient','PatientController@index');
Route::post('/create','PatientController@store');
Route::get('/listepatient', function () {

    $patients = DB::table('patients')->get();

    return view('layout/listepatient', ['patients' => $patients]);
});
Route::delete('/supprimer/{id}','PatientController@destroy');
