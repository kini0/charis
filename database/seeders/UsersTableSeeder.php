<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        // 1 admin et 1 etchnician (emails fixes pour accès facile)
        $admins = [
            ['name' => 'Super Admin', 'email' => 'admin@exemple.com', 'role' => 'admin'],
            ['name' => 'Techician', 'email' => 'tech@exemple.com', 'role' => 'technician'],
        ];

        foreach ($admins as $admin) {
            User::create([
                'user_id' => (string) Str::uuid(),
                'name' => $admin['name'],
                'email' => $admin['email'],
                'role' => $admin['role'],
                'password' => Hash::make('password123'),
                'photo' => 'avatar-1.jpg',
            ]);
        }

        // 10 clients générés client1@exemple.com
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'user_id' => (string) Str::uuid(),
                'name' => $faker->name,
                'email' => 'client' . $i . '@exemple.com',
                'role' => 'client',
                'password' => Hash::make('password123'),
                'photo' => 'avatar-1.jpg',
            ]);
        }
    }
}
