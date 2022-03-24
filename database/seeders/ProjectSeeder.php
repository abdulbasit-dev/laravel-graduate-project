<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // delete all rows 
        Project::truncate();

        //get random name
        $json = file_get_contents('./names.json');
        $array = json_decode($json, true);

        foreach (range(1, 50) as $item) {
            $user_id = User::inRandomOrder()->first()->id;

            Project::firstorCreate([
                "title" => $request->title,
                "description" => $request->description,
                "project" => "/uploads/projects/$projectFile",
                "report" => "/uploads/reports/$reportFile",
                "supervisor_name" => $request->supervisor_name,
                "team_members" => $request->teams,
                "created_by" => $request->user()->id,
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
