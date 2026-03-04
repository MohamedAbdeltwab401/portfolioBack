<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Skill;

class skillsController extends Controller
{

  public function index() {
    $skills = Skill::all();
    return view("skills.index", ["skills" => $skills]);
  }
  public function createSkills() {
    return view("skills");
  }

  public function store(Request $request) {
    $name = $request->name;
    $icon = $request->icon;

    Skill::create([
      'name' => $name,
      'icon' => $icon
    ]);
  }

  public function edit($id) {
    $skill = Skill::find($id);
    return view("skills.edit", ["skills" => $skill]);
  }

  public function update(Request $request) {
    $skill = Skill::find($request->id);

    $skill->update([
      "name" => $request->name,
      "icon" => $request->icon
    ]);

    return redirect("./indexSkills");
    }
    
    public function delete($id) {
      Skill::find($id)->delete();
      return redirect("./indexSkills");
  }

  public function show() {
    $data = Skill::all();
    return response()->json($data);
  }
}
