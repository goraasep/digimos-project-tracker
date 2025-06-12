<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => "Admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'name' => "user",
            'email' => "user@user.com",
            'password' => Hash::make('user'),
        ]);

        // Create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        // Assign role to a user
        $user = User::where('email', 'admin@admin.com')->first();
        $user->assignRole('admin');

        $user = User::where('email', 'user@user.com')->first();
        $user->assignRole('user');
    }
}
