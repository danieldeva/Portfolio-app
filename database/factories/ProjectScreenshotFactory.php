<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\ProjectScreenshot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProjectScreenshot>
 */
class ProjectScreenshotFactory extends Factory
{
    protected $model = ProjectScreenshot::class;

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'image_path' => 'screenshots/sample.png',
            'caption' => $this->faker->sentence(),
            'sort_order' => 0,
        ];
    }
}
