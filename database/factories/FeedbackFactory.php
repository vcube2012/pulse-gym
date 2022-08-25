<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition(): array
    {
        return [
            'club_id' => Club::query()->inRandomOrder()->first()->id,
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'feedback' => $this->faker->word(),
            'active' => $this->faker->boolean(),
//            'answer' => $this->faker->word(),
        ];
    }
}
