<?php
use Livewire\Component;
new class extends Component {};
?>

<section class="section bg-gradient-to-r from-brand-950/40 via-surface-950 to-indigo-950/40 border-y border-white/5 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach(\App\Models\LocalDB::stats() as $stat)
            <div class="text-center group">
                <div class="text-3xl sm:text-5xl font-black text-white mb-2 group-hover:scale-105 transition-transform duration-300">
                    <span class="stat-counter gradient-text" data-target="{{ filter_var($stat->value, FILTER_SANITIZE_NUMBER_INT) ?: 100 }}">{{ $stat->value }}</span>
                </div>
                <div class="text-xs sm:text-sm font-medium text-surface-400 uppercase tracking-wider">{{ $stat->label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
