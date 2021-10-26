<?php

namespace Database\Factories;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asset::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'bank' => $this->faker->sentence(rand(2, 4)),
            'cpte_number' =>$this->faker->randomNumber(2, false),
            'amount' => $this->faker->numberBetween($min = 800, $max = 100000),
            'init_value' => $this->faker->numberBetween($min = 900, $max = 10000),
            'resid_value' => $this->faker->numberBetween($min = 500, $max = 8000),
            'estim_value' => $this->faker->numberBetween($min = 1000, $max = 15000),
            'desc' => $this->faker->text(),
            'adress' => $this->faker->address,
            //
        ];
    }
}
