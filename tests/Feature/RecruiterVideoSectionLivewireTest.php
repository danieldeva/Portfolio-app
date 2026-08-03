<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class RecruiterVideoSectionLivewireTest extends TestCase
{
    public function test_recruiter_video_section_renders_successfully(): void
    {
        Livewire::test('recruiter-video-section')
            ->assertStatus(200)
            ->assertSee('Video Resume')
            ->assertSee("My Resume,")
            ->assertSee("Chapters");
    }
}
