<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate the user table
        User::truncate();

        //Truncate the role_user as well
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $userRole = Role::where('name', 'user')->first();

        //Create Users

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@klai.tech',
            'password' => Hash::make('bxtr1605')
        ]);

        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@klai.tech',
            'password' => Hash::make('bxtr1605')
        ]);

        $user = User::create([
            'name' => 'User User',
            'email' => 'user@klai.tech',
            'password' => Hash::make('bxtr1605')
        ]);

        //Assined a role to the user
        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $user->roles()->attach($userRole);

    }
}
