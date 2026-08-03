<?php

namespace Tests\Unit;

use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SettingTest extends TestCase
{
    use RefreshDatabase;

    public function test_setting_set_and_get_methods(): void
    {
        Setting::set('site_name', 'Devaraju Portfolio');

        $value = Setting::get('site_name');
        $this->assertEquals('Devaraju Portfolio', $value);
    }

    public function test_setting_get_returns_default_when_key_does_not_exist(): void
    {
        $value = Setting::get('non_existent_key', 'Default Value');
        $this->assertEquals('Default Value', $value);
    }

    public function test_setting_updates_existing_key(): void
    {
        Setting::set('theme', 'light');
        Setting::set('theme', 'dark');

        $this->assertEquals('dark', Setting::get('theme'));
        $this->assertDatabaseCount('settings', 1);
    }
}
