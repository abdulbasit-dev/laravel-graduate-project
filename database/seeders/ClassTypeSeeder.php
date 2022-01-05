<?php

namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['CS','IT'];
        foreach ($arr as $name) {
            ClassType::firstOrCreate([
                "name"=>$name,
                'dept_id'=>6
            ]);
        }
    }
}
