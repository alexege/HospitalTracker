<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Doctor
Route::get('/doctor', 'DoctorController@index')->name('doctor');

//Receptionist
Route::get('/receptionist', 'ReceptionistController@index')->name('receptionist');

//Check-In Button
Route::get('/receptionist/patientid', 'ReceptionistController@patientid');

//Example
Route::get('/patient', 'PatientController@index')->name('patient');

Route::get('/checkin/{id}', 'ReceptionistController@checkin');

Route::post('/checkin/{id}', 'ReceptionistController@completecheckin');

Route::get('/receptionist/patientid', array('as' => 'patientData', function(){
    return 'This was a test';
}));

Route::post('verify', function(){
    return 'Form was posted';
});

Route::get('/treat/{id}','DoctorController@treat');

Route::post('/treat/{id}', 'DoctorController@submitTreatment');


// Route::get('/test', function(){
//     $patients = App\Patient::all();
//     foreach($patients as $patient){
//          echo $patient->id . ' ' . $patient->name . ' ' . $patient->provider . '<br>';
//     }
//     return view('patientData', ['id' => '1'], ['name' => 'Sarah'], ['provider' => 'Delta']);
// });