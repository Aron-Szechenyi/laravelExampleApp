<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'companyName' => $this->faker->company,
            'taxNumber' => $this->faker->postcode, //this looks tax number enough
            'phoneNumber' => $this->faker->phoneNumber,
            'emailAddress' => $this->faker->companyEmail,
        ];
    }
}
