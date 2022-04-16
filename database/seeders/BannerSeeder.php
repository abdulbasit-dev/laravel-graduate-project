<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all rows 
        Banner::truncate();

        $banners = [
            [
                "title" => "an expert system for students graduation project in salahaddin university",
                "page" => "home",
                "desc" => "a website for facilitating  the work of students and academic staff to perform their work better and easier!",
                'image' => "uploads/banners/1.jpg"
            ],
            [
                "title" => "an expert system for students graduation project in salahaddin university",
                "page" => "home",
                "desc" => "a website for facilitating  the work of students and academic staff to perform their work better and easier!",
                'image' => "uploads/banners/2.jpg"
            ],
            [
                "title" => "an expert system for students graduation project in salahaddin university",
                "page" => "home",
                "desc" => "a website for facilitating  the work of students and academic staff to perform their work better and easier!",
                'image' => "uploads/banners/3.jpg"
            ],
            [
                "title" => "Expert Systems",
                "page" => "expert",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.",
                'image' => "uploads/banners/4.jpg"
            ],
            [
                "title" => "Find Out The best Ranked One",
                "page" => "expert",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.",
                'image' => "uploads/banners/5.jpg"
            ],
            [
                "title" => "Get Idea From Others Project",
                "page" => "expert",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.",
                'image' => "uploads/banners/6.jpg"
            ],
            [
                "title" => "Explore Students Projects",
                "page" => "gallery",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.",
                'image' => "uploads/banners/7.jpg"
            ],
            [
                "title" => "Find Out The best Ranked One",
                "page" => "gallery",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.",
                'image' => "uploads/banners/8.jpg"
            ],
            [
                "title" => "Get Idea From Others Project",
                "page" => "gallery",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.",
                'image' => "uploads/banners/9.jpg"
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create([
                "title" => $banner["title"],
                "page" => $banner["page"],
                "description" => $banner['desc'],
                'image' => $banner["image"]
            ]);
        }
    }
}
