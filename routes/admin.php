<?php

Route::prefix('admin')->middleware('guest:admin')->name('admin.')->group(function () {
    Route::get('/login', 'LoginController@getLogin');
    Route::post('/login', 'LoginController@doLogin')->name('login');
});
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/index', 'LoginController@index')->name('index');
    Route::resource('/home', 'HomeController');
    Route::resource('/about', 'AboutController');
    Route::resource('/skills', 'SkillsController');
    Route::resource('/knowledge', 'KnowledgeController');
    Route::resource('/langs', 'LangsController');
    Route::resource('/experience', 'ExperienceController');
    Route::resource('/education', 'EducationController');
    Route::resource('/portfolio', 'PortFolioController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/blog', 'BlogController');
    Route::resource('/settings', 'SettingsController');
});
