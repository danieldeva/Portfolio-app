<?php

namespace Tests\Unit;

use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_profile_via_factory(): void
    {
        $profile = Profile::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'open_to_work' => true,
        ]);

        $this->assertDatabaseHas('profiles', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $this->assertTrue($profile->open_to_work);
        $this->assertIsBool($profile->open_to_work);
    }

    public function test_main_method_returns_or_creates_default_profile(): void
    {
        $profile = Profile::main();

        $this->assertInstanceOf(Profile::class, $profile);
        $this->assertEquals('Devaraju R', $profile->name);
        $this->assertEquals('devadeva2330@gmail.com', $profile->email);

        // Calling main again should return the existing record
        $sameProfile = Profile::main();
        $this->assertEquals($profile->id, $sameProfile->id);
    }

    public function test_profile_fillable_attributes(): void
    {
        $data = [
            'name' => 'Jane Smith',
            'tagline' => 'Full Stack Engineer',
            'bio' => 'Sample bio content',
            'email' => 'jane@example.com',
            'phone' => '+123456789',
            'location' => 'Remote',
            'linkedin_url' => 'https://linkedin.com/in/janesmith',
            'github_url' => 'https://github.com/janesmith',
            'open_to_work' => false,
            'availability' => 'Notice 2 Weeks',
            'salary_range' => '$100k-$120k',
            'notice_period' => '14 Days',
            'preferred_location' => 'Remote',
            'resume_download_count' => 5,
            'visitor_count' => 10,
        ];

        $profile = Profile::create($data);

        $this->assertEquals('Jane Smith', $profile->name);
        $this->assertFalse($profile->open_to_work);
    }
}
