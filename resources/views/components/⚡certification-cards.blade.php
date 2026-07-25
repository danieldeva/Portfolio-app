<?php
use Livewire\Component;
new class extends Component {};
?>

<section id="certifications" class="section bg-surface-950/60">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">🏆 Certifications</div>
            <h2 class="section-title">Licenses & Achievements</h2>
            <p class="section-subtitle">Continuous learning and professional validations.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            @foreach(\App\Models\LocalDB::certs() as $cert)
            <div class="glass rounded-2xl p-6 flex items-start gap-4 hover:border-brand-500/30 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-2xl flex-shrink-0">
                    📜
                </div>
                <div class="flex-1">
                    <h3 class="text-base font-bold text-white mb-1">{{ $cert->title }}</h3>
                    <div class="text-xs text-brand-400 font-semibold mb-2">{{ $cert->issuer }}</div>
                    <div class="text-xs text-surface-500 mb-3">Issued: {{ \Carbon\Carbon::parse($cert->issue_date)->format('M Y') }}</div>
                    @if($cert->credential_url)
                    <a href="{{ $cert->credential_url }}" target="_blank" rel="noopener" class="text-xs text-surface-400 hover:text-white underline">Verify Credential →</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
