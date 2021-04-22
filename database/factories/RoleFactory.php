<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
    {
        //Laravel Faker, Laravel Factories
        return [
            'name' => $this->faker->name
        ];
    }
}
