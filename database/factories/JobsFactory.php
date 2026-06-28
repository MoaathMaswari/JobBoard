<?php

namespace Database\Factories;

use App\Models\Jobs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Jobs>
 */
class JobsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'publisher' => fake()->name(),
            'description' => fake()->paragraphs(3,true),
            'published' => fake()->boolean(),
            //
        ];
    }
}
