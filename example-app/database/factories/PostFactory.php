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
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'category_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->text(200),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(10, 20))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(10, 20)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ];
    }
}
