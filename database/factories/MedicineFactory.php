<?php

namespace Database\Factories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    protected $model = Medicine::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'dose' => "{$this->faker->numberBetween(1, 10)} ml",
            'frequency' => "Cada {$this->faker->numberBetween(1, 10)} hrs",
            'duration' => "{$this->faker->numberBetween(1, 10)} semanas",
            'description' => $this->faker->text
        ];
    }
}
