<?php
//public routes
Route::get('me','User\MeController@getMe');

//get designs
Route::get('designs','Design\DesignController@index');

//get users
Route::get('users','User\UserController@index');


//Routes for authenticated users only
Route::group(['middleware'=>['auth:api']],function(){
   Route::post('logout','Auth\LoginController@logout');
   Route::put('settings/profile','User\SettingsController@updateProfile');
   Route::put('settings/password','User\SettingsController@updatePassword');

   //designs
   Route::post('designs','Designs\UploadController@upload');
   Route::put('designs/{id}','Design\DesignController@update');
   Route::delete('designs/{id}','Design\DesignController@destroy');


});

//Routes for guests only
Route::group(['middleware'=>['guest:api']],function(){
   Route::post('register','Auth\RegisterController@register');
   Route::post('verification/verify/{user}','Auth\VerificationController@verify')->name('verification.verify');
   Route::post('verification/resend','Auth\VerificationController@resend');
   Route::post('login','Auth\LoginController@login');
   Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.reset');
   Route::post('password/reset','Auth\ResetPasswordController@reset');

 

});

