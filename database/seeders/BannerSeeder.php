<?php

namespace Database\Seeders;

use App\Models\Banner;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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

        $faker = Factory::create();
        $titles = [
            'Explore Students Projects',
            'Find Out The best Ranked One',
            'Get Idea From Others Project',
        ];

        foreach (range(1, 3) as $banner) {
            Banner::create([
                "title" => $titles[$banner - 1],
                "description" => $faker->sentence(12),
                'image' => "uploads/banners/$banner.jpg"
            ]);
        }
    }
}
