<?php

namespace Database\Seeders;

use App\Models\ProjectAnnouncement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
       // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(TeamSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(CollegeSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(ExpertSeeder::class);
        $this->call(FormSeeder::class);
        $this->call(ProjectAnnouncementSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(IdeaSeeder::class);

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
       // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
