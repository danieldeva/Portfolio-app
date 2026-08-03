<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class SkillsSectionLivewireTest extends TestCase
{
    public function test_skills_section_renders_successfully(): void
    {
        Livewire::test('skills-section')
            ->assertStatus(200)
            ->assertSet('activeCategory', 'all')
            ->assertSee('Laravel')
            ->assertSee('TailwindCSS')
            ->assertSee('MySQL');
    }

    public function test_skills_section_filters_by_category(): void
    {
        Livewire::test('skills-section')
            ->set('activeCategory', 'backend')
            ->assertSee('Laravel')
            ->assertSee('PHP')
            ->assertDontSee('TailwindCSS');
    }
}
