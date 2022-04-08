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

        $teams = [
            [
                'name' => "Dr.Nabil",
                'image' => "uploads/teams/dr.nabil.jpg",
                'desc' => "nabil.fakhre@su.edu.krd",
            ],
            [
                'name' => "Dr.Haider",
                'image' => "uploads/teams/dr.haider.jpg",
                'desc' => "haider.haddad@su.edu.krd",
            ],
            [
                'name' => "Sanah",
                'image' => "uploads/teams/1.jpg",
                'desc' => "sccs02417@student.su.edu.krd",
            ],
            [
                'name' => "Sozan",
                'image' => "uploads/teams/2.jpg",
                'desc' => "sccs10917@student.su.edu.krd",
            ],
            [
                'name' => "Bushra",
                'image' => "uploads/teams/3.jpg",
                'desc' => "sccs11517@student.su.edu.krd",
            ],
        ];

        foreach ($teams as $team) {
            Team::create([
                "name" => $team["name"],
                "description" => $team["desc"],
                'image' => $team["image"]
            ]);
        }
    }
}
