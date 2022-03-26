<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->nullable()->constrained('colleges', 'id');
            $table->foreignId('dept_id')->nullable()->constrained('departments', 'id');
            $table->string("grant_type")->comment("0 => graduate project | 1 => idea");
            $table->integer("rank")->default(0)->comment("rank of idea or project");
            $table->string("name");
            $table->string("stage");
            $table->string("email");
            $table->string("title");
            $table->string("money");
            $table->string("sponsor");
            $table->string("time");
            $table->longText("field");
            $table->longText("teams");
            $table->longText("plan");
            $table->longText("advantage");
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
        Schema::dropIfExists('grants');
    }
}
