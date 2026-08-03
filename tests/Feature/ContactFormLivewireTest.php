<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class ContactFormLivewireTest extends TestCase
{
    public function test_contact_form_renders_successfully(): void
    {
        Livewire::test('contact-form')
            ->assertStatus(200)
            ->assertSet('name', '')
            ->assertSet('email', '')
            ->assertSet('subject', '')
            ->assertSet('message', '')
            ->assertSet('sent', false);
    }

    public function test_contact_form_validates_required_fields(): void
    {
        Livewire::test('contact-form')
            ->call('submit')
            ->assertHasErrors([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
    }

    public function test_contact_form_validates_email_format_and_minimum_lengths(): void
    {
        Livewire::test('contact-form')
            ->set('name', 'A')
            ->set('email', 'not-an-email')
            ->set('subject', 'Hi')
            ->set('message', 'Short')
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_contact_form_submits_successfully_and_resets_fields(): void
    {
        Livewire::test('contact-form')
            ->set('name', 'John Doe')
            ->set('email', 'john@example.com')
            ->set('subject', 'Project Inquiry')
            ->set('message', 'Hello, I would like to discuss a project with you.')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('sent', true)
            ->assertSet('name', '')
            ->assertSet('email', '')
            ->assertSet('subject', '')
            ->assertSet('message', '');
    }
}
