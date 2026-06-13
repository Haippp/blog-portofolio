<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'category_id' => \App\Models\Category::factory(),
            'user_id'     => 1,
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'body' => fake()->paragraph(5, true)
        ];
    }
}
