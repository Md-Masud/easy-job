<?php
//country
Route::namespace('backend')->group(function()
{
	Route::get('Country','county@Country_index')->name('country');
	Route::get('country_store','county@country_stor')->name('Counrty_stor');
	Route::post('store.ad','county@store')->name('store.add');
	Route::get('Country/delete/{id}','county@destroy')->name('Counrty.destroy');
	Route::get('editcountry/create/{id}','county@update')->name('editcountry.update');
	Route::post('country/edit/{id}','county@edit')->name('countrys.edit');
});
//category
Route::namespace('backend')->group(function()
{
	Route::get('Category.view','category@categoryindex')->name('Category.view');
	Route::get('Category.create','category@categorycreate')->name('category.create');
	Route::post('category/store','category@store')->name('category.store');
	Route::get('category/delete/{id}','category@destroy')->name('category.destroy');
	Route::get('category/update/{id}','category@update')->name('category.update');
	Route::post('category/edit/{id}','category@edit')->name('category.edit');
	Route::get('category/view/{id}','category@view')->name('index.category');
});

Route::namespace('backend')->prefix('admin')->group(function()
{
	Route::get('/','county@index')->name('admin');
	
});

//owner route
Route::namespace('frontend')->middleware('auth')->group(function()
{
	
	Route::get('personal_information.index','owner_parsonal_information@indexparsonal')->name('admin.nformation.view');
	Route::get('personal_information','owner_parsonal_information@parsonal')->name('admin.nformation');
	Route::post('personal_information_store','owner_parsonal_information@store')->name('admin.nformation.store');
	Route::get('personal_information.delete{id}','owner_parsonal_information@destroy')->name('admin.nformation.delete');
});
//job circular
Route::namespace('frontend')->group(function()
{
	
	Route::get('job.circular','job_circular@indexcircular')->name('job.circular')->middleware('auth');
	Route::get('create/job_circular','job_circular@circularview')->name('create.job.circular')->middleware('auth');
	Route::post('store.jobcircular','job_circular@store')->name('store.jobcircular')->middleware('auth');
	Route::get('jobcircular.delete{id}','job_circular@destroy')->name('jobcircular.delete')->middleware('auth');
	Route::get('jobcircular.view{id}','job_circular@view')->name('view.job.circular');
});



Route::name('admin.')->namespace('frontend')->group(function()
{
	Route::get('/','create@index')->name('index');
	Route::get('accoun', 'create@account')->name('accoun');
	Route::get('log', 'create@login')->name('log');
	Route::get('user', 'create@user')->name('users')->middleware('auth');
	Route::get('owner', 'create@company')->name('company')->middleware('auth');
	Route::get('user_personal_information','create@uinformation')->name('information');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
