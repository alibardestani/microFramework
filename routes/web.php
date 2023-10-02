<?php
# /leader-board => get => XController@leaderboard
use App\Core\Routing\Route;

Route::get('/','HomeController@index');

Route::get('/archive','ArchiveController@index');
Route::get('/archive/articles','ArchiveController@articles');
Route::get('/archive/products','ArchiveController@products');

Route::add(['get','post','put'],'/a',function (){
    echo "welcome";
});
Route::get('/b',function (){
    view('archive.index');
});