<footer class="relative border-t border-white/8 mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <!-- Brand -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center text-white font-black text-xl" style="background: linear-gradient(135deg, #8b5cf6, #6366f1)">D</div>
                    <div>
                        <div class="font-bold text-white">Devaraju R</div>
                        <div class="text-xs text-surface-500">Full Stack Laravel Developer</div>
                    </div>
                </div>
                <p class="text-surface-500 text-sm leading-relaxed">
                    Building elegant web experiences with the TALL Stack from Bangalore, India. Open to exciting opportunities.
                </p>
                <div class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/25 text-xs text-emerald-400">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Available for hire
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-sm font-semibold text-white mb-4 tracking-wide">Quick Links</h4>
                <ul class="space-y-2">
                    @foreach(['About' => '#about', 'Skills' => '#skills', 'Experience' => '#experience', 'Projects' => '#projects', 'Blog' => '#blog', 'Contact' => '#contact'] as $label => $href)
                    <li>
                        <a href="{{ $href }}" class="text-surface-500 hover:text-brand-400 text-sm transition-colors duration-200">{{ $label }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-sm font-semibold text-white mb-4 tracking-wide">Get in Touch</h4>
                <div class="space-y-3">
                    <a href="mailto:devadeva2330@gmail.com" class="flex items-center gap-2 text-surface-500 hover:text-brand-400 text-sm transition-colors duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        devadeva2330@gmail.com
                    </a>
                    <a href="tel:+919786535614" class="flex items-center gap-2 text-surface-500 hover:text-brand-400 text-sm transition-colors duration-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        +91 9786535614
                    </a>
                    <div class="flex items-center gap-2 text-surface-500 text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        Bangalore, Karnataka, India
                    </div>
                </div>
                <div class="flex items-center gap-3 mt-5">
                    <a href="https://github.com/danieldeva" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg glass flex items-center justify-center text-surface-400 hover:text-white hover:border-brand-500/40 transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://linkedin.com/in/devaraju-r-49860919b" target="_blank" rel="noopener" class="w-9 h-9 rounded-lg glass flex items-center justify-center text-surface-400 hover:text-blue-400 hover:border-blue-500/40 transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-white/8 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-surface-600 text-xs">
                © {{ date('Y') }} Devaraju R. Crafted with ❤️ using the TALL Stack.
            </p>
            <div class="flex items-center gap-4 text-surface-600 text-xs">
                <span class="flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    v1.0.0 · Production
                </span>
                <span>Laravel {{ app()->version() }}</span>
                <button onclick="window.scrollTo({top:0,behavior:'smooth'})" class="hover:text-brand-400 transition-colors duration-200 flex items-center gap-1">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                    Back to top
                </button>
            </div>
        </div>
    </div>
</footer>
