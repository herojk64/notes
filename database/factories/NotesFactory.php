<?php

namespace Database\Factories;

use App\Models\Notes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Notes>
 */
class NotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->slug(),
            "body" => str::random(40),
            "slug" => fake()->slug(),
            'user_id' => User::factory()
        ];
    }
}
