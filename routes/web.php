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

Route::namespace('backend')->group(function()
{
    //Route::get('/','county@index')->name('admin');
    Route::get('showlogin','AdminController@showLoginForm');
    Route::get('adminlogin','AdminController@processLogin');
    Route::get('adminlogout','AdminController@processLogout')->name('adminlogout');


});
//owner auth
//owner registration
Route::namespace('Owner')->group(function()
{
    Route::get('ownerRegistration','RegistrationController@showRegisterForm')->name('ownerRegister');
    Route::post('ownerRegistration','RegistrationController@processRegister')->name('ownerRegistration');
    Route::get('ownerlogin','LoginController@showOwnerLoginForm')->name('ownerlogin');
    Route::post('ownerlogin','LoginController@adminLogin');
    Route::get('adminlogout','LoginController@adminlogout')->name('adminlogout');

});
Route::group(['middleware' => 'auth:owner'], function () {
    Route::view('/owner', 'frontend.layouts.master');
    Route::view('owner', 'frontend.layouts.master')->name('Owner');
});
//owner route
Route::namespace('frontend')->group(function()
{

    Route::get('personal_information.index','owner_parsonal_information@indexparsonal')->name('admin.nformation.view');
    Route::get('personal_information','owner_parsonal_information@parsonal')->name('admin.nformation');
    Route::post('personal_information_store','owner_parsonal_information@store')->name('admin.nformation.store');
    Route::get('personal_information.delete{id}','owner_parsonal_information@destroy')->name('admin.nformation.delete');
});
//job circular
Route::namespace('frontend')->middleware('auth:owner')->group(function()
{
    Route::get('job.circular','job_circular@indexcircular')->name('job.circular');
    Route::get('create/job_circular','job_circular@circularview')->name('create.job.circular');
    Route::post('store.jobcircular','job_circular@store')->name('store.jobcircular');
    Route::get('jobcircular.delete{id}','job_circular@destroy')->name('jobcircular.delete');
    Route::get('jobcircular.view{id}','job_circular@view')->name('view.job.circular');
    Route::get('resumes.view{id}','job_circular@ResumeView')->name('resume.view');
    Route::get('resume.view{id}','ResumeController@view')->name('r.view');
});



Route::name('admin.')->namespace('frontend')->group(function()
{
    Route::get('/','create@index')->name('index');
    Route::get('accoun', 'create@account')->name('accoun');
    Route::get('log', 'create@login')->name('log');
    Route::get('owner', 'create@company')->name('company')->middleware('auth:owner');
    Route::get('user', 'create@user')->name('users')->middleware('auth');
    Route::get('user_personal_information','create@uinformation')->name('information');
});
//Route::get('owner', 'frontend/create@company')->name('company')->middleware('auth:owner');
Route::namespace('frontend')->group(function()
{
    Route::get('circular.view{id}','create@jobView')->name('job.view');
});
// Resume
Route::namespace('frontend')->group(function()
{
    Route::get('stored.resume{id}','ResumeController@crateView')->name('resume.create');
    Route::post('store.resume','ResumeController@ResumeStore')->name('resume.store');

});
// select resume
Route::namespace('frontend')->group(function()
{
    Route::post('select.resume','SelectResumeController@SelectResumeStore')->name('select.resume');
    Route::get('select.cv','SelectResumeController@ResumeView')->name('select.resume');

});
//user auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin home page
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'backend.layouts.amaster');
    Route::view('/admin', 'backend.layouts.amaster')->name('admin');

});
//user list and owner list
Route::namespace('Admin')->group(function()
{
    Route::post('user.list','UserController@userList')->name('userList');
    Route::get('select.cv','OwnerController@ownerList')->name('ownerList');

});
Route::view('user.list', '')->name('userList');
//Admin login
Route::get('adminlogin','Admin\LoginController@showAdminLoginForm')->name('adminlogin');
Route::post('adminlogin','Admin\LoginController@adminLogin');
Route::get('adminlogout','Admin\LoginController@adminlogout')->name('adminlogout');

