<?php

namespace Database\Seeders;

use App\Models\Banner;
use Faker\Factory;
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
        $faker = Factory::create();
        foreach (range(1, 3) as $banner) {
            Banner::create([
                "title" => $faker->sentence(5),
                "description" => $faker->sentence(8),
                'image' => "uploads/banners/$banner.jpg"
            ]);
        }
    }
}
