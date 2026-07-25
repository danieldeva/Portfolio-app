<?php
use Livewire\Component;
use App\Models\LocalDB;
new class extends Component {
    public string $activeCategory = 'all';
    public array $categories = [
        'all' => 'All Skills',
        'frontend' => 'Frontend',
        'backend' => 'Backend',
        'database' => 'Database',
        'devops' => 'DevOps',
        'tools' => 'Tools',
    ];
};
?>

<section id="skills" class="section bg-gradient-to-b from-surface-950 to-surface-950/50">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">⚡ Skills</div>
            <h2 class="section-title">Technology Expertise</h2>
            <p class="section-subtitle">A curated showcase of the technologies I use to build scalable, elegant web applications.</p>
        </div>

        @php
            $skills = \App\Models\LocalDB::skills();
            if ($activeCategory !== 'all') {
                $skills = $skills->where('category', $activeCategory);
            }
        @endphp

        <div class="flex flex-wrap justify-center gap-2 mb-12">
            @foreach($categories as $key => $label)
            <button wire:click="$set('activeCategory', '{{ $key }}')"
                    class="px-4 py-2 rounded-full text-xs font-semibold transition-all duration-200 {{ $activeCategory === $key ? 'bg-brand-600 text-white shadow-glow' : 'glass text-surface-400 hover:text-white hover:bg-brand-500/10' }}">
                {{ $label }}
            </button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" wire:loading.class="opacity-50">
            @forelse($skills as $skill)
            <div class="card group cursor-default">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl transition-transform duration-300 group-hover:scale-110"
                             style="background: {{ $skill->color }}22; border: 1px solid {{ $skill->color }}44">
                            ⚡
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-white">{{ $skill->name }}</div>
                            <div class="text-xs text-surface-500">{{ $skill->years }}y exp.</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-lg font-black" style="color: {{ $skill->color ?? '#8b5cf6' }}">{{ $skill->level }}%</div>
                    </div>
                </div>

                <div class="skill-bar mb-3">
                    <div class="skill-bar-fill" style="width: {{ $skill->level }}%; background: linear-gradient(90deg, {{ $skill->color ?? '#8b5cf6' }}, {{ $skill->color ?? '#8b5cf6' }}88)"></div>
                </div>

                <div class="flex items-center justify-between text-xs">
                    <span class="text-surface-600 capitalize">{{ $skill->category }}</span>
                    <span class="text-brand-500/70 font-medium">Confidence: {{ $skill->confidence }}%</span>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-surface-500 py-12">No skills found for this category.</div>
            @endforelse
        </div>
    </div>
</section>
