<?php

namespace Database\Seeders;

use App\Models\Team;
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

        $names = [
            "Sara",
            "Sanah",
            "Jane",
            "Helin",
        ];

        foreach (range(1, 4) as $team) {
            Team::create([
                "name" => $names[$team - 1],
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ",
                'image' => "uploads/teams/$team.jpg"
            ]);
        }
    }
}
