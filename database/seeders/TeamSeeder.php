<?php

namespace Database\Seeders;

use App\Models\Team;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all rows 
        Team::truncate();

        $faker = Factory::create();
        foreach (range(1,4) as $team) {
            Team::create([
                "name"=>$faker->name,
                "description"=>$faker->sentence(12),
                'image'=>"uploads/teams/$team.jpg"
            ]);

        }
    }
}
