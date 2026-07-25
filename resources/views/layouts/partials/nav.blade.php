<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 py-5 bg-transparent" x-data>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="group flex items-center gap-3" id="nav-logo">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center text-white font-black text-lg transition-all duration-300 group-hover:scale-110 group-hover:shadow-glow" style="background: linear-gradient(135deg, #8b5cf6, #6366f1)">D</div>
                <span class="font-bold text-white text-sm tracking-tight hidden sm:block">
                    Devaraju <span class="text-brand-400">R</span>
                </span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a href="#about" class="nav-link text-sm font-medium">About</a>
                <a href="#recruiter-videos" class="nav-link text-sm font-medium text-brand-400">🎥 Video Resume</a>
                <a href="#skills" class="nav-link text-sm font-medium">Skills</a>
                <a href="#experience" class="nav-link text-sm font-medium">Experience</a>
                <a href="#projects" class="nav-link text-sm font-medium">Projects</a>
                <a href="#blog" class="nav-link text-sm font-medium">Blog</a>
                <a href="#contact" class="nav-link text-sm font-medium">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <button @click="$store.terminal.toggle()" class="px-3 py-1.5 rounded-lg glass text-xs font-mono text-brand-400 hover:text-brand-300 transition-colors flex items-center gap-1.5" title="Open Terminal">
                    <span>>_</span>
                    <span class="hidden sm:inline">Terminal</span>
                </button>
                <a href="#contact" class="btn-primary text-xs py-2 px-4">Hire Me</a>
            </div>
        </div>
    </div>
</nav>
