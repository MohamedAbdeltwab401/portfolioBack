<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Projectskill;
use File;
use Illuminate\Http\Request;
use DB;
class projectController extends Controller
{

  public function index() {
    return view("index", ["projects" => Project::with("skills")->get()]);
  }
    public function create() {
    $skills = Skill::all();
    return view("projects.project", ["skills" => $skills]);
  }

  public function store(Request $request) {
    $file = $request->file("image");
    $imageName = $request->name.".".$file->extension();

    $id = Project::create([
      "name" => $request->name,
      "image" => $imageName,
      'url' => $request->url
    ])->id;


    $file->move(public_path("images"), $imageName);

    $project = Project::find($id);
    $project->skills()->attach($request->skills);

    return redirect('./index');
  }

  public function edit($id) {
    $project = Project::find($id);
    $skills = Skill::with("projects")->get();
    return view("projects.edit", [
      "project" => $project,
      "skills" => $skills
    ]);
  }

  public function update(Request $request) {
    $request->validate([
      "name" => 'required',
      "url" => "required"
    ]);

    $oldImage = Project::find($request->id)->get("image");
    $imageName = $oldImage[0]->image;
    if ($request->has("image")) {
      $file = $request->file("image");
      $imageName = $request->name.".".$file->extension();

      if(file_exists("images/".$oldImage[0]->image)) {
        File::delete(public_path("images/".$oldImage[0]->image));

        $file->move(public_path("images"), $imageName);
      };
    }

    Project::where("id", $request->id)->update([
      "name" => $request->name,
      "image" => $imageName,
      'url' => $request->url
    ]);

    $project = Project::find($request->id);
    $project->skills()->sync($request->skills);

    return redirect('./index');
  }

  public function delete($id) {
    $project = Project::find($id);
    $project->delete();
    $project->skills()->detach();

    return redirect("./index");
  }

  public function show() {
    // Model
    $data = Project::with("skills")->get();

    foreach ($data as $value) {
      $value->image = asset("images/$value->image");
    }


    // ====================

    // Query Builder
    // $data = DB::table("projects")
    // ->select(["projects.id", "image", "projects.name", "skills.name As skill", "url"])
    // ->join("projectskills",
    // "projects.id",
    // "=",
    // "projectskills.project_id") 
    // ->join("skills",
    // "skills.id",
    // "=",
    // "projectskills.skill_id")
    // ->get();

    // $projects = [];
    // foreach ($data as $value) {
    //   $key = $value->id;

    //   if (!isset($projects[$key])) {
    //     $projects[$key] = [
    //       "name" => $value->name,
    //       "image" => asset("images/$value->image"),
    //       "url" => $value->url,
    //       "skills" => []
    //     ];
    //   }

    //   $projects[$key]["skills"][] = $value->skill;
    // }

    return response()->json($data);
  }

}
