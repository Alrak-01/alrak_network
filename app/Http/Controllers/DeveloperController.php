<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Developer;

class DeveloperController extends Controller
{
    public function index() {
    $developers = Developer::with("stack")->orderBy("created_at", "desc")->paginate(10);
    return view("developers.index", ["developers" => $developers]);
    }

    public function show($id) {
    $developer = Developer::with("stack")->findorFail($id);
    return view("developers.show", ['developer' => $developer]);
    }

    public function create() {
    return view("developers.create");
    }
}
