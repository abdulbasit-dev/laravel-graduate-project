<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Department;
use App\Models\ProjectAnnouncement;
use Illuminate\Database\Seeder;

class ProjectAnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 20) as $item) {
            $collegeId = College::inRandomOrder()->first()->id;
            $dept = Department::whereCollegeId($collegeId)->inRandomOrder()->first();
            ProjectAnnouncement::create([
                "title" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?",
                'college_id' =>  $dept->college_id,
                'dept_id' =>  $dept->id,
            ]);
        }
    }
}
