@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <livewire:hero-section />

    {{-- 🎬 Recruiter Video Showcase --}}
    <livewire:recruiter-video-section />

    {{-- About --}}
    <livewire:about-section />

    {{-- Skills --}}
    <livewire:skills-section />

    {{-- Experience --}}
    <livewire:experience-timeline />

    {{-- Projects --}}
    <livewire:projects-grid />

    {{-- Statistics --}}
    <livewire:statistics-counter />

    {{-- Testimonials --}}
    <livewire:testimonials-carousel />

    {{-- Certifications --}}
    <livewire:certification-cards />

    {{-- Blog --}}
    <livewire:blog-index />

    {{-- Contact --}}
    <livewire:contact-form />
@endsection
