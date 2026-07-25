<?php
use Livewire\Component;
new class extends Component {};
?>

<section id="blog" class="section bg-surface-950/40">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">📝 Blog</div>
            <h2 class="section-title">Articles & Insights</h2>
            <p class="section-subtitle">Thoughts on backend architecture, Laravel patterns, and web development.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(\App\Models\LocalDB::posts() as $post)
            <div class="card group flex flex-col justify-between hover:-translate-y-1 transition-all duration-300">
                <div>
                    <div class="text-xs text-surface-500 mb-2">{{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }} · {{ $post->read_time_minutes ?? 5 }} min read</div>
                    <h3 class="text-lg font-bold text-white group-hover:text-brand-400 transition-colors mb-2">{{ $post->title }}</h3>
                    <p class="text-xs text-surface-400 leading-relaxed mb-4">{{ $post->excerpt }}</p>
                </div>
                <div class="pt-4 border-t border-white/5">
                    <span class="text-xs text-brand-400 font-semibold group-hover:underline">Read Article →</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
