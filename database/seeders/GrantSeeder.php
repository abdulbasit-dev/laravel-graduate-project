<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Department;
use App\Models\Grant;
use Illuminate\Database\Seeder;

class GrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //get random name
        $json = file_get_contents('./names.json');
        $array = json_decode($json, true);

        foreach (range(1, 20) as $item) {

            $name =  $array[rand(0, count($array) - 1)] . " " . $array[rand(0, count($array) - 1)];
            $collegeId = College::inRandomOrder()->first()->id;
            $dept = Department::whereCollegeId($collegeId)->inRandomOrder()->first();

            Grant::create([
                'college_id' =>  $dept->college_id,
                'dept_id' =>  $dept->id,
                "grant_type" => $item % 2 == 0 ? 0 : 1,
                "name" => $name,
                "stage" => rand(1, 5),
                "email" => $name . $item . "@student.su.edu.krd",
                "title" => "Lorem ipsum dolor sit amet consectetur",
                "money" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!",
                "sponsor" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!",
                "time" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!",
                "field" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!",
                "teams" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!",
                "plan" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!",
                "advantage" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam animi rerum molestias quisquam, vitae officia commodi sed unde cum quas magnam repellendus vel. Hic mollitia nobis incidunt temporibus, error at!"
            ]);
        }
    }
}
