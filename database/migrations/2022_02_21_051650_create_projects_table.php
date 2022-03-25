<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title")->comment('Project Title');
            $table->string("description")->comment('Project Description');
            $table->string('project')->nullable();
            $table->string('report')->nullable();
            $table->string('poster')->nullable();
            $table->string('supervisor_name');
            $table->string("team_members")->nullable();
            $table->foreignId('created_by')->constrained('users', 'id')->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
