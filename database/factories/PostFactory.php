<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'thumbnail' => 'https://source.unsplash.com/random/200x200?sig=incrementingIdentifier',
            'content' => $this->faker->text(5000),
            'status' => $this->faker->randomElement(['draft', 'publish']),
        ];
    }
}
