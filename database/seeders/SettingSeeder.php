<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Setting::firstOrCreate([
            "name" => "project_upload",
            "value" => 1,
        ]);

        Setting::firstOrCreate([
            "name" => "idea_upload",
            "value" => 1,
        ]);
    }
}
