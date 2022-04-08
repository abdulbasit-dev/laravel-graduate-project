<?php

namespace Database\Seeders;

use App\Models\ProjectAnnouncement;
use Illuminate\Database\Seeder;

class ProjectAnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 6) as $item) {
            ProjectAnnouncement::create([
                "title" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?"
            ]);
        }
    }
}
