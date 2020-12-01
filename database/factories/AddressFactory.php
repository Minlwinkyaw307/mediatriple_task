<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, User::count()),
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'district' => $this->faker->state,
            'street' => $this->faker->streetName,
            'apartment_name' => $this->faker->name,
            'apartment_number' => $this->faker->buildingNumber,
            'full_address' => $this->faker->address
        ];
    }
}
