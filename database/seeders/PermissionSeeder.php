<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'access_admin',
            
            'user_create',
            'user_read',
            'user_update',
            'user_delete',
            
            'role_create',
            'role_read',
            'role_update',
            'role_delete',
            
            'permission_create',
            'permission_read',
            'permission_update',
            'permission_delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
