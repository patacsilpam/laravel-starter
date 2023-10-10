<?php

namespace Database\Factories;

use App\Models\Blog;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;
    public function definition(): array 
    {
        return [
            'title' => fake()->title(),
            'content' => fake()->name(),
            'user_id' => fake()->numberBetween(1,99),
            'category_id' => fake()->numberBetween(1,99), // password*/
        ];
    }
    
}
