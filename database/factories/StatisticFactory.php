<?php

namespace Database\Factories;

use App\Models\Statistic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Statistic>
 */
class StatisticFactory extends Factory
{
    protected $model = Statistic::class;

    public function definition(): array
    {
        return [
            'label' => $this->faker->words(2, true),
            'value' => (string)$this->faker->numberBetween(5, 500),
            'suffix' => '+',
            'icon' => 'code',
            'color' => 'brand',
            'sort_order' => 0,
        ];
    }
}
