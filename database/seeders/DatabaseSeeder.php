<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Contact::factory()->create([
        //     'name' => 'Test User',
        //     'company' => 'Test Company',
        //     'phone' => '09123456789',
        //     'email' => 'test@samepl.com',
        // ]);
        $this->call([
            ContactSeeder::class
        ]);
    }
}
