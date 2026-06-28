<?php

namespace Database\Factories;

use App\Models\Comments;
use App\Models\Jobs;
use Illuminate\Database\Eloquent\Factories\Factory;
use STR;
/**
 * @extends Factory<Comments>
 */
class CommentsFactory extends Factory
{

    protected $model = Comments::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'author' => fake()->name(),
            'content' => fake()->paragraphs(3,true),
            'jobs_id' => JobsFactory::new(),

            //
        ];
    }
}
