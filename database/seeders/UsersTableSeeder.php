<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        // Buat pengguna dan tambahkan peran
        $superadmin = User::firstOrCreate([
            'nama' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('123'),
        ]);

        $superadmin->assignRole('Super Admin');
    }
}
