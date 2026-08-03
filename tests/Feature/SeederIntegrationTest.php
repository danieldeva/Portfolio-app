<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use App\Models\Certification;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Statistic;
use App\Models\Testimonial;
use Database\Seeders\PortfolioSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeederIntegrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_portfolio_seeder_populates_all_tables(): void
    {
        $this->seed(PortfolioSeeder::class);

        $this->assertDatabaseHas('profiles', ['email' => 'devadeva2330@gmail.com']);
        $this->assertGreaterThan(0, Statistic::count());
        $this->assertGreaterThan(0, Skill::count());
        $this->assertGreaterThan(0, Experience::count());
        $this->assertGreaterThan(0, Project::count());
        $this->assertGreaterThan(0, Testimonial::count());
        $this->assertGreaterThan(0, Certification::count());
        $this->assertGreaterThan(0, BlogPost::count());
        $this->assertEquals('Devaraju R — Laravel Developer Portfolio', Setting::get('site_title'));
    }
}
