<div class="recruiter-badge hidden lg:block" @click="$store.recruiter.toggle()" x-data id="recruiter-trigger">
    <div class="flex items-center gap-2.5">
        <div class="w-8 h-8 rounded-lg bg-brand-500/20 flex items-center justify-center">
            <svg class="w-4 h-4 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
        </div>
        <div>
            <div class="text-xs font-semibold text-white">Recruiter Mode</div>
            <div class="text-[10px] text-surface-500">Quick overview →</div>
        </div>
    </div>
</div>

<div x-show="$store.recruiter.open" x-data x-transition class="fixed inset-0 z-[100] overflow-y-auto" style="display:none;">
    <div class="min-h-screen bg-surface-950/95 backdrop-blur-xl p-4 sm:p-8">
        <button @click="$store.recruiter.toggle()" class="absolute top-6 right-6 w-10 h-10 rounded-xl glass flex items-center justify-center text-surface-400 hover:text-white transition-colors z-10">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <div class="max-w-5xl mx-auto pt-8">
            <div class="text-center mb-10">
                <div class="badge-brand mb-3">👋 Recruiter Dashboard</div>
                <h2 class="text-4xl font-black text-white mb-2">Devaraju R</h2>
                <p class="text-surface-400">Full Stack Laravel Developer · Bangalore, India · <span class="text-emerald-400">Available Now</span></p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                @foreach([['3+','Years Experience','🗓️'],['25+','Projects Done','🚀'],['Laravel','Primary Stack','⚡']] as [$val,$label,$icon])
                <div class="card text-center">
                    <div class="text-3xl mb-2">{{ $icon }}</div>
                    <div class="text-2xl font-black text-white mb-1">{{ $val }}</div>
                    <div class="text-xs text-surface-500">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
