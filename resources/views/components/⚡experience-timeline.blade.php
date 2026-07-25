<?php
use Livewire\Component;
new class extends Component {};
?>

<section id="experience" class="section">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">💼 Experience</div>
            <h2 class="section-title">Work Experience</h2>
            <p class="section-subtitle">My professional journey in software engineering and web application development.</p>
        </div>

        @php
            $experiences = \App\Models\LocalDB::experiences();
        @endphp

        <div class="max-w-4xl mx-auto relative">
            @forelse($experiences as $exp)
            <div class="timeline-item">
                <div class="timeline-dot {{ $exp->is_current ? 'bg-emerald-400 ring-emerald-400/20' : '' }}"></div>
                <div class="glass rounded-2xl p-6 ml-6 sm:ml-8 hover:border-brand-500/30 transition-all duration-300">
                    <div class="flex flex-wrap items-start justify-between gap-4 mb-4">
                        <div>
                            <span class="text-xs text-brand-400 font-semibold tracking-wider uppercase">{{ $exp->company }}</span>
                            <h3 class="text-xl font-bold text-white mt-0.5">{{ $exp->role }}</h3>
                            <div class="text-xs text-surface-500 flex items-center gap-2 mt-1">
                                <span>📍 {{ $exp->location ?? 'Remote / Onsite' }}</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="badge-brand text-xs">
                                {{ \Carbon\Carbon::parse($exp->start_date)->format('M Y') }} — 
                                {{ $exp->is_current ? 'Present' : \Carbon\Carbon::parse($exp->end_date)->format('M Y') }}
                            </span>
                        </div>
                    </div>

                    <p class="text-surface-400 text-sm leading-relaxed mb-4">
                        {{ $exp->description }}
                    </p>

                    @if(!empty($exp->technologies))
                    <div class="flex flex-wrap gap-1.5 pt-3 border-t border-white/5">
                        @foreach($exp->technologies as $tech)
                        <span class="badge-brand text-[11px]">{{ $tech }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="text-center text-surface-500 py-12">No experience records found.</div>
            @endforelse
        </div>
    </div>
</section>
