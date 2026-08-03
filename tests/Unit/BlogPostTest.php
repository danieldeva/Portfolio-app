<?php

namespace Tests\Unit;

use App\Models\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_blog_post_via_factory(): void
    {
        $post = BlogPost::factory()->create([
            'title' => 'Laravel 11 Deep Dive',
            'slug' => 'laravel-11-deep-dive',
            'published' => true,
            'published_at' => now(),
        ]);

        $this->assertDatabaseHas('blog_posts', [
            'title' => 'Laravel 11 Deep Dive',
            'slug' => 'laravel-11-deep-dive',
        ]);
        $this->assertTrue($post->published);
    }

    public function test_published_scope_filters_correctly(): void
    {
        BlogPost::factory()->create([
            'title' => 'Published Post',
            'published' => true,
            'published_at' => now()->subDay(),
        ]);

        BlogPost::factory()->create([
            'title' => 'Draft Post',
            'published' => false,
            'published_at' => null,
        ]);

        BlogPost::factory()->create([
            'title' => 'Published Flag Without Date',
            'published' => true,
            'published_at' => null,
        ]);

        $publishedPosts = BlogPost::published()->get();

        $this->assertCount(1, $publishedPosts);
        $this->assertEquals('Published Post', $publishedPosts->first()->title);
    }

    public function test_route_key_name_is_slug(): void
    {
        $post = new BlogPost();
        $this->assertEquals('slug', $post->getRouteKeyName());
    }
}
