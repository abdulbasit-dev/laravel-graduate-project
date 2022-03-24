<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // delete all rows 
        User::truncate();

        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //get random name
        $json = file_get_contents('./names.json');
        $array = json_decode($json, true);


        //cretae admin user
        Role::firstorCreate(['name' => 'admin']);
        Role::firstorCreate(['name' => 'manager']);
        Role::firstorCreate(['name' => 'student']);

        //create admin user
        User::firstorCreate([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_student' => 0,
            'password' => bcrypt('password')
        ])->assignRole('admin');

        //create mangaer users
        User::firstorCreate([
            'name' => 'manager',
            'email' => 'manager@admin.com',
            'is_student' => 0,
            'password' => bcrypt('password')
        ])->assignRole('manager');

        User::firstorCreate([
            'name' => 'sara',
            'email' => 'sara@student.su.edu.krd',
            'college_id' => 1,
            'dept_id' => 7,
            'is_student' => 1,
            'password' => bcrypt('password')
        ])->assignRole('student');

        foreach (range(1, 50) as $item) {
            $name =  Str::lower($array[rand(0, count($array) - 1)]);
            $collegeId = College::inRandomOrder()->first()->id;
            $dept = Department::whereCollegeId($collegeId)->inRandomOrder()->first();

            User::firstorCreate([
                'name' => $name,
                'email' => $name . $item . '@student.su.edu.krd',
                'college_id' =>  $dept->college_id,
                'dept_id' =>  $dept->id,
                'password' => bcrypt('password')
            ])->assignRole('student');
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
