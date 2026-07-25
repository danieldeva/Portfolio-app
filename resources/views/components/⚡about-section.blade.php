<?php
use Livewire\Component;
new class extends Component {};
?>

<section id="about" class="section">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">👋 About Me</div>
            <h2 class="section-title">The Story Behind the Code</h2>
            <p class="section-subtitle">A developer who cares deeply about craft, performance, and the people using the product.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <div class="glass rounded-2xl p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-white font-black text-3xl"
                             style="background: linear-gradient(135deg, #8b5cf6, #6366f1)">D</div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Devaraju R</h3>
                            <p class="text-brand-400 text-sm font-medium">Full Stack Laravel Developer</p>
                            <div class="flex items-center gap-1.5 text-surface-500 text-xs mt-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                Bangalore, Karnataka, India
                            </div>
                        </div>
                    </div>
                    <p class="text-surface-400 leading-relaxed mb-4">
                        I'm a passionate Full Stack Developer specialising in the <span class="text-white font-medium">TALL Stack</span> — TailwindCSS, Alpine.js, Livewire, and Laravel. I craft web applications that are both technically robust and visually delightful.
                    </p>
                    <p class="text-surface-400 leading-relaxed mb-4">
                        My journey started with PHP and Laravel, and over 3+ years I've grown into a developer who understands <span class="text-white font-medium">clean architecture</span>, <span class="text-white font-medium">performance optimisation</span>, and what it means to build software that truly serves users.
                    </p>
                    <p class="text-surface-400 leading-relaxed">
                        When I'm not writing code, I'm reading about architecture patterns, contributing to open source, or exploring new tools that improve the developer experience.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['🎯','Mission','Build software that makes lives easier and businesses more successful.'],
                        ['🔭','Vision','To be a developer who consistently raises the bar in quality and innovation.'],
                        ['⚡','Values','Clean code, continuous learning, transparency, and shipping with pride.'],
                        ['🤝','Philosophy','Great products are built by empathetic engineers who understand the "why".'],
                    ] as [$icon,$title,$desc])
                    <div class="glass rounded-xl p-4 hover:border-brand-500/30 transition-all duration-300">
                        <div class="text-2xl mb-2">{{ $icon }}</div>
                        <h4 class="text-sm font-semibold text-white mb-1">{{ $title }}</h4>
                        <p class="text-xs text-surface-500 leading-relaxed">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-8 flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-brand-500/20 flex items-center justify-center">
                        <svg class="w-4 h-4 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </span>
                    Career Journey
                </h3>

                <div class="relative">
                    @foreach([
                        ['2023 — Present','Full Stack Laravel Developer','Tech Solutions Pvt. Ltd.','Leading SaaS product development, mentoring developers, and shipping features for 5K+ users.',true],
                        ['2022 — 2023','PHP Laravel Developer','Digital Agency Co.','Delivered 10+ client projects — e-commerce, CRM, CMS platforms with pixel-perfect UIs.',false],
                        ['2021 — 2022','Junior PHP Developer','StartupXYZ (Internship)','Built internal tools, learned clean architecture, and fell in love with Laravel.',false],
                        ['2018 — 2021','B.E. Computer Science','University College','Graduated with distinction. Focused on software engineering, data structures, and web development.',false],
                    ] as [$period,$title,$org,$desc,$current])
                    <div class="timeline-item">
                        <div class="timeline-dot {{ $current ? 'bg-emerald-400 ring-emerald-400/20' : '' }}"></div>
                        <div class="glass rounded-xl p-4 ml-4 hover:border-brand-500/30 transition-all duration-300">
                            <div class="flex items-start justify-between gap-2 mb-2">
                                <div>
                                    <div class="text-sm font-semibold text-white">{{ $title }}</div>
                                    <div class="text-xs text-brand-400 font-medium">{{ $org }}</div>
                                </div>
                                <div class="flex flex-col items-end gap-1">
                                    <span class="text-xs text-surface-500 whitespace-nowrap">{{ $period }}</span>
                                    @if($current)<span class="badge-success text-[10px]">Current</span>@endif
                                </div>
                            </div>
                            <p class="text-xs text-surface-500 leading-relaxed">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="glass rounded-xl p-4 mt-6">
                    <h4 class="text-sm font-semibold text-white mb-3">🎓 Currently Learning</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Event Sourcing', 'Laravel Octane', 'Vue 3', 'AWS Architecture', 'Microservices'] as $item)
                        <span class="badge-info text-xs">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
