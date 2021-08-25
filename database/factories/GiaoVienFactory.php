<?php

namespace Database\Factories;

use App\Models\GiaoVien;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiaoVienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GiaoVien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone'=> $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'), // password
            'address'=> $this->faker->address(),
            'birthday'=> $this->faker->date(),
            'is_active'=> 1,
        ];
    }
}
