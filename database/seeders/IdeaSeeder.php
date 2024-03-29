<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //get random name
        $json = file_get_contents(base_path() . '/names.json');
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

        $stages = [
            "first",
            "second",
            "third",
            "fourth",
            "fifth",
            "sixth",
        ];

        Idea::firstorCreate([
            "title" => "Students Graduation Projects",
            "description" => " We are fourth-year students in the Department of Computer Science and IT at the College of Science.
                We designed a graduation project under the title (Design an expert system for student’s graduation
                projects of Salahaddin university)
                This system offers to build a web-based graduation project management system as well as build a
                smart database with data set and also manage and monitor activities such as the submission of
                project and idea deliverables, grades, assessments, and announcements to the system of salahaddin
                university
                This system serves the centralization of the quality assurance department in the university
                presidency.",
            "project" => "/uploads/projects/dentcare.zip",
            "report" => "/uploads/reports/dummy.pdf",
            "poster" => "/uploads/posters/poster.jpg",
            "supervisor_name" => "D. Haider Haddad",
            'is_ranked' => 1,
            "team_members" => '["Sanah", "Sozan", "Bushra"]',
            "created_by" => 5,
            "stage" => "fourth",
        ]);

        foreach (range(1, 20) as $item) {
            $user = User::whereIsStudent(1)->inRandomOrder()->first();
            $name =  Str::lower($array[rand(0, count($array) - 1)]);

            $foundProject = Idea::where('created_by', $user->id)->get();
            if (!count($foundProject)) {
                Idea::firstorCreate([
                    "title" => $titleArr[$item - 1]["text"],
                    "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.",
                    "project" => "/uploads/ideas/dentcare.zip",
                    "report" => "/uploads/reports/dummy.pdf",
                    "poster" => "/uploads/posters/poster.jpg",
                    "stage" => $stages[rand(0, count($stages) - 1)],
                    "supervisor_name" => $name,
                    "team_members" => '["Emma R. Quinn", "Karen N. Wheeler", "Herma T. Brown" , "Howard D. Fields"]',
                    "created_by" => $user->id,
                ]);

                $user->is_submited_idea = 1;
                $user->save();
            }
        }
    }
}
