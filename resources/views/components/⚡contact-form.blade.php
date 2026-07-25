<?php
use Livewire\Component;
new class extends Component {
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';
    public bool $sent = false;

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'email' => 'required|email',
        'subject' => 'required|min:3|max:150',
        'message' => 'required|min:10',
    ];

    public function submit() {
        $this->validate();
        $this->reset(['name', 'email', 'subject', 'message']);
        $this->sent = true;
    }
};
?>

<section id="contact" class="section">
    <div class="section-container">
        <div class="section-header">
            <div class="section-tag">📬 Contact</div>
            <h2 class="section-title">Let's Build Something Together</h2>
            <p class="section-subtitle">Have a project in mind, a job opportunity, or just want to connect? Send me a message!</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="space-y-4">
                <div class="glass rounded-2xl p-6">
                    <div class="text-xs text-surface-500 uppercase tracking-wider mb-1">Email</div>
                    <a href="mailto:devadeva2330@gmail.com" class="text-sm font-semibold text-white hover:text-brand-400">devadeva2330@gmail.com</a>
                </div>
                <div class="glass rounded-2xl p-6">
                    <div class="text-xs text-surface-500 uppercase tracking-wider mb-1">Phone / WhatsApp</div>
                    <a href="tel:+919786535614" class="text-sm font-semibold text-white hover:text-brand-400">+91 9786535614</a>
                </div>
                <div class="glass rounded-2xl p-6">
                    <div class="text-xs text-surface-500 uppercase tracking-wider mb-1">Location</div>
                    <div class="text-sm font-semibold text-white">Bangalore, Karnataka, India</div>
                </div>
                <div class="glass rounded-2xl p-6">
                    <div class="text-xs text-surface-500 uppercase tracking-wider mb-1">Social Profiles</div>
                    <div class="flex gap-4 mt-2">
                        <a href="https://linkedin.com/in/devaraju-r-49860919b" target="_blank" class="text-xs text-brand-400 hover:underline">LinkedIn ↗</a>
                        <a href="https://github.com/danieldeva" target="_blank" class="text-xs text-brand-400 hover:underline">GitHub ↗</a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 glass rounded-2xl p-8">
                @if($sent)
                <div class="bg-emerald-500/10 border border-emerald-500/30 rounded-xl p-6 text-center">
                    <div class="text-3xl mb-2">🎉</div>
                    <h3 class="text-lg font-bold text-white mb-1">Message Sent Successfully!</h3>
                    <p class="text-xs text-surface-400">Thank you for reaching out. I'll respond to your email as soon as possible.</p>
                    <button wire:click="$set('sent', false)" class="mt-4 btn-ghost text-xs">Send another message</button>
                </div>
                @else
                <form wire:submit.prevent="submit" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-surface-300 mb-1">Your Name</label>
                            <input type="text" wire:model="name" class="w-full glass rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-brand-500/50">
                            @error('name') <span class="text-red-400 text-[10px] mt-1 block">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-surface-300 mb-1">Your Email</label>
                            <input type="email" wire:model="email" class="w-full glass rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-brand-500/50">
                            @error('email') <span class="text-red-400 text-[10px] mt-1 block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-surface-300 mb-1">Subject</label>
                        <input type="text" wire:model="subject" class="w-full glass rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-brand-500/50">
                        @error('subject') <span class="text-red-400 text-[10px] mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-surface-300 mb-1">Message</label>
                        <textarea wire:model="message" rows="5" class="w-full glass rounded-xl px-4 py-2.5 text-xs text-white outline-none focus:border-brand-500/50"></textarea>
                        @error('message') <span class="text-red-400 text-[10px] mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="w-full btn-primary py-3 flex items-center justify-center gap-2">
                        <span wire:loading.remove>Send Message 🚀</span>
                        <span wire:loading>Sending...</span>
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>
</section>
