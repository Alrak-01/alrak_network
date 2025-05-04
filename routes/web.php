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
    
    return view("developers.index", ["developer" => $developers]);
});

Route::get("/show/{id}", function($id) {
    return view("developers.show", ['id' => $id]);
});