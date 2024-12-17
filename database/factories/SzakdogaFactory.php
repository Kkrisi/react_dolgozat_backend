<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\szakdoga>
 */
class SzakdogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'szakdoga_nev' => fake('hu_HU') -> name,
            'githublink' => fake('hu_HU') -> text,
            'oldallink' => fake('hu_HU') -> text,
            'tagokneve' => fake('hu_HU') -> name
        ];
    }
}
