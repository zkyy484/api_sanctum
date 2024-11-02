<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seeder lainnya
        // $this->call(AnotherSeeder::class);

        // Tambahkan user dengan peran admin
        User::create([
            'name' => 'Admin User',
            'email' => 'adminuser@example.com',
            'password' => bcrypt('123'),
            'role' => 'admin',
        ]);
    }
}
