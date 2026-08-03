<?php

namespace Tests\Unit;

use App\Models\Experience;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExperienceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_an_experience_via_factory(): void
    {
        $exp = Experience::factory()->create([
            'title' => 'Senior Developer',
            'company' => 'Acme Corp',
            'is_current' => true,
        ]);

        $this->assertDatabaseHas('experiences', [
            'title' => 'Senior Developer',
            'company' => 'Acme Corp',
        ]);

        $this->assertTrue($exp->is_current);
        $this->assertInstanceOf(Carbon::class, $exp->start_date);
    }

    public function test_duration_attribute_for_months(): void
    {
        $exp = new Experience([
            'start_date' => Carbon::now()->subMonths(6),
            'end_date' => Carbon::now(),
            'is_current' => false,
        ]);

        $this->assertEquals('6 months', $exp->duration);
    }

    public function test_duration_attribute_for_years_and_months(): void
    {
        $exp = new Experience([
            'start_date' => Carbon::now()->subMonths(26),
            'end_date' => Carbon::now(),
            'is_current' => false,
        ]);

        $this->assertEquals('2y 2m', $exp->duration);
    }

    public function test_duration_attribute_for_exact_years(): void
    {
        $exp = new Experience([
            'start_date' => Carbon::now()->subMonths(24),
            'end_date' => Carbon::now(),
            'is_current' => false,
        ]);

        $this->assertEquals('2y', $exp->duration);
    }

    public function test_duration_attribute_for_current_position(): void
    {
        $exp = new Experience([
            'start_date' => Carbon::now()->subMonths(14),
            'is_current' => true,
        ]);

        $this->assertEquals('1y 2m', $exp->duration);
    }
}
