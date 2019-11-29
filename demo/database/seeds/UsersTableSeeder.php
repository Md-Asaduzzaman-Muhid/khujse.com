<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@team.com',
            'password' => Hash::make('a'),
        ]);
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $adminRole = Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        $admin->assignRole($superAdminRole);
        $admin->assignRole($adminRole);
    }
}
