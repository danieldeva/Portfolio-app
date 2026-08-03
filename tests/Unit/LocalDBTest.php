<?php

namespace Tests\Unit;

use App\Models\LocalDB;
use Illuminate\Support\Collection;
use Tests\TestCase;

class LocalDBTest extends TestCase
{
    public function test_skills_returns_non_empty_collection(): void
    {
        $skills = LocalDB::skills();

        $this->assertInstanceOf(Collection::class, $skills);
        $this->assertNotEmpty($skills);

        $firstSkill = $skills->first();
        $this->assertObjectHasProperty('name', $firstSkill);
        $this->assertObjectHasProperty('category', $firstSkill);
        $this->assertObjectHasProperty('level', $firstSkill);
    }

    public function test_experiences_returns_collection_with_valid_items(): void
    {
        $experiences = LocalDB::experiences();

        $this->assertInstanceOf(Collection::class, $experiences);
        $this->assertGreaterThanOrEqual(1, $experiences->count());

        $firstExp = $experiences->first();
        $this->assertObjectHasProperty('company', $firstExp);
        $this->assertObjectHasProperty('role', $firstExp);
        $this->assertObjectHasProperty('technologies', $firstExp);
    }

    public function test_projects_returns_collection_with_categories(): void
    {
        $projects = LocalDB::projects();

        $this->assertInstanceOf(Collection::class, $projects);
        $this->assertNotEmpty($projects);

        foreach ($projects as $project) {
            $this->assertObjectHasProperty('title', $project);
            $this->assertObjectHasProperty('category', $project);
            $this->assertObjectHasProperty('summary', $project);
        }
    }

    public function test_stats_returns_key_metrics(): void
    {
        $stats = LocalDB::stats();

        $this->assertInstanceOf(Collection::class, $stats);
        $this->assertNotEmpty($stats);
        $this->assertTrue($stats->contains(fn($item) => $item->label === 'Years Experience'));
    }

    public function test_testimonials_returns_approved_quotes(): void
    {
        $testimonials = LocalDB::testimonials();

        $this->assertInstanceOf(Collection::class, $testimonials);
        $this->assertNotEmpty($testimonials);
        $this->assertTrue($testimonials->every(fn($item) => isset($item->author) && isset($item->quote)));
    }

    public function test_certs_returns_credentials(): void
    {
        $certs = LocalDB::certs();

        $this->assertInstanceOf(Collection::class, $certs);
        $this->assertNotEmpty($certs);
    }

    public function test_posts_returns_blog_articles(): void
    {
        $posts = LocalDB::posts();

        $this->assertInstanceOf(Collection::class, $posts);
        $this->assertNotEmpty($posts);
    }
}
