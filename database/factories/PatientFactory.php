<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Enums\GenderType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'surname' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(config('system.genders')),
            'identifier' => $this->faker->numerify(),
            'blood_type' => $this->faker->randomElement(config('system.blood_types')),
            'birth_at' => $this->faker->date,
            'contact_name' => $this->faker->name(),
            'contact_phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
