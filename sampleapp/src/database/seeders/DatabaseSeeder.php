<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call RoleSeeder first to create roles
        $this->call([RoleSeeder::class]);

        // Seed users after roles exist
        $this->seedUsers();
        
        // Additional seeders
        $this->call([FakultasSeeder::class]);
    }

    private function seedUsers(): void
    {
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        $mhsEmail = 'mhs@admin.com';
        if (! User::where('email', $mhsEmail)->exists()) {
            $mhs = User::create([
                'name' => 'Mahasiswa',
                'email' => $mhsEmail,
                'password' => bcrypt('password'),
            ]);
            $mhs->assignRole('Mahasiswa');
        }

        $mhsEmail = 'dsn@admin.com';
        if (! User::where('email', $mhsEmail)->exists()) {
            $mhs = User::create([
                'name' => 'Dosen',
                'email' => $mhsEmail,
                'password' => bcrypt('password'),
            ]);
            $mhs->assignRole('Mahasiswa');
        }
    }
}