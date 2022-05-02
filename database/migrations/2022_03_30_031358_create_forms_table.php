<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->nullable()->constrained('colleges', 'id');
            $table->foreignId('dept_id')->nullable()->constrained('departments', 'id');
            $table->string('name')->nullable();
            $table->string('file')->nullable()->comment("the file that admin will upload from backend and show in front-end");
            $table->string('upload')->nullable()->comment("the file will be upload from front-end");
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
        Schema::dropIfExists('forms');
    }
}
