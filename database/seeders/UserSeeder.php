<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@email.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );
        $admin->roles()->sync([Role::where('name', 'Admin')->first()->id]);

        $gerente = User::firstOrCreate(
            ['email' => 'gerente@email.com'],
            [
                'name' => 'Gerente User',
                'password' => Hash::make('password'),
            ]
        );
        $gerente->roles()->sync([Role::where('name', 'Manager')->first()->id]);

        $user = User::firstOrCreate(
            ['email' => 'user@email.com'],
            [
                'name' => 'Basic User',
                'password' => Hash::make('password'),
            ]
        );
        $user->roles()->sync([Role::where('name', 'User')->first()->id]);
    }
}
