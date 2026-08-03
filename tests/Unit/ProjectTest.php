<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\ProjectScreenshot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_project_via_factory(): void
    {
        $project = Project::factory()->create([
            'title' => 'Awesome App',
            'slug' => 'awesome-app',
            'featured' => true,
            'tech_stack' => ['Laravel', 'Vue.js'],
        ]);

        $this->assertDatabaseHas('projects', [
            'title' => 'Awesome App',
            'slug' => 'awesome-app',
        ]);

        $this->assertTrue($project->featured);
        $this->assertIsArray($project->tech_stack);
        $this->assertEquals(['Laravel', 'Vue.js'], $project->tech_stack);
    }

    public function test_project_has_many_screenshots_relationship(): void
    {
        $project = Project::factory()->create();

        $shot1 = ProjectScreenshot::factory()->create([
            'project_id' => $project->id,
            'caption' => 'First Shot',
            'sort_order' => 1,
        ]);

        $shot2 = ProjectScreenshot::factory()->create([
            'project_id' => $project->id,
            'caption' => 'Second Shot',
            'sort_order' => 2,
        ]);

        $this->assertCount(2, $project->screenshots);
        $this->assertEquals('First Shot', $project->screenshots->first()->caption);
    }

    public function test_project_route_key_name_is_slug(): void
    {
        $project = new Project();
        $this->assertEquals('slug', $project->getRouteKeyName());
    }

    public function test_array_casting_on_features_and_challenges(): void
    {
        $project = Project::factory()->create([
            'features' => ['Auth', 'Payments', 'Notifications'],
            'challenges' => ['Scalability', 'Security'],
            'metrics' => ['10k users'],
        ]);

        $this->assertIsArray($project->features);
        $this->assertIsArray($project->challenges);
        $this->assertIsArray($project->metrics);
        $this->assertCount(3, $project->features);
    }
}
