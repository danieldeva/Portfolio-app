<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class ProjectsGridLivewireTest extends TestCase
{
    public function test_projects_grid_renders_successfully(): void
    {
        Livewire::test('projects-grid')
            ->assertStatus(200)
            ->assertSet('activeCategory', 'all')
            ->assertSet('search', '')
            ->assertSee('SaaS Admin Dashboard')
            ->assertSee('E-Commerce Platform');
    }

    public function test_projects_grid_filters_by_category(): void
    {
        Livewire::test('projects-grid')
            ->set('activeCategory', 'saas')
            ->assertSee('SaaS Admin Dashboard')
            ->assertDontSee('E-Commerce Platform');
    }

    public function test_projects_grid_searches_by_title(): void
    {
        Livewire::test('projects-grid')
            ->set('search', 'Collaboration')
            ->assertSee('Real-Time Collaboration Tool')
            ->assertDontSee('SaaS Admin Dashboard');
    }

    public function test_projects_grid_shows_empty_state_when_no_match(): void
    {
        Livewire::test('projects-grid')
            ->set('search', 'NonExistentProject12345')
            ->assertSee('No projects found matching criteria');
    }
}
