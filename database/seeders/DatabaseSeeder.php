<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        User::create([
            'name' => 'Ade Rahmat Maulana',
            'username' => 'adermaulana',
            'email' => 'adermaulana15@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
