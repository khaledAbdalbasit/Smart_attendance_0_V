<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Instructor::create([
            'name' => 'Khaled abd albasit',
            'email' => 'khaled@super-admin.com',
            'role' => 'super-admin',
            'password' => bcrypt('khaled@superadmin')
        ]);

        $user->assignRole('super-admin');
    }
}
