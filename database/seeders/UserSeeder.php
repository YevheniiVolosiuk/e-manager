<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(4)->create();

//         User::factory()->create([
//             'first_name' => 'User',
//             'last_name' => 'User',
//             'email' => 'test@example.com',
//             'is_admin' => true,
//         ]);
    }
}
