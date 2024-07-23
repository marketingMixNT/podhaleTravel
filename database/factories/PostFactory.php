<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => '{}',
            'slug' => '{}',
            'thumbnail' => $this->faker->text(),
            'content' => '{}',
            'published_at' => $this->faker->dateTime(),
            'featured' => $this->faker->boolean(),
        ];
    }
}