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
        $vendor = User::create([
            'name' => 'vendor',
            'email' => 'vendor@team.com',
            'password' => Hash::make('a'),
        ]);
        $user = User::create([
            'name' => 'user',
            'email' => 'user@team.com',
            'password' => Hash::make('a'),
        ]);
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $vendorRole = Role::create(['name' => 'vendor']);
        $userRole =Role::create(['name' => 'user']);
        Role::create(['name' => 'visitor']);
        $admin->assignRole($superAdminRole);
        $vendor->assignRole($vendorRole);
        $user->assignRole($userRole);
    }
}
