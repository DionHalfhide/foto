<?php



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('bezoeker/index', 'PagesController@index');
Route::get('bezoeker/{id}', 'PagesController@show');
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('albums', 'AlbumsController');
    Route::resource('photos', 'PhotosController');
});

