<?php

namespace App\Controllers;

class ArchiveController{
    public function index(){
        # model ...
        view("archive.index");
    }
    public function articles(){
        view("archive.articles");
    }
    public function products(){
        view("archive.products");
    }
}