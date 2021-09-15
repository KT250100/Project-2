<?php

namespace Database\Factories;

use App\Models\SinhVien;
use Illuminate\Database\Eloquent\Factories\Factory;

class SinhVienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SinhVien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'phone'=>$this->faker->unique()->phoneNumber(),
            'email'=>$this->faker->unique()->email(),
            'address'=>$this->faker->address(),
            'birthday'=>$this->faker->date(),
            'id_lophoc'=>rand(1,3)
        ];
    }
}
