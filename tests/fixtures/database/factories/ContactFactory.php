<?php

namespace Patabugen\MssqlChanges\Tests\Fixtures\Database\Factories;

use Patabugen\MssqlChanges\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'Firstname' => fake()->firstName,
            'Surname' => fake()->lastName,
        ];
    }
}