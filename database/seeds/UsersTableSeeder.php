<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@klai.com',
            'password' => Hash::make('bxtr1605')
        ]);

        $author = User::create([
            'name' => 'Auth User',
            'email' => 'Auth@klai.com',
            'password' => Hash::make('bxtr1605')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'generic@klai.com',
            'password' => Hash::make('bxtr1605')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
