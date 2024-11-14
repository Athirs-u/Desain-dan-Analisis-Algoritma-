<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call individual seeders

        // Seed users
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createmany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Customer',
                    'email' => 'cst@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Gudang',
                    'email' => 'gdg@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Kasir',
                    'email' => 'ksr@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                    }
                }
            }
        }

            private function callSeeders(): void {
                $this->call([
                    RoleSeeder::class,
                    TokoSeeder::class,
                ]);

            }
        }