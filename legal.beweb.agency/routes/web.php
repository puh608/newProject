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
Route::view('/register',"register");
Route::view('/login',"login");

Route::post('/store',"UserController@store");
// Route::post('/logs',"UserController@logs");
Route::post('login', 'UserController@login')->name('login');
Route::get('login', 'UserController@loginpage')->name('login');
Route::get('logout', 'UserController@logout')->name('logout');
Route::get('/', 'UserController@home')->name('/');
Route::get('home', 'UserController@home')->name('home');
Route::get('home/agenda','AgendaController@index')->name('agenda');
Route::get('getagendamonth','AgendaController@getAgendaByMonth')->name('getagendamonth');
Route::post('addagenda','AgendaController@addAgenda')->name('addagenda');
Route::post('editagenda','AgendaController@editAgenda')->name('editagenda');
Route::post('deleteagenda','AgendaController@deleteAgenda')->name('deleteagenda');
Route::get('getcalendarnote','AgendaController@getAgendaByNoteIds')->name('getcalendarnote');

//Practice
Route::get('/practice/newpractice','PracticeController@newPractice')->name('newpractice');
Route::get('newpracticeshort','PracticeController@newPracticeShort')->name('newpracticeshort');
Route::get('practice/get-getters', 'PracticeController@getGetters')->name('newpractice-getgetters');
Route::get('practice/get-customers', 'PracticeController@getCustomers')->name('newpractice-getcustomers');


//Customers
Route::get('customers', 'CustomersController@index')->name('customers');
Route::get('customers/new', 'CustomersController@new')->name('customers-new');
Route::post('customers/new', 'CustomersController@newSave')->name('customers-new-save');
Route::get('customers/edit/{id}', 'CustomersController@edit')->name('customers-edit');
Route::post('customers/edit/{id}', 'CustomersController@editSave')->name('customers-edit-save');

//Contacts
Route::get('contacts', 'ContactsController@index')->name('contacts');
Route::get('contacts/new', 'ContactsController@new')->name('contacts-new');
Route::post('contacts/new', 'ContactsController@newSave')->name('contacts-new-save');
Route::get('contacts/edit/{id}', 'ContactsController@edit')->name('contacts-edit');
Route::post('contacts/edit/{id}', 'ContactsController@editSave')->name('contacts-edit-save');

//Getters
Route::get('getters', 'GettersController@index')->name('getters');
Route::get('getters/new', 'GettersController@new')->name('getters-new');
Route::post('getters/new', 'GettersController@newSave')->name('getters-new-save');
Route::get('getters/edit/{id}', 'GettersController@edit')->name('getters-edit');
Route::post('getters/edit/{id}', 'GettersController@editSave')->name('getters-edit-save');

//Contracteds
Route::get('contracteds', 'ContractedsController@index')->name('contracteds');
Route::get('contracteds/new', 'ContractedsController@new')->name('contracteds-new');
Route::post('contracteds/new', 'ContractedsController@newSave')->name('contracteds-new-save');
Route::get('contracteds/edit/{id}', 'ContractedsController@edit')->name('contracteds-edit');
Route::post('contracteds/edit/{id}', 'ContractedsController@editSave')->name('contracteds-edit-save');

//Specialists
Route::get('specialists', 'SpecialistsController@index')->name('specialists');
Route::get('specialists/new', 'SpecialistsController@new')->name('specialists-new');
Route::post('specialists/new', 'SpecialistsController@newSave')->name('specialists-new-save');
Route::get('specialists/edit/{id}', 'SpecialistsController@edit')->name('specialists-edit');
Route::post('specialists/edit/{id}', 'SpecialistsController@editSave')->name('specialists-edit-save');

//Insurance
Route::get('insurances', 'InsurancesController@index')->name('insurances');
Route::get('insurances/new', 'InsurancesController@new')->name('insurances-new');
Route::post('insurances/new', 'InsurancesController@newSave')->name('insurances-new-save');
Route::get('insurances/edit/{id}', 'InsurancesController@edit')->name('insurances-edit');
Route::post('insurances/edit/{id}', 'InsurancesController@editSave')->name('insurances-edit-save');

//InsurancePoints
Route::get('insurance-points', 'InsurancePointsController@index')->name('insurance-points');
Route::get('insurance-points/new', 'InsurancePointsController@new')->name('insurance-points-new');
Route::post('insurance-points/new', 'InsurancePointsController@newSave')->name('insurance-points-new-save');
Route::get('insurance-points/edit/{id}', 'InsurancePointsController@edit')->name('insurance-points-edit');
Route::post('insurance-points/edit/{id}', 'InsurancePointsController@editSave')->name('insurance-points-edit-save');
Route::get('insurance-points/insurances', 'InsurancePointsController@getInsurances')->name('insurance-points-insurances');

//InsuranceAgencies
Route::get('insuranceagencies', 'InsuranceAgenciesController@index')->name('insuranceagencies');
Route::get('insuranceagencies/new', 'InsuranceAgenciesController@new')->name('insuranceagencies-new');
Route::post('insuranceagencies/new', 'InsuranceAgenciesController@newSave')->name('insuranceagencies-new-save');
Route::get('insuranceagencies/edit/{id}', 'InsuranceAgenciesController@edit')->name('insuranceagencies-edit');
Route::post('insuranceagencies/edit/{id}', 'InsuranceAgenciesController@editSave')->name('insuranceagencies-edit-save');

//Banks
Route::get('banks', 'BanksController@index')->name('banks');
Route::get('banks/new', 'BanksController@new')->name('banks-new');
Route::post('banks/new', 'BanksController@newSave')->name('banks-new-save');
Route::get('banks/edit/{id}', 'BanksController@edit')->name('banks-edit');
Route::post('banks/edit/{id}', 'BanksController@editSave')->name('banks-edit-save');

//BankAgencies
Route::get('bankagencies', 'BankAgenciesController@index')->name('bankagencies');
Route::get('bankagencies/new', 'BankAgenciesController@new')->name('bankagencies-new');
Route::post('bankagencies/new', 'BankAgenciesController@newSave')->name('bankagencies-new-save');
Route::get('bankagencies/edit/{id}', 'BankAgenciesController@edit')->name('bankagencies-edit');
Route::post('bankagencies/edit/{id}', 'BankAgenciesController@editSave')->name('bankagencies-edit-save');
Route::get('bankagencies/banks', 'BankAgenciesController@getBanks')->name('bankagencies-banks');

//Interveneds
Route::get('interveneds', 'IntervenedsController@index')->name('interveneds');
Route::get('interveneds/new', 'IntervenedsController@new')->name('interveneds-new');
Route::post('interveneds/new', 'IntervenedsController@newSave')->name('interveneds-new-save');
Route::get('interveneds/edit/{id}', 'IntervenedsController@edit')->name('interveneds-edit');
Route::post('interveneds/edit/{id}', 'IntervenedsController@editSave')->name('interveneds-edit-save');

//Tribunals
Route::get('tribunals', 'TribunalsController@index')->name('tribunals');
Route::get('tribunals/new', 'TribunalsController@new')->name('tribunals-new');
Route::post('tribunals/new', 'TribunalsController@newSave')->name('tribunals-new-save');
Route::get('tribunals/edit/{id}', 'TribunalsController@edit')->name('tribunals-edit');
Route::post('tribunals/edit/{id}', 'TribunalsController@editSave')->name('tribunals-edit-save');

//Articles
Route::get('articles', 'ArticlesController@index')->name('articles');
Route::get('articles/new', 'ArticlesController@new')->name('articles-new');
Route::post('articles/new', 'ArticlesController@newSave')->name('articles-new-save');
Route::get('articles/edit/{id}', 'ArticlesController@edit')->name('articles-edit');
Route::post('articles/edit/{id}', 'ArticlesController@editSave')->name('articles-edit-save');


Route::get('area-operational', function(){ return view('areaOperational'); })->name('area-operational');
Route::get('area-training', function(){ return view('areaTraining'); })->name('area-training');

//Expensereports
Route::get('expensereports', 'ExpenseReportsController@index')->name('expensereports');
Route::get('expensereports/new', 'ExpenseReportsController@new')->name('expensereports-new');
Route::post('expensereports/new', 'ExpenseReportsController@newSave')->name('expensereports-new-save');
Route::get('drop', 'ExpenseReportsController@drop')->name('expensereports-drop');
Route::get('expensereports/edit/{id}', 'ExpenseReportsController@edit')->name('expensereports-edit');
Route::post('expensereports/edit/{id}', 'ExpenseReportsController@editSave')->name('expensereports-edit-save');


//Bank Urls
Route::get('BSN', 'BankController@bsndirect')->name('BSN');
Route::get('rhb_bank', 'BankController@rhb_bankdirect')->name('rhb_bank');
Route::get('maybank', 'BankController@maybankdirect')->name('maybank');
Route::get('cimb_bank', 'BankController@cimb_bankdirect')->name('cimb_bank');
Route::get('hong_leong_bank', 'BankController@hong_leong_bankdirect')->name('hong_leong_bank');
Route::get('public_bank', 'BankController@public_bankdirect')->name('public_bank');
Route::get('ambank', 'BankController@ambankdirect')->name('ambank');
Route::get('agrobank', 'BankController@agrobankdirect')->name('agrobank');
Route::get('bankislam', 'BankController@bankislamdirect')->name('bankislam');
Route::get('bank_rakyat', 'BankController@bank_rakyatdirect')->name('bank_rakyat');
Route::get('UOB_Bank', 'BankController@uob_bankdirect')->name('uob_bank');
Route::get('Citibank', 'BankController@citibankdirect')->name('citibank');
Route::post('banks/save', 'BankController@save')->name('save');
