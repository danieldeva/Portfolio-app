<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_portfolio_home_page_returns_200_and_renders_view(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('portfolio');
    }

    public function test_portfolio_page_contains_essential_livewire_components(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeLivewire('hero-section');
        $response->assertSeeLivewire('recruiter-video-section');
        $response->assertSeeLivewire('about-section');
        $response->assertSeeLivewire('skills-section');
        $response->assertSeeLivewire('experience-timeline');
        $response->assertSeeLivewire('projects-grid');
        $response->assertSeeLivewire('statistics-counter');
        $response->assertSeeLivewire('testimonials-carousel');
        $response->assertSeeLivewire('certification-cards');
        $response->assertSeeLivewire('blog-index');
        $response->assertSeeLivewire('contact-form');
    }
}
