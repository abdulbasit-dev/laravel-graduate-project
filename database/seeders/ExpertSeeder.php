<?php

namespace Database\Seeders;

use App\Models\Expert;
use Illuminate\Database\Seeder;

class ExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experts = [
            [
                "title" => "4th class Project  Sample - writing Desigen.docx",
                "file" => "uploads/experts/4th class Project  Sample - writing Desigen.docx",
            ],
            [
                "title" => "4th student project.pptx",
                "file" => "uploads/experts/4th student project.pptx",
            ],
            [
                "title" => "Grant Project",
                "file" => "uploads/experts/grant-project.jpg",
            ],
            [
                "title" => "Grant Idea",
                "file" => "uploads/experts/grant-idea.jpg",
            ],
        ];

        foreach ($experts as $expert) {
            Expert::create($expert);
        }
    }
}
