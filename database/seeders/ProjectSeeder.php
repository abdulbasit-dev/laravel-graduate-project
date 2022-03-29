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

        $titleArr = [
            [
                "text" => "lorem ut aliquam iaculis, lacus"
            ],
            [
                "text" => "diam at pretium aliquet, metus"
            ],
            [
                "text" => "lobortis, nisi nibh lacinia orci,"
            ],
            [
                "text" => "Duis at lacus. Quisque purus"
            ],
            [
                "text" => "Quisque fringilla euismod enim. Etiam"
            ],
            [
                "text" => "enim. Mauris quis turpis vitae"
            ],
            [
                "text" => "velit eu sem. Pellentesque ut"
            ],
            [
                "text" => "In condimentum. Donec at arcu."
            ],
            [
                "text" => "semper pretium neque. Morbi quis"
            ],
            [
                "text" => "dictum cursus. Nunc mauris elit,"
            ],
            [
                "text" => "placerat. Cras dictum ultricies ligula."
            ],
            [
                "text" => "et, magna. Praesent interdum ligula"
            ],
            [
                "text" => "est. Nunc ullamcorper, velit in"
            ],
            [
                "text" => "sem, consequat nec, mollis vitae,"
            ],
            [
                "text" => "vitae, posuere at, velit. Cras"
            ],
            [
                "text" => "Nunc ullamcorper, velit in aliquet"
            ],
            [
                "text" => "ut aliquam iaculis, lacus pede"
            ],
            [
                "text" => "gravida mauris ut mi. Duis"
            ],
            [
                "text" => "eu tellus. Phasellus elit pede,"
            ],
            [
                "text" => "Cras sed leo. Cras vehicula"
            ],
            [
                "text" => "Donec feugiat metus sit amet"
            ],
            [
                "text" => "Donec est. Nunc ullamcorper, velit"
            ],
            [
                "text" => "elit, pretium et, rutrum non,"
            ],
            [
                "text" => "vehicula. Pellentesque tincidunt tempus risus."
            ],
            [
                "text" => "nunc nulla vulputate dui, nec"
            ],
            [
                "text" => "gravida sit amet, dapibus id,"
            ],
            [
                "text" => "Nullam suscipit, est ac facilisis"
            ],
            [
                "text" => "enim. Suspendisse aliquet, sem ut"
            ],
            [
                "text" => "risus. Nunc ac sem ut"
            ],
            [
                "text" => "eget magna. Suspendisse tristique neque"
            ],
            [
                "text" => "interdum. Sed auctor odio a"
            ],
            [
                "text" => "vel turpis. Aliquam adipiscing lobortis"
            ],
            [
                "text" => "vitae erat vel pede blandit"
            ],
            [
                "text" => "id sapien. Cras dolor dolor,"
            ],
            [
                "text" => "nisl sem, consequat nec, mollis"
            ],
            [
                "text" => "vitae odio sagittis semper. Nam"
            ],
            [
                "text" => "lacus. Etiam bibendum fermentum metus."
            ],
            [
                "text" => "erat. Sed nunc est, mollis"
            ],
            [
                "text" => "vitae purus gravida sagittis. Duis"
            ],
            [
                "text" => "nonummy ac, feugiat non, lobortis"
            ],
            [
                "text" => "velit eget laoreet posuere, enim"
            ],
            [
                "text" => "vitae velit egestas lacinia. Sed"
            ],
            [
                "text" => "faucibus. Morbi vehicula. Pellentesque tincidunt"
            ],
            [
                "text" => "lobortis, nisi nibh lacinia orci,"
            ],
            [
                "text" => "mollis dui, in sodales elit"
            ],
            [
                "text" => "ut odio vel est tempor"
            ],
            [
                "text" => "augue eu tellus. Phasellus elit"
            ],
            [
                "text" => "iaculis odio. Nam interdum enim"
            ],
            [
                "text" => "egestas a, scelerisque sed, sapien."
            ],
            [
                "text" => "non dui nec urna suscipit"
            ]
        ];

        foreach (range(1, 50) as $item) {
            $user = User::whereIsStudent(1)->inRandomOrder()->first();
            $name =  Str::lower($array[rand(0, count($array) - 1)]);

            $foundProject = Project::where('created_by',$user->id)->get();
            if(!count($foundProject)){
                Project::firstorCreate([
                    "title" => $titleArr[$item-1]["text"],
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
