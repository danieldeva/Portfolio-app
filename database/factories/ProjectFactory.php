<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $title = $this->faker->words(3, true);
        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'description' => $this->faker->sentence(),
            'long_description' => $this->faker->paragraphs(2, true),
            'cover_image' => null,
            'live_url' => $this->faker->url(),
            'github_url' => 'https://github.com/example/' . Str::slug($title),
            'featured' => $this->faker->boolean(),
            'tech_stack' => ['Laravel', 'Livewire', 'TailwindCSS'],
            'features' => ['Feature 1', 'Feature 2'],
            'challenges' => ['Challenge 1'],
            'metrics' => ['Metric 1'],
            'status' => 'completed',
            'sort_order' => 0,
            'category' => $this->faker->randomElement(['saas', 'ecommerce', 'web', 'enterprise']),
        ];
    }
}
