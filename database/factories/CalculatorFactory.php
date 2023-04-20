<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calculator>
 */
class CalculatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $a = rand(2,50);
        $b = rand(2,50);
        $opr = $this->faker->randomElement(['+','-','*']);
        if($opr=='+')
            $result = $a+$b;
        else if($opr=='-')
            $result = $a - $b;
        else
            $result = $a * $b;
        return [
            'a'=> $a,
            'b'=> $b,
            'opr' => $opr,
            'result'=>$result
        ];
    }
}
