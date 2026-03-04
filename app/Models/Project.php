<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public $timestamps = false;
  protected $fillable = ["name", "image", "url"];
  protected $hidden = ['pivot'];
  public function skills() {
  return $this->belongsToMany(Skill::class, 'projectskills', foreignPivotKey: "project_id", relatedPivotKey: "skill_id");
}
}
