<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Perhatikan penggunaan "Models" bukan "Model_s"

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('11111111'),
                'role' => 'admin',
            ],
            // User
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('11111111'),
                'role' => 'user',
            ],
        ]);

        // Uncomment the following lines if you want to use the User factory and create additional users.
        // User::factory(15)->create();
        // User::create([
        //     'name' => 'Yemima',
        //     'email' => 'yemima@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('12345678'),
        // ]);
    }
}
