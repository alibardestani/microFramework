<?php
# /leader-board => get => XController@leaderboard
use App\Core\Routing\Route;

Route::get('/',function (){
    echo "welcome";
});
Route::get('/null');
Route::post('/saveform',function (){
    echo "save ok";
});
Route::put('/pururi',['Controller','Method']);
Route::put('/pururi','Controller@Method');

