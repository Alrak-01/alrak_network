<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/developers", function(){
    $developers = [
        ['name' => 'Tunde', 'skill' => 'Html, Tailwindcss', 'id' => '1'],
        ['name' => 'Wale', 'skill' => 'TypeScript, Node js', 'id' => '2'],
        ['name' => 'Kunle', 'skill' => 'Laravel, React.js', 'id' => '3']
    ];
    
    return view("developers.index", ["developers" => $developers]);
});

Route::get("/developer/{id}", function($id) {
    return view("developers.show", ['id' => $id]);
});

Route::get("/developers/create", function(){
    return view("developers.create");
});