<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profile>
 */
class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'tagline' => $this->faker->sentence(),
            'bio' => $this->faker->paragraph(),
            'avatar' => null,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'linkedin_url' => 'https://linkedin.com/in/' . $this->faker->userName(),
            'github_url' => 'https://github.com/' . $this->faker->userName(),
            'resume_path' => null,
            'open_to_work' => true,
            'availability' => 'Immediately Available',
            'salary_range' => 'Competitive',
            'notice_period' => '30 Days',
            'preferred_location' => 'Remote',
            'resume_download_count' => 0,
            'visitor_count' => 0,
        ];
    }
}
