<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    protected $model = Staff::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'branch_id' => Branch::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber()
        ];
    }
}
