<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\College;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $arr = [
        //     "Science",
        //     "Engineering",
        //     "Agriculture Engineering Sciences",
        //     "Education",
        //     "Arts",
        //     "Languages",
        //     "Administration and Economic",
        //     "Law",
        //     "Political Science",
        //     "Basic Education",
        //     "Physical Education & Sport Sciences",
        //     "Islamic Sciences",
        //     "Fine Arts",
        //     "Education of Shaqlawa",
        //     "Education of Makhmoor"
        // ];
        $arr = [
            "Science",
            "Engineering",
            "Education",
        ];

        foreach ($arr as $name) {
            College::firstOrCreate([
                "name"=>$name
            ]);
        }
    }
}
