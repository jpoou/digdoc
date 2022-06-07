<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    protected $model = Branch::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'type' => $this->faker->randomElement(['hospital', 'clinic']),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'schedule' => $this->faker->timezone()
        ];
    }
}
