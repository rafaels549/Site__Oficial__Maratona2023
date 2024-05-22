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
         User::factory(1)->create([
            'name' => 'Davilmar',
            'email' => 'davilmar@gmail.com',
            'password' => bcrypt('davilmarveio123456')
         ]);

     

        $this->call(PageSeeder::class);

    }
}
