<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
      Schema::create('projectskills', function (Blueprint $table) {
        $table->unsignedBigInteger('project_id');
        $table->foreign('project_id')->references('id')->on('projects');
        $table->unsignedBigInteger('skill_id');
        $table->foreign('skill_id')->references('id')->on('skills');
      });
  }


};
