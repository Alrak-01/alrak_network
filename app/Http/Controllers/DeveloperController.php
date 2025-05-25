<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stack;
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
    $stacks = Stack::all();
    return view("developers.create", ["stacks" => $stacks]);
    }

    public function save(Request $request){
    $validate = $request->validate([
        "name" => "required|string|max:255",
        "skill" => "required|integer|min:1|max:100",
        "bio" => "required|string|min:20|max:1000",
        "stack_id" => "required|exists:stacks,id",
    ]);

    Developer::create($validate);
    return redirect()->route("developer.index")->with("success", "Developer Created Successfully...");
    }

    public function destroy($id) {
    $developer = Developer::findOrFail($id);
    $developer->delete();

    return redirect()->route("developer.index")->with("success", "Developer Deleted Successfully...");
    }
}
