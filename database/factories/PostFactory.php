<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->numberBetween(1,3),
            // 'category_id' => $this->faker->numberBetween(1,3),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3),
            'title' => $this->faker->sentence(mt_rand(3,7)),
            'slug' => $this->faker->slug(5),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(20,40)),
            'published_at' => now(),
        ];
    }
}
