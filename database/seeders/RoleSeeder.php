<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessAdmin = Permission::where('name', 'access_admin')->first();
        $allPermissions = Permission::all();

        $userPermissions = Permission::whereIn('name', [
            'user_create',
            'user_read',
            'user_update',
            'user_delete'
        ])->get();
        
        $userRole = Role::firstOrCreate(['name' => 'User']);
        $userRole->permissions()->sync([$accessAdmin->id]);

        $managerRole = Role::firstOrCreate(['name' => 'Manager']);
        $managerRole->permissions()->sync(
            $userPermissions->pluck('id')->push($accessAdmin->id)
        );

        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $adminRole->permissions()->sync($allPermissions->pluck('id'));
    }
}
