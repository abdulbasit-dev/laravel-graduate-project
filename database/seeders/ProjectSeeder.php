<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // delete all rows 
        // Project::truncate();

        //get random name
        $json = file_get_contents('./names.json');
        $array = json_decode($json, true);

        foreach (range(1, 50) as $item) {
            $user = User::whereIsStudent(1)->inRandomOrder()->first();
            $name =  Str::lower($array[rand(0, count($array) - 1)]);

            $foundProject = Project::where('created_by',$user->id)->get();
            if(!count($foundProject)){
                Project::firstorCreate([
                    "title" => " Lorem ipsum dolor sit amet.",
                    "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.",
                    "project" => "/uploads/projects/dentcare.zip",
                    "report" => "/uploads/reports/dummy.pdf",
                    "poster" => "/uploads/posters/poster.jpg",
                    "supervisor_name" => $name,
                    "team_members" => '["Emma R. Quinn", "Karen N. Wheeler", "Herma T. Brown" , "Howard D. Fields"]' ,
                    "created_by" => $user->id,
                ]);

                $user->is_submited = 1;
                $user->save();
            }

        }

       // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
