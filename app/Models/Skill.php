<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  public $timestamps = false;
  protected $fillable = ["name", "icon"];
  protected $hidden = ['pivot'];

  public function projects() {
    return $this->belongsToMany(Project::class, 'projectskills', foreignPivotKey: "skill_id", relatedPivotKey: "project_id");
  }
}
