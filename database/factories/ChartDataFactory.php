<?php

namespace Database\Factories;

use App\Models\ChartData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChartDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=ChartData::class;
    public function definition()
    {
        return [
            //outputs a 5 digit number
            'amount'=>$this->faker->randomNumber(5,true),
            'month'=>$this->faker->monthName(),
            'year'=>2022

            //ChartData::factory()->count(5)->create()
            //
        ];
    }
}
