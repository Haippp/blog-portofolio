<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Haiper Alexander',
            'email' => 'haiper@example.com',
        ]);

        \App\Models\Category::factory(5)->create();
        \App\Models\Post::factory(20)->create([
            'category_id' => \App\Models\Category::all()->random()->id,
            'user_id'     => $user->id
        ]);
    }
}
