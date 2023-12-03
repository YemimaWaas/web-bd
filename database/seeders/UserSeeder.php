<?php

namespace Database\Seeders;

use App\Model_s\User;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(15)-> create();
        User::create([
            'name'=> 'Yemima',
            'email' => 'yemima@gmail.com',
            'email_verified_at'=> now(),
            'password' => Hash::make('12345678'),
        ]);
    }
}
