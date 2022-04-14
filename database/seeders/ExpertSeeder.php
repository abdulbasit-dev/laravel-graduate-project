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
                "title" => "Grant Project (image)",
                "file" => "uploads/experts/grant-project.jpg",
            ],
            [
                "title" => "Grant Idea Image",
                "file" => "uploads/experts/grant-idea.jpg",
            ],
            [
                "title" => "Grant-template.pptx",
                "file" => "uploads/experts/Grant-template.pptx",
            ],
            [
                "title" => "Title-of-research-project-temp-ku.pptx",
                "file" => "uploads/experts/Title-of-research-project-temp-ku.pptx",
            ],
            [
                "title" => "Send Student Name (image)",
                "file" => "uploads/experts/viber_image_2022-03-03_14-26-15-200.jpg",
            ],
            [
                "title" => "Project Board (image)",
                "file" => "uploads/experts/viber_image_2022-03-03_14-26-16-057.jpg",
            ],
        ];

        foreach ($experts as $expert) {
            Expert::create($expert);
        }
    }
}
