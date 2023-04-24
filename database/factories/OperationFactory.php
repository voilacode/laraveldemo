<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $a = rand(5,50);
        $b = rand(10,100);
        $opr = 'add';
        $result = '10.2';
        return [
            'a'=> $a,
            'b'=>$b,
            'opr'=>$opr,
            'result'=>$result
        ];
    }
}
