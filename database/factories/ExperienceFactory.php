<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Experience>
 */
class ExperienceFactory extends Factory
{
    protected $model = Experience::class;

    public function definition(): array
    {
        $isCurrent = $this->faker->boolean();
        $startDate = $this->faker->dateTimeBetween('-4 years', '-1 year');
        $endDate = $isCurrent ? null : $this->faker->dateTimeBetween($startDate, 'now');

        return [
            'title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'company_url' => $this->faker->url(),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate ? $endDate->format('Y-m-d') : null,
            'is_current' => $isCurrent,
            'description' => $this->faker->paragraph(),
            'achievements' => [$this->faker->sentence(), $this->faker->sentence()],
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'TailwindCSS'],
            'employment_type' => 'Full-time',
            'sort_order' => 0,
        ];
    }
}
