<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    protected $fillable = [
        'name','tagline','bio','avatar','email','phone','location',
        'linkedin_url','github_url','resume_path','open_to_work',
        'availability','salary_range','notice_period','preferred_location',
        'resume_download_count','visitor_count',
    ];
    protected $casts = ['open_to_work' => 'boolean'];
    public static function main(): self {
        return static::firstOrCreate(['email' => 'devadeva2330@gmail.com'], [
            'name' => 'Devaraju R',
            'tagline' => 'Full Stack Laravel Developer',
            'bio' => 'Passionate full-stack developer with expertise in the TALL Stack (Tailwind, Alpine, Livewire, Laravel). I build elegant, performant web applications with clean architecture and modern design.',
            'email' => 'devadeva2330@gmail.com',
            'phone' => '+91 9786535614',
            'location' => 'Bangalore, Karnataka, India',
            'linkedin_url' => 'https://linkedin.com/in/devaraju-r-49860919b',
            'github_url' => 'https://github.com/danieldeva',
            'open_to_work' => true,
            'availability' => 'Immediately Available',
            'notice_period' => '30 Days',
            'preferred_location' => 'Bangalore / Remote',
        ]);
    }
}
