<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //since
        $since = [
            "Biology Department",
            "Chemistry Department",
            "Physics Department",
            "Mathematics Department",
            "Geology Department",
            "Computer Science and IT Department",
            "Environmental Health and Science Department"
        ];

        foreach ($since as $name) {
            Department::firstOrCreate([
                "name" => $name,
                "college_id" => 1
            ]);
        }

        $eng = [
            "Civil Engineering Department",
            "Electrical Engineering Department",
            "Mechanical and Mechatronics Engineering",
            "Architectural Engineering Department",
            "Software and Informatics Engineering",
            "Water Resources Engineering",
            "Geomatics (Surveying) Engineering",
            "Chemical and Petrochemical Engineering",
            "Aviation Engineering Department",
        ];

        foreach ($eng as $name) {
            Department::firstOrCreate([
                "name" => $name,
                "college_id" => 2
            ]);
        }

        $edu = [
            "Chemistry",
            "Mathematics",
            "Physics",
            "Biology",
            "Kurdish Language",
            "English Language",
            "Syriac Language",
            "Arabic Language",
            "Special Education",
            "Educational and Psychological Counselings"
        ];

        foreach ($edu as $name) {
            Department::firstOrCreate([
                "name" => $name,
                "college_id" => 4
            ]);
        }
    }
}
