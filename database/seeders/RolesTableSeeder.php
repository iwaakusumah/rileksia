<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Role::where('name', 'Super Admin')->count() == 0) {
            Role::create(['name' => 'Super Admin']);
        }

        if (Role::where('name', 'Admin')->count() == 0) {
            Role::create(['name' => 'Admin']);
        }
    }
}
