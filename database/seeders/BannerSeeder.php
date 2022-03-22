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

        $titles = [
            'Explore Students Projects',
            'Find Out The best Ranked One',
            'Get Idea From Others Project',
        ];

        foreach (range(1, 3) as $banner) {
            Banner::create([
                "title" => $titles[$banner - 1],
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ",
                'image' => "uploads/banners/$banner.jpg"
            ]);
        }
    }
}
