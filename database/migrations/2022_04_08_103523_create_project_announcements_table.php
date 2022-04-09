<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_announcements', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->foreignId('college_id')->nullable()->constrained('colleges', 'id');
            $table->foreignId('dept_id')->nullable()->constrained('departments', 'id');
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
        Schema::dropIfExists('project_announcements');
    }
}
