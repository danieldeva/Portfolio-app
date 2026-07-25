<?php
use Livewire\Component;
new class extends Component {
    public string $activeCategory = 'all';
    public string $search = '';
};
?>

<section id="projects" class="section bg-surface-950/60">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">🚀 Portfolio</div>
            <h2 class="section-title">Featured Work & Projects</h2>
            <p class="section-subtitle">Real-world web applications and systems built with precision and passion.</p>
        </div>

        @php
            $projects = \App\Models\LocalDB::projects();
            if ($activeCategory !== 'all') {
                $projects = $projects->where('category', $activeCategory);
            }
            if (!empty($search)) {
                $projects = $projects->filter(function($p) use ($search) {
                    return str_contains(strtolower($p->title), strtolower($search)) ||
                           str_contains(strtolower($p->summary), strtolower($search));
                });
            }
        @endphp

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-10">
            <div class="flex flex-wrap justify-center gap-2">
                @foreach(['all' => 'All Projects', 'saas' => 'SaaS', 'ecommerce' => 'E-Commerce', 'realtime' => 'Real-time', 'custom' => 'Custom Systems'] as $cat => $name)
                <button wire:click="$set('activeCategory', '{{ $cat }}')"
                        class="px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 {{ $activeCategory === $cat ? 'bg-brand-600 text-white shadow-glow' : 'glass text-surface-400 hover:text-white hover:bg-brand-500/10' }}">
                    {{ $name }}
                </button>
                @endforeach
            </div>
            <div class="relative w-full sm:w-64">
                <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search projects..."
                       class="w-full glass rounded-full px-4 py-2 text-xs text-white placeholder-surface-500 outline-none focus:border-brand-500/50">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($projects as $proj)
            <div class="card group flex flex-col justify-between hover:-translate-y-1.5 transition-all duration-300">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="badge-brand text-[11px] uppercase tracking-wider">{{ $proj->category }}</span>
                        @if($proj->is_featured)
                        <span class="badge-warning text-[10px] font-bold">★ Featured</span>
                        @endif
                    </div>

                    <h3 class="text-xl font-bold text-white group-hover:text-brand-300 transition-colors mb-2">
                        {{ $proj->title }}
                    </h3>

                    <p class="text-surface-400 text-xs leading-relaxed mb-4 line-clamp-3">
                        {{ $proj->summary }}
                    </p>

                    @if(!empty($proj->technologies))
                    <div class="flex flex-wrap gap-1.5 mb-6">
                        @foreach($proj->technologies as $tech)
                        <span class="px-2 py-0.5 rounded bg-surface-900 text-surface-400 text-[10px] font-mono border border-surface-800">{{ $tech }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-white/5 mt-auto">
                    @if($proj->demo_url)
                    <a href="{{ $proj->demo_url }}" target="_blank" rel="noopener" class="text-xs text-brand-400 font-semibold hover:text-brand-300 flex items-center gap-1">
                        Live Demo ↗
                    </a>
                    @else
                    <span class="text-xs text-surface-600">Demo Private</span>
                    @endif

                    @if($proj->github_url)
                    <a href="{{ $proj->github_url }}" target="_blank" rel="noopener" class="text-xs text-surface-400 hover:text-white flex items-center gap-1">
                        Source
                    </a>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-surface-500 py-12">No projects found matching criteria.</div>
            @endforelse
        </div>
    </div>
</section>
