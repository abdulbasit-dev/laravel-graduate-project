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
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // delete all rows 
        // User::truncate();

        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //get random name
        $json = file_get_contents(base_path() . '/names.json');
        $array = json_decode($json, true);


        //cretae admin user
        Role::firstorCreate(['name' => 'admin']);
        Role::firstorCreate(['name' => 'team']);
        Role::firstorCreate(['name' => 'teacher']);
        Role::firstorCreate(['name' => 'manager']);
        Role::firstorCreate(['name' => 'student']);
        Role::firstorCreate(['name' => 'council']);

        //create admin user
        User::firstorCreate([
            'name' => 'dr.haider',
            'email' => 'haider.haddad@su.edu.krd',
            'is_student' => 0,
            'password' => bcrypt('password')
        ])->assignRole('team');

        //create admin user
        User::firstorCreate([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_student' => 0,
            'password' => bcrypt('password')
        ])->assignRole('admin');

        //create mangaer users
        User::firstorCreate([
            'name' => 'dr.nabil',
            'email' => 'nabil.fakhre@su.edu.krd',
            'is_student' => 0,
            'password' => bcrypt('password')
        ])->assignRole('manager');

        //create council users
        User::firstorCreate([
            'name' => 'ahmad',
            'email' => 'council@su.edu.krd',
            'college_id' =>  1,
            'dept_id' =>  4,
            'is_student' => 0,
            'password' => bcrypt('password')
        ])->assignRole('council');

        $teams = [
            [
                "name" => "sanah",
                "email" => "sccs02417@student.su.edu.krd",
            ],
            [
                "name" => "sozan",
                "email" => "sccs10917@student.su.edu.krd",
            ],
            [
                "name" => "bushra",
                "email" => "sccs11517@student.su.edu.krd",
            ],
        ];

        foreach ($teams as $team) {
            User::firstorCreate([
                'name' => $team['name'],
                'email' => $team['email'],
                'college_id' => 1,
                'dept_id' => 7,
                'is_student' => 1,
                'password' => bcrypt('password')
            ])->assignRole('team');

        }


        //Teacher Seeder
        foreach (range(1, 10) as $item) {
            $name =  Str::lower($array[rand(0, count($array) - 1)]);
            $collegeId = College::inRandomOrder()->first()->id;
            $dept = Department::whereCollegeId($collegeId)->inRandomOrder()->first();

            User::firstorCreate([
                'name' => $name,
                'email' => $name . $item . '@su.edu.krd',
                'college_id' =>  $dept->college_id,
                'dept_id' =>  $dept->id,
                'password' => bcrypt('password')
            ])->assignRole('teacher');
        }
    

        //User Seeder
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



        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
