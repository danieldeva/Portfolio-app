<?php
use Livewire\Component;
new class extends Component {};
?>

<section id="testimonials" class="section">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">💬 Testimonials</div>
            <h2 class="section-title">What Clients & Colleagues Say</h2>
            <p class="section-subtitle">Feedback and recommendations from people I've collaborated with.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            @foreach(\App\Models\LocalDB::testimonials() as $t)
            <div class="glass rounded-2xl p-6 relative flex flex-col justify-between hover:border-brand-500/30 transition-all duration-300">
                <div>
                    <div class="text-brand-400 text-3xl font-serif mb-3">“</div>
                    <p class="text-surface-300 text-sm italic leading-relaxed mb-6">
                        {{ $t->quote }}
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-4 border-t border-white/5">
                    <div class="w-10 h-10 rounded-full bg-brand-500/20 text-brand-300 flex items-center justify-center font-bold text-sm">
                        {{ substr($t->author, 0, 1) }}
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-white">{{ $t->author }}</div>
                        <div class="text-xs text-surface-500">{{ $t->role }} @ {{ $t->company }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
