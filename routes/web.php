<?php
# /leader-board => get => XController@leaderboard
use App\Core\Routing\Route;

Route::get('/','HomeController@index');
Route::get('/archive','ArchiveController@index');
Route::add(['get','post','put'],'/a',function (){
    echo "welcome";
});
Route::get('/b',function (){
    echo "save ok";
});
Route::put('/c',['Controller','Method']);
Route::put('/d','Controller@Method');

