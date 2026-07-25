<?php

namespace App\Models;

use Illuminate\Support\Collection;

class LocalDB
{
    public static function skills(): Collection
    {
        return collect([
            (object)['name' => 'Laravel', 'category' => 'backend', 'level' => 95, 'years' => 3, 'confidence' => 95, 'color' => '#ff2d20', 'sort_order' => 1],
            (object)['name' => 'PHP', 'category' => 'backend', 'level' => 95, 'years' => 3, 'confidence' => 95, 'color' => '#777bb4', 'sort_order' => 2],
            (object)['name' => 'Livewire', 'category' => 'frontend', 'level' => 90, 'years' => 2, 'confidence' => 90, 'color' => '#fb70a9', 'sort_order' => 3],
            (object)['name' => 'TailwindCSS', 'category' => 'frontend', 'level' => 92, 'years' => 3, 'confidence' => 92, 'color' => '#38bdf8', 'sort_order' => 4],
            (object)['name' => 'Alpine.js', 'category' => 'frontend', 'level' => 88, 'years' => 2, 'confidence' => 88, 'color' => '#77c1d2', 'sort_order' => 5],
            (object)['name' => 'MySQL', 'category' => 'database', 'level' => 85, 'years' => 3, 'confidence' => 85, 'color' => '#00758f', 'sort_order' => 6],
            (object)['name' => 'Filament', 'category' => 'tools', 'level' => 85, 'years' => 2, 'confidence' => 85, 'color' => '#f59e0b', 'sort_order' => 7],
            (object)['name' => 'Git', 'category' => 'devops', 'level' => 90, 'years' => 3, 'confidence' => 90, 'color' => '#f05032', 'sort_order' => 8],
        ]);
    }

    public static function experiences(): Collection
    {
        return collect([
            (object)[
                'company' => 'Tech Solutions Pvt. Ltd.',
                'role' => 'Full Stack Laravel Developer',
                'location' => 'Bangalore, India',
                'employment_type' => 'Full-time',
                'start_date' => '2023-01-01',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Lead development of SaaS platforms using Laravel, Livewire, and TailwindCSS.',
                'technologies' => ['Laravel', 'Livewire', 'TailwindCSS', 'MySQL', 'Redis', 'Docker'],
            ],
            (object)[
                'company' => 'Digital Agency Co.',
                'role' => 'PHP Laravel Developer',
                'location' => 'Bangalore, India',
                'employment_type' => 'Full-time',
                'start_date' => '2022-01-01',
                'end_date' => '2022-12-31',
                'is_current' => false,
                'description' => 'Developed custom e-commerce and web portals for international clients.',
                'technologies' => ['PHP', 'Laravel', 'Alpine.js', 'MySQL', 'REST APIs'],
            ],
        ]);
    }

    public static function projects(): Collection
    {
        return collect([
            (object)[
                'title' => 'SaaS Admin Dashboard',
                'category' => 'saas',
                'summary' => 'Comprehensive multi-tenant admin panel with real-time analytics, RBAC, and subscription management.',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 1,
                'demo_url' => 'https://example.com',
                'github_url' => 'https://github.com/danieldeva',
                'technologies' => ['Laravel', 'Filament', 'TailwindCSS', 'MySQL'],
            ],
            (object)[
                'title' => 'E-Commerce Platform',
                'category' => 'ecommerce',
                'summary' => 'Full-featured online store with inventory management, Razorpay payment gateway integration, and order tracking.',
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 2,
                'demo_url' => 'https://example.com',
                'github_url' => 'https://github.com/danieldeva',
                'technologies' => ['Laravel', 'Livewire', 'TailwindCSS', 'Razorpay'],
            ],
            (object)[
                'title' => 'Real-Time Collaboration Tool',
                'category' => 'realtime',
                'summary' => 'Kanban-style project management app with live updates powered by WebSockets and Alpine.js.',
                'is_featured' => false,
                'is_published' => true,
                'sort_order' => 3,
                'demo_url' => null,
                'github_url' => 'https://github.com/danieldeva',
                'technologies' => ['Laravel', 'Pusher', 'Alpine.js', 'Redis'],
            ],
        ]);
    }

    public static function stats(): Collection
    {
        return collect([
            (object)['label' => 'Years Experience', 'value' => '3+'],
            (object)['label' => 'Projects Completed', 'value' => '25+'],
            (object)['label' => 'Happy Clients', 'value' => '15+'],
            (object)['label' => 'Lines of Code', 'value' => '500K+'],
        ]);
    }

    public static function testimonials(): Collection
    {
        return collect([
            (object)[
                'author' => 'Rajesh Kumar',
                'role' => 'Engineering Lead',
                'company' => 'Tech Solutions',
                'quote' => 'Devaraju is an exceptional developer who consistently delivers high-quality Laravel applications. His attention to architecture and performance is top-notch.',
                'is_approved' => true,
                'sort_order' => 1,
            ],
            (object)[
                'author' => 'Sarah Jenkins',
                'role' => 'Product Owner',
                'company' => 'Digital Agency',
                'quote' => 'Working with Devaraju was a seamless experience. He understood our requirements quickly and implemented pixel-perfect UIs with Livewire and Tailwind.',
                'is_approved' => true,
                'sort_order' => 2,
            ],
        ]);
    }

    public static function certs(): Collection
    {
        return collect([
            (object)[
                'title' => 'Laravel Certified Developer',
                'issuer' => 'Laravel LLC',
                'issue_date' => '2023-05-15',
                'credential_url' => 'https://laravel.com',
            ],
            (object)[
                'title' => 'Full Stack Web Development Certification',
                'issuer' => 'Udemy / Online Institute',
                'issue_date' => '2022-03-10',
                'credential_url' => null,
            ],
        ]);
    }

    public static function posts(): Collection
    {
        return collect([
            (object)[
                'title' => 'Building High Performance Livewire Components',
                'excerpt' => 'Best practices for optimizing re-renders, state binding, and query performance in Livewire 3.',
                'published_at' => '2024-02-10',
                'read_time_minutes' => 6,
                'is_published' => true,
            ],
            (object)[
                'title' => 'Clean Architecture in Laravel Applications',
                'excerpt' => 'Structuring large-scale Laravel projects with Actions, DTOs, and Domain-Driven Design concepts.',
                'published_at' => '2024-01-15',
                'read_time_minutes' => 8,
                'is_published' => true,
            ],
        ]);
    }
}
