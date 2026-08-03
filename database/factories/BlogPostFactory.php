<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<BlogPost>
 */
class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(5);
        $published = $this->faker->boolean();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(3, true),
            'cover_image' => null,
            'tags' => ['Laravel', 'PHP'],
            'category' => 'Backend',
            'reading_time' => $this->faker->numberBetween(3, 15),
            'published' => $published,
            'published_at' => $published ? now()->subDays($this->faker->numberBetween(1, 30)) : null,
            'views' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
