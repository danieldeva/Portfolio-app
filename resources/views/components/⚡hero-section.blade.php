<?php
use Livewire\Component;
new class extends Component {};
?>

<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    {{-- ── Animated Background ─────────────────────────────────────────── --}}
    <div class="absolute inset-0 bg-surface-950">
        <canvas id="particles-canvas" class="absolute inset-0"></canvas>

        {{-- Sunrise radial glows --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 55% at 50% -5%, rgba(245,158,11,0.22) 0%, rgba(249,115,22,0.10) 40%, transparent 70%)"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 50% 40% at 80% 90%, rgba(244,63,94,0.12) 0%, transparent 60%)"></div>
        <div class="absolute inset-0 sunrise-horizon pointer-events-none"></div>

        {{-- Glow orbs --}}
        <div class="glow-orb w-96 h-96 top-1/4 -left-20 parallax-layer" data-depth="0.3"
             style="background:rgba(245,158,11,0.35);animation-delay:0s"></div>
        <div class="glow-orb w-80 h-80 bottom-1/4 -right-20 parallax-layer" data-depth="0.2"
             style="background:rgba(249,115,22,0.28);animation-delay:3s"></div>
        <div class="glow-orb w-60 h-60 top-3/4 left-1/3 parallax-layer" data-depth="0.4"
             style="background:rgba(244,63,94,0.20);animation-delay:1.5s"></div>
    </div>

    {{-- ── Grid Pattern ─────────────────────────────────────────────────── --}}
    <div class="absolute inset-0 opacity-[0.025] pointer-events-none"
         style="background-image:linear-gradient(rgba(251,191,36,1) 1px,transparent 1px),linear-gradient(90deg,rgba(251,191,36,1) 1px,transparent 1px);background-size:55px 55px;"></div>

    {{-- ── 3D Floating Shapes ───────────────────────────────────────────── --}}
    {{-- Rotating Cube (top-right) --}}
    <div class="absolute top-24 right-16 hidden lg:block pointer-events-none perspective-container">
        <div class="relative" style="width:80px;height:80px;transform-style:preserve-3d;animation:spin3d 14s linear infinite;">
            {{-- 6 cube faces --}}
            <div class="cube-face" style="width:80px;height:80px;transform:rotateY(0deg)   translateZ(40px);"></div>
            <div class="cube-face" style="width:80px;height:80px;transform:rotateY(180deg) translateZ(40px);"></div>
            <div class="cube-face" style="width:80px;height:80px;transform:rotateY(90deg)  translateZ(40px);"></div>
            <div class="cube-face" style="width:80px;height:80px;transform:rotateY(-90deg) translateZ(40px);"></div>
            <div class="cube-face" style="width:80px;height:80px;transform:rotateX(90deg)  translateZ(40px);"></div>
            <div class="cube-face" style="width:80px;height:80px;transform:rotateX(-90deg) translateZ(40px);"></div>
        </div>
    </div>

    {{-- Floating 3D Orb (left side) --}}
    <div class="absolute left-12 top-1/2 -translate-y-1/2 hidden xl:block pointer-events-none">
        <div class="hero-orb-3d" style="width:120px;height:120px;animation-delay:2s;"></div>
    </div>

    {{-- Diamond shapes --}}
    <div class="absolute top-40 left-1/4 pointer-events-none animate-float" style="animation-delay:1s;">
        <div class="shape-diamond" style="width:18px;height:18px;"></div>
    </div>
    <div class="absolute bottom-32 right-1/4 pointer-events-none animate-float" style="animation-delay:4s;">
        <div class="shape-diamond" style="width:24px;height:24px;background:rgba(244,63,94,0.25);border-color:rgba(244,63,94,0.5);"></div>
    </div>

    {{-- Triangle shapes --}}
    <div class="absolute bottom-40 left-16 pointer-events-none animate-float" style="animation-delay:2.5s;">
        <div class="shape-triangle"></div>
    </div>
    <div class="absolute top-32 right-1/3 pointer-events-none animate-float" style="animation-delay:0.5s;">
        <div class="shape-triangle" style="border-bottom-color:rgba(249,115,22,0.3);border-left-width:14px;border-right-width:14px;border-bottom-width:24px;"></div>
    </div>

    {{-- Ring shapes --}}
    <div class="absolute bottom-20 left-1/3 shape-ring animate-float pointer-events-none" style="width:60px;height:60px;animation-delay:3s;"></div>
    <div class="absolute top-1/3 right-12 shape-ring animate-rotate-slow pointer-events-none"
         style="width:100px;height:100px;border-color:rgba(251,191,36,0.25);border-width:1px;"></div>

    {{-- Small orbiting dots (bottom-right corner) --}}
    <div class="absolute bottom-24 right-24 pointer-events-none hidden lg:block" style="width:120px;height:120px;">
        <div class="orbit-dot bg-brand-400" style="width:8px;height:8px;--orbit-r:50px;--orbit-start:0deg;animation-duration:4s;"></div>
        <div class="orbit-dot bg-accent-500" style="width:6px;height:6px;--orbit-r:50px;--orbit-start:120deg;animation-duration:4s;animation-delay:-1.33s;"></div>
        <div class="orbit-dot bg-glow-400" style="width:6px;height:6px;--orbit-r:50px;--orbit-start:240deg;animation-duration:4s;animation-delay:-2.66s;"></div>
    </div>

    {{-- ── Content ──────────────────────────────────────────────────────── --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-12 text-center">

        <div id="hero-tag" class="flex justify-center mb-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-brand-500/30 text-xs font-semibold text-brand-300 tracking-wide">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
                </span>
                Available for Hire · Bangalore, India
            </div>
        </div>

        <h1 id="hero-name" class="text-5xl sm:text-7xl lg:text-8xl font-black tracking-tighter text-white mb-4 leading-none">
            Devaraju
            <span class="block gradient-text">R.</span>
        </h1>

        <div id="hero-subtitle" class="flex items-center justify-center gap-3 text-xl sm:text-2xl font-medium text-surface-400 mb-4">
            <span>I'm a</span>
            <span class="relative">
                <span id="typing-text"
                      class="text-brand-400 font-bold"
                      data-titles='["Laravel Developer","Full Stack Engineer","Problem Solver","UI Engineer","Backend Specialist","TALL Stack Expert"]'></span>
                <span class="inline-block w-0.5 h-6 bg-brand-400 ml-1 animate-pulse align-middle"></span>
            </span>
        </div>

        <p class="max-w-2xl mx-auto text-surface-400 text-base sm:text-lg leading-relaxed mb-10">
            Building elegant, high-performance web applications with <span class="text-brand-300 font-medium">Laravel</span>,
            <span class="text-brand-300 font-medium">Livewire</span>, <span class="text-brand-300 font-medium">TailwindCSS</span> &amp; <span class="text-brand-300 font-medium">Alpine.js</span>.
            Passionate about clean architecture and delightful user experiences.
        </p>

        <div id="hero-ctas" class="flex flex-wrap items-center justify-center gap-4 mb-16">
            <a href="#projects" id="cta-projects" class="btn-primary group">
                <svg class="w-4 h-4 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0l-4-4m4 4l-4 4"/></svg>
                View Projects
            </a>
            <a href="#contact" id="cta-hire" class="btn-ghost group">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Hire Me
            </a>
            <a href="#contact" id="cta-interview" class="btn-ghost group">
                📅 Book Interview
            </a>
            <a href="#" id="cta-resume" onclick="event.preventDefault()" class="btn-outline group">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Download Resume
            </a>
        </div>

        {{-- 3D Stats Cards with tilt effect --}}
        <div id="hero-stats" class="grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-2xl mx-auto mb-16">
            @foreach([['3+','Years Exp.'],['25+','Projects'],['15+','Clients'],['500K+','Lines of Code']] as [$val,$label])
            <div class="glass tilt-card rounded-2xl p-4 text-center hover:border-brand-500/40 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden"
                 style="transform-style:preserve-3d;">
                <div class="tilt-card-shine"></div>
                <div class="absolute inset-0 rounded-2xl"
                     style="background:radial-gradient(circle at 50% 0%, rgba(245,158,11,0.08), transparent 70%);"></div>
                <div class="relative text-2xl font-black gradient-text-warm mb-1">{{ $val }}</div>
                <div class="relative text-xs text-surface-500">{{ $label }}</div>
            </div>
            @endforeach
        </div>

        <div id="hero-social" class="flex items-center justify-center gap-4">
            <a href="https://github.com/danieldeva" target="_blank" rel="noopener" class="flex items-center gap-2 text-surface-500 hover:text-brand-300 text-sm transition-all duration-200 hover:-translate-y-0.5">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                github.com/danieldeva
            </a>
            <span class="text-surface-700">·</span>
            <a href="https://linkedin.com/in/devaraju-r-49860919b" target="_blank" rel="noopener" class="flex items-center gap-2 text-surface-500 hover:text-brand-300 text-sm transition-all duration-200 hover:-translate-y-0.5">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                LinkedIn
            </a>
        </div>
    </div>
</section>
