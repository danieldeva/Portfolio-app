<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Skill>
 */
class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'category' => $this->faker->randomElement(['frontend', 'backend', 'database', 'devops', 'tools']),
            'level' => $this->faker->numberBetween(60, 99),
            'confidence' => $this->faker->numberBetween(60, 99),
            'years' => $this->faker->numberBetween(1, 5),
            'icon' => 'code',
            'color' => '#8b5cf6',
            'sort_order' => 0,
            'featured' => $this->faker->boolean(),
        ];
    }
}
