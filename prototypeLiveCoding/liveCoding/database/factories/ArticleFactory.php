<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $title = $this->faker->sentence(3);

        return [
           'user_id'=>User::factory(),
           'title' => $title,
           'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(4),
            'content' => $this->faker->paragraphs(6, true),
             ];

    }
}
