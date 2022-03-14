<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'users_manage']);

        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'sara',
            'email' => 'sara@student.su.edu.krd',
            'college_id' => 1,
            'dept_id' => 7,
            'password' => bcrypt('password')
        ]);
        $user->assignRole('administrator');
    }
}
