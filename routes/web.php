<?php

use App\Core\Routing\Route;

Route::get('/','HomeController@index');

Route::get('/post','PostController@single');

Route::get('/todo/list','TodoController@list',[\App\Middleware\BlockFirefox::class,\App\Middleware\BlockIE::class]);
Route::get('/todo/add','TodoController@add');
Route::get('/todo/remove','TodoController@remove');

Route::get('/archive','ArchiveController@index');
Route::get('/archive/articles','ArchiveController@articles');
Route::get('/archive/products','ArchiveController@products');

Route::add(['get','post','put'],'/a',function (){
    echo "welcome";
});
Route::get('/b',function (){
    view('archive.index');
});

