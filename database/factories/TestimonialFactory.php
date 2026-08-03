<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'avatar' => null,
            'company_logo' => null,
            'rating' => 5,
            'body' => $this->faker->paragraph(),
            'featured' => true,
            'sort_order' => 0,
        ];
    }
}
