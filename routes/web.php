<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'visitor'],function(){

    Route::get('register','RegistrationController@register');
    Route::post('register','RegistrationController@postRegister');
    
    Route::get('login','LoginController@login')->name('login');
    Route::post('login','LoginController@postlogin');

    Route::get('/forgot-password','ForgotPasswordController@forgotPassword');
    Route::post('/forgot-password','ForgotPasswordController@postForgotPassword');
    Route::get('reset/{email}/{activationCode}','ForgotPasswordController@resetPassword');
    Route::post('reset/{email}/{activationCode}','ForgotPasswordController@PostresetPassword');
    
});
Route::post('logout','LoginController@logout');

    
Route::get('earning','AdminController@earning')->middleware('admin');
Route::get('activation/{email}/{activationCode}','ActivationController@activation');


Route::post('file-upload','FileUploadController@index')->name('file-upload');
Route::get('/upload-to-dropbox','DropboxController@uploadToDropbox');
Route::post('/upload_to_dropbox','DropboxController@uploadToDropboxFile');
Route::post('/upload_to_dropbox','DropboxController@uploadToDropboxFile');

Route::post('/post-create','PostController@createPost');




if(Request::is('frontend/*'))
{
    require __DIR__.'/frontend_routes.php';
}

if(Request::is('admin/*'))
{
    require __DIR__.'/admin_routes.php';
}