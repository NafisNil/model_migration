<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DB;
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
    public function definition(): array
    {
        $title = fake()->sentence;
        $slug = Str::slug($title, '-');
        return [
            //

            'name' => $title,
            'slug' => $slug,
            'excerpt' => fake()->sentence,
            'content' => fake()->sentence,
            'user_id' => DB::table('users')->inRandomOrder()->value('id'),
            'is_published' => fake()->boolean,
            'min_to_read' => fake()->randomDigit()
        ];
    }
}
