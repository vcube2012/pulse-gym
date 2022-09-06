<?php

namespace Database\Factories;

use App\Models\Coach;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CoachFactory extends Factory
{
    protected $model = Coach::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->word(),
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->text(),
//            'phone' => $this->faker->phoneNumber(),
//            'social' => $this->faker->word(),
        ];
    }
}
