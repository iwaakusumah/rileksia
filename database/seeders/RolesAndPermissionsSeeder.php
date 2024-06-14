<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat atau mendapatkan peran Super Admin
        $role = Role::firstOrCreate(['name' => 'Super Admin']);
        $permission = Permission::firstOrCreate(['name' => 'access users page']);

        // Memberikan izin kepada peran
        $role->givePermissionTo($permission);
    }
}
