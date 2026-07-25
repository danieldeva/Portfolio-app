<?php
use Livewire\Component;
new class extends Component {};
?>

{{-- ══════════════════════════════════════════════════════════════════════════
     🎥  VIDEO RESUME  —  Recruiter Walkthrough of Devaraju's Resume
     ══════════════════════════════════════════════════════════════════════════ --}}
<section id="recruiter-videos" class="section relative overflow-hidden">

    {{-- ── Background atmosphere ─────────────────────────────────────────────── --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0"
             style="background:radial-gradient(ellipse 70% 50% at 50% 0%, rgba(245,158,11,0.13) 0%, transparent 65%)"></div>
        <div class="absolute inset-0"
             style="background:radial-gradient(ellipse 40% 40% at 10% 80%, rgba(249,115,22,0.09) 0%, transparent 60%)"></div>
        <div class="absolute inset-0"
             style="background:radial-gradient(ellipse 35% 35% at 90% 70%, rgba(244,63,94,0.07) 0%, transparent 60%)"></div>
        <div class="absolute inset-0 opacity-[0.02]"
             style="background-image:linear-gradient(rgba(251,191,36,1) 1px,transparent 1px),linear-gradient(90deg,rgba(251,191,36,1) 1px,transparent 1px);background-size:55px 55px;"></div>
    </div>

    <div class="section-container relative z-10" x-data="{
        activeChapter: 0,
        playing: false,
        hovered: false,
        progress: 0,
        timer: null,

        chapters: [
            {
                id: 'intro',
                icon: '👋',
                label: 'Introduction',
                timestamp: '0:00',
                duration: 45,
                color: '#f59e0b',
                headline: 'Hi, I\'m Devaraju R',
                subline: 'Full Stack Laravel Developer · Bangalore, India',
                content: 'A self-driven developer with 3+ years building production-grade web apps. I specialise in the TALL Stack and love turning complex problems into elegant solutions.',
                visual: 'face',
                highlights: ['3+ Years Experience','TALL Stack Expert','Bangalore, India','Open to Remote']
            },
            {
                id: 'experience',
                icon: '💼',
                label: 'Work Experience',
                timestamp: '0:45',
                duration: 80,
                color: '#fb923c',
                headline: 'Work Experience',
                subline: '3 roles · 3+ years of production development',
                content: 'From junior developer to leading SaaS product development for 5K+ users. Each role levelled up my architecture thinking, team collaboration, and delivery speed.',
                visual: 'timeline',
                highlights: ['Tech Solutions Pvt. Ltd. — 2023–Present','Digital Agency Co. — 2022–2023','StartupXYZ Internship — 2021–2022','Mentored 3 junior developers']
            },
            {
                id: 'skills',
                icon: '⚡',
                label: 'Technical Skills',
                timestamp: '2:05',
                duration: 60,
                color: '#fbbf24',
                headline: 'Technical Skills',
                subline: 'Deep expertise across the full web development stack',
                content: 'Laravel is my primary weapon, but I\'m equally comfortable designing databases, crafting pixel-perfect UIs with TailwindCSS, and writing reactive components in Alpine.js.',
                visual: 'skills',
                highlights: ['Laravel 11 · Livewire 3','TailwindCSS · Alpine.js','MySQL · Redis · Docker','REST APIs · AWS · Git']
            },
            {
                id: 'projects',
                icon: '🚀',
                label: 'Key Projects',
                timestamp: '3:05',
                duration: 70,
                color: '#f97316',
                headline: 'Projects That Ship',
                subline: '25+ projects delivered · real users · real impact',
                content: 'Every project here solved a real problem. I\'ll walk you through 3 flagship builds — a multi-tenant SaaS, an e-commerce platform processing ₹2Cr+/month, and an AI-enhanced CRM.',
                visual: 'projects',
                highlights: ['Multi-tenant SaaS — 5K+ users','E-commerce — ₹2Cr+/month GMV','AI-CRM — 3 enterprise clients','Open-Source Laravel Package']
            },
            {
                id: 'education',
                icon: '🎓',
                label: 'Education & Growth',
                timestamp: '4:15',
                duration: 40,
                color: '#f43f5e',
                headline: 'Education & Certifications',
                subline: 'B.E. Computer Science · Continuous self-learner',
                content: 'Graduated with distinction in 2021. Since then, I\'ve completed 12+ certifications and never stopped learning — currently studying Event Sourcing and AWS Architecture.',
                visual: 'education',
                highlights: ['B.E. CS — 2018–2021','Laravel Certified (Laracasts)','AWS Cloud Practitioner','12+ Online Certifications']
            },
            {
                id: 'whyme',
                icon: '🎯',
                label: 'Why Hire Me',
                timestamp: '4:55',
                duration: 35,
                color: '#fcd34d',
                headline: 'Why You Should Hire Me',
                subline: 'Not just code — ownership, speed, and craft',
                content: 'I don\'t just write features — I own them end-to-end. I communicate clearly, ship fast without cutting corners, and raise the quality bar of every team I join.',
                visual: 'whyme',
                highlights: ['Ships fast · Breaks nothing','Clear communicator','Proactive problem-solver','Available < 2hr response time']
            }
        ],

        get current() { return this.chapters[this.activeChapter]; },

        play() {
            this.playing = true;
            this.progress = 0;
            clearInterval(this.timer);
            const dur = this.current.duration * 1000;
            const step = 100;
            let elapsed = 0;
            this.timer = setInterval(() => {
                elapsed += step;
                this.progress = Math.min((elapsed / dur) * 100, 100);
                if (this.progress >= 100) {
                    clearInterval(this.timer);
                    if (this.activeChapter < this.chapters.length - 1) {
                        setTimeout(() => { this.activeChapter++; this.play(); }, 600);
                    } else {
                        this.playing = false;
                    }
                }
            }, step);
        },

        pause() {
            this.playing = false;
            clearInterval(this.timer);
        },

        togglePlay() { this.playing ? this.pause() : this.play(); },

        jumpTo(i) {
            clearInterval(this.timer);
            this.activeChapter = i;
            this.progress = 0;
            this.playing = false;
        }
    }">

        {{-- ── Section header ─────────────────────────────────────────────────── --}}
        <div class="section-header">
            <div class="section-tag">🎥 Video Resume</div>
            <h2 class="section-title">
                My Resume, <span class="gradient-text">Explained by Me</span>
            </h2>
            <p class="section-subtitle">
                No cold scanning of bullet points. Watch a 5-minute video where I personally walk you
                through my experience, skills, and why I'm the right hire — chapter by chapter.
            </p>
        </div>

        {{-- ══════════════════════════════════════════════════════════════════════
             3-D MAIN PLAYER  —  CSS perspective with real-time chapter display
        ══════════════════════════════════════════════════════════════════════════ --}}
        <div class="grid grid-cols-1 xl:grid-cols-[1fr_320px] gap-6 mb-10"
             @mouseenter="hovered=true" @mouseleave="hovered=false">

            {{-- ── Video Screen ──────────────────────────────────────────────────── --}}
            <div class="relative transition-all duration-500"
                 :style="hovered
                    ? 'transform:perspective(1600px) rotateX(2deg) rotateY(-1.5deg) scale(1.01); filter:drop-shadow(0 40px 80px rgba(0,0,0,0.7)) drop-shadow(0 0 40px rgba(245,158,11,0.18))'
                    : 'transform:perspective(1600px) rotateX(0) rotateY(0) scale(1); filter:drop-shadow(0 24px 48px rgba(0,0,0,0.5)) drop-shadow(0 0 20px rgba(245,158,11,0.08))'">

                {{-- Screen bezel --}}
                <div class="rounded-2xl overflow-hidden border"
                     :style="`border-color:${current.color}40`"
                     style="background:#0c0a09;">

                    {{-- ── Browser chrome bar ──────────────────────────────────── --}}
                    <div class="flex items-center gap-2 px-4 py-2.5 border-b border-white/5"
                         style="background:rgba(255,255,255,0.03);">
                        <div class="flex gap-1.5">
                            <div class="w-3 h-3 rounded-full bg-red-500/70"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400/70"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/70"></div>
                        </div>
                        <div class="flex-1 mx-3 px-3 py-1 rounded text-[11px] text-surface-600 font-mono text-center"
                             style="background:rgba(255,255,255,0.04);">
                            🎥 devaraju.dev / video-resume
                        </div>
                        <div class="text-[10px] text-surface-700 font-mono">HD 1080p</div>
                    </div>

                    {{-- ── Video Canvas ─────────────────────────────────────────── --}}
                    <div class="relative w-full overflow-hidden" style="aspect-ratio:16/9;">

                        {{-- Dynamic background --}}
                        <div class="absolute inset-0 transition-all duration-700"
                             :style="`background:linear-gradient(145deg, ${current.color}1a 0%, rgba(12,10,9,0.97) 55%, rgba(12,10,9,1) 100%)`">
                        </div>

                        {{-- Subtle film grain overlay --}}
                        <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
                             style="background-image:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2240%22 height=%2240%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%220.9%22/></filter><rect width=%2240%22 height=%2240%22 filter=%22url(%23n)%22 opacity=%221%22/></svg>');"></div>

                        {{-- ── Intro Visual ─────────────────────────────────────── --}}
                        <template x-if="current.visual === 'face'">
                            <div class="absolute inset-0 flex items-center justify-center gap-12 px-12">
                                {{-- Avatar 3D orb --}}
                                <div class="hidden sm:flex flex-col items-center">
                                    <div class="hero-orb-3d relative flex items-center justify-center"
                                         style="width:160px;height:160px;"
                                         :style="`box-shadow:0 0 80px ${current.color}50, 0 0 160px ${current.color}20`">
                                        <span class="text-6xl relative z-10">👨‍💻</span>
                                    </div>
                                    <div class="mt-4 px-4 py-1.5 rounded-full text-xs font-bold text-black animate-float"
                                         :style="`background:${current.color}`">
                                        ● RECORDING
                                    </div>
                                </div>
                                {{-- Intro text --}}
                                <div class="flex-1 max-w-md">
                                    <div class="text-sm font-bold mb-2" :style="`color:${current.color}`">
                                        <span x-text="current.label"></span> · Chapter 1
                                    </div>
                                    <h3 class="text-4xl font-black text-white mb-2 leading-tight"
                                        x-text="current.headline"></h3>
                                    <p class="text-surface-400 text-sm leading-relaxed mb-5"
                                       x-text="current.content"></p>
                                    <div class="flex flex-wrap gap-2">
                                        <template x-for="h in current.highlights" :key="h">
                                            <span class="px-3 py-1 rounded-full text-xs font-semibold text-black"
                                                  :style="`background:${current.color}`" x-text="h"></span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>

                        {{-- ── Timeline Visual (Experience) ──────────────────────── --}}
                        <template x-if="current.visual === 'timeline'">
                            <div class="absolute inset-0 flex items-center justify-center px-10 gap-10">
                                <div class="flex-1 max-w-xs hidden lg:block">
                                    <div class="space-y-3">
                                        <template x-for="(h, i) in current.highlights" :key="i">
                                            <div class="flex items-center gap-3 text-sm text-surface-300">
                                                <div class="w-2 h-2 rounded-full shrink-0"
                                                     :style="`background:${current.color}`"></div>
                                                <span x-text="h"></span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <div class="flex-1 max-w-md">
                                    <div class="text-xs font-bold mb-2" :style="`color:${current.color}`"
                                         x-text="current.label + ' · Chapter 2'"></div>
                                    <h3 class="text-3xl font-black text-white mb-2" x-text="current.headline"></h3>
                                    <p class="text-surface-400 text-sm leading-relaxed mb-4" x-text="current.subline"></p>
                                    <p class="text-surface-500 text-xs leading-relaxed" x-text="current.content"></p>
                                    {{-- fake progress meter --}}
                                    <div class="mt-5 grid grid-cols-3 gap-2">
                                        <template x-for="(h,i) in [{l:'Companies',v:3},{l:'Years',v:'3+'},{l:'Projects',v:'25+'}]" :key="i">
                                            <div class="rounded-xl p-3 text-center" style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06)">
                                                <div class="text-xl font-black text-white" x-text="h.v"></div>
                                                <div class="text-[10px] text-surface-600" x-text="h.l"></div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>

                        {{-- ── Skills Visual ─────────────────────────────────────── --}}
                        <template x-if="current.visual === 'skills'">
                            <div class="absolute inset-0 flex items-center justify-center px-10 gap-8">
                                <div class="flex-1 max-w-sm hidden lg:block space-y-3">
                                    <template x-for="([skill, pct]) in [['Laravel',95],['Livewire',90],['Alpine.js',88],['TailwindCSS',92],['MySQL / Redis',80],['Docker / AWS',72]]" :key="skill">
                                        <div>
                                            <div class="flex justify-between text-xs mb-1">
                                                <span class="text-surface-300" x-text="skill"></span>
                                                <span :style="`color:${current.color}`" x-text="pct + '%'"></span>
                                            </div>
                                            <div class="skill-bar">
                                                <div class="skill-bar-fill" :style="`width:${pct}%; background:linear-gradient(90deg,${current.color},#fb923c)`"></div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                <div class="flex-1 max-w-md">
                                    <div class="text-xs font-bold mb-2" :style="`color:${current.color}`"
                                         x-text="current.label + ' · Chapter 3'"></div>
                                    <h3 class="text-3xl font-black text-white mb-2" x-text="current.headline"></h3>
                                    <p class="text-surface-400 text-sm leading-relaxed mb-4" x-text="current.content"></p>
                                    <div class="flex flex-wrap gap-2">
                                        <template x-for="h in current.highlights" :key="h">
                                            <span class="px-2 py-1 rounded-lg text-xs font-mono font-semibold"
                                                  :style="`color:${current.color};background:${current.color}15;border:1px solid ${current.color}30`"
                                                  x-text="h"></span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>

                        {{-- ── Projects Visual ───────────────────────────────────── --}}
                        <template x-if="current.visual === 'projects'">
                            <div class="absolute inset-0 flex items-center justify-center px-10 gap-8">
                                <div class="flex-1 max-w-xs hidden lg:block space-y-3">
                                    <template x-for="(h,i) in current.highlights" :key="i">
                                        <div class="rounded-xl p-3 text-sm"
                                             :style="`background:${current.color}10;border:1px solid ${current.color}25`">
                                            <div class="font-semibold text-white text-xs" x-text="h.split('—')[0]"></div>
                                            <div class="text-surface-600 text-[10px]" x-text="h.split('—')[1] || ''"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="flex-1 max-w-md">
                                    <div class="text-xs font-bold mb-2" :style="`color:${current.color}`"
                                         x-text="current.label + ' · Chapter 4'"></div>
                                    <h3 class="text-3xl font-black text-white mb-2" x-text="current.headline"></h3>
                                    <p class="text-surface-400 text-sm leading-relaxed mb-4" x-text="current.subline"></p>
                                    <p class="text-surface-500 text-xs leading-relaxed" x-text="current.content"></p>
                                </div>
                            </div>
                        </template>

                        {{-- ── Education Visual ──────────────────────────────────── --}}
                        <template x-if="current.visual === 'education'">
                            <div class="absolute inset-0 flex items-center justify-center px-10 gap-8">
                                <div class="hidden lg:flex flex-col items-center gap-4">
                                    <div class="w-24 h-24 rounded-2xl flex items-center justify-center text-5xl"
                                         :style="`background:${current.color}15;border:1px solid ${current.color}30`">🎓</div>
                                    <div class="text-center">
                                        <div class="text-white font-bold text-sm">Devaraju R</div>
                                        <div class="text-surface-500 text-xs">B.E. Computer Science</div>
                                        <div class="text-xs mt-1 font-bold" :style="`color:${current.color}`">Class of 2021</div>
                                    </div>
                                </div>
                                <div class="flex-1 max-w-md">
                                    <div class="text-xs font-bold mb-2" :style="`color:${current.color}`"
                                         x-text="current.label + ' · Chapter 5'"></div>
                                    <h3 class="text-3xl font-black text-white mb-2" x-text="current.headline"></h3>
                                    <p class="text-surface-400 text-sm leading-relaxed mb-4" x-text="current.content"></p>
                                    <div class="space-y-2">
                                        <template x-for="h in current.highlights" :key="h">
                                            <div class="flex items-center gap-2 text-xs">
                                                <div class="w-1.5 h-1.5 rounded-full" :style="`background:${current.color}`"></div>
                                                <span class="text-surface-300" x-text="h"></span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>

                        {{-- ── Why Me Visual ─────────────────────────────────────── --}}
                        <template x-if="current.visual === 'whyme'">
                            <div class="absolute inset-0 flex items-center justify-center px-10">
                                <div class="text-center max-w-lg">
                                    <div class="text-6xl mb-6 animate-float">🎯</div>
                                    <div class="text-xs font-bold mb-3" :style="`color:${current.color}`"
                                         x-text="current.label + ' · Chapter 6 (Final)'"></div>
                                    <h3 class="text-3xl font-black text-white mb-3" x-text="current.headline"></h3>
                                    <p class="text-surface-400 text-sm leading-relaxed mb-6" x-text="current.content"></p>
                                    <div class="flex flex-wrap justify-center gap-2">
                                        <template x-for="h in current.highlights" :key="h">
                                            <span class="px-3 py-1.5 rounded-full text-sm font-bold text-black"
                                                  :style="`background:${current.color}`" x-text="h"></span>
                                        </template>
                                    </div>
                                    <div class="mt-6">
                                        <a href="#contact" class="btn-primary inline-flex">
                                            📅 Book a Call with Me
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </template>

                        {{-- ── Play button overlay (shown when paused) ───────────── --}}
                        <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 cursor-pointer"
                             :class="playing ? 'opacity-0 pointer-events-none' : 'opacity-100'"
                             @click="togglePlay()">
                            <div class="relative">
                                <div class="absolute -inset-4 rounded-full animate-ping opacity-15"
                                     :style="`background:${current.color}`"></div>
                                <div class="w-20 h-20 rounded-full flex items-center justify-center border-2 backdrop-blur-sm hover:scale-110 transition-transform duration-200"
                                     :style="`background:rgba(0,0,0,0.6);border-color:${current.color}80`">
                                    <svg class="w-9 h-9 ml-1" fill="currentColor" viewBox="0 0 24 24"
                                         :style="`color:${current.color}`">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        {{-- Pause button (shown when playing, click to pause) --}}
                        <div class="absolute top-4 right-4 cursor-pointer transition-opacity duration-300"
                             :class="playing ? 'opacity-100' : 'opacity-0 pointer-events-none'"
                             @click="pause()">
                            <div class="w-9 h-9 rounded-full flex items-center justify-center backdrop-blur-sm border"
                                 :style="`background:rgba(0,0,0,0.5);border-color:${current.color}60`">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"
                                     :style="`color:${current.color}`">
                                    <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>
                                </svg>
                            </div>
                        </div>

                        {{-- Chapter badge (top-left) --}}
                        <div class="absolute top-3 left-3 flex items-center gap-2">
                            <span class="px-3 py-1 rounded-full text-xs font-black text-black"
                                  :style="`background:${current.color}`"
                                  x-text="current.icon + ' ' + current.label"></span>
                            <span x-show="playing"
                                  class="flex items-center gap-1 px-2 py-1 rounded-full text-[10px] font-bold text-white"
                                  style="background:rgba(220,38,38,0.85)">
                                <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                REC
                            </span>
                        </div>

                        {{-- Timestamp badge (bottom-right) --}}
                        <div class="absolute bottom-12 right-3 px-2 py-1 rounded text-[11px] font-mono font-bold text-white"
                             style="background:rgba(0,0,0,0.75)">
                            <span x-text="current.timestamp"></span>
                            <span class="text-surface-600"> / 5:10</span>
                        </div>
                    </div>

                    {{-- ── Player controls bar ──────────────────────────────────── --}}
                    <div class="px-4 pt-2 pb-3" style="background:rgba(0,0,0,0.7);">
                        {{-- Progress track --}}
                        <div class="relative h-1.5 bg-white/10 rounded-full mb-3 cursor-pointer group"
                             @click="
                                const rect = $el.getBoundingClientRect();
                                const pct = (event.clientX - rect.left) / rect.width;
                                const idx = Math.floor(pct * chapters.length);
                                jumpTo(Math.max(0, Math.min(idx, chapters.length-1)));
                             ">
                            {{-- Chapter segments --}}
                            <template x-for="(ch, i) in chapters" :key="i">
                                <div class="absolute top-0 bottom-0 rounded-full"
                                     :style="`left:${(i/chapters.length)*100}%;
                                              width:${(1/chapters.length)*100 - 0.5}%;
                                              background:${i < activeChapter ? ch.color : (i === activeChapter ? ch.color : 'rgba(255,255,255,0.08)') };
                                              opacity:${i < activeChapter ? 0.9 : (i === activeChapter ? 1 : 1) }`">
                                    <div x-show="i === activeChapter"
                                         class="absolute top-0 bottom-0 rounded-full transition-all duration-100"
                                         :style="`width:${progress}%;background:white;opacity:0.4`"></div>
                                </div>
                            </template>
                            {{-- Scrubber dot --}}
                            <div class="absolute top-1/2 -translate-y-1/2 w-3.5 h-3.5 rounded-full border-2 border-white transition-all"
                                 :style="`left:calc(${((activeChapter + progress/100) / chapters.length) * 100}% - 7px);
                                          background:${current.color};
                                          box-shadow:0 0 8px ${current.color}80`"></div>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            {{-- Left controls --}}
                            <div class="flex items-center gap-3">
                                {{-- Prev --}}
                                <button @click="jumpTo(Math.max(0, activeChapter-1))"
                                        class="text-surface-500 hover:text-white transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/></svg>
                                </button>
                                {{-- Play/Pause --}}
                                <button @click="togglePlay()"
                                        class="w-9 h-9 rounded-full flex items-center justify-center transition-all hover:scale-110"
                                        :style="`background:${current.color}`">
                                    <svg x-show="!playing" class="w-4 h-4 text-black ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    <svg x-show="playing"  class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                                </button>
                                {{-- Next --}}
                                <button @click="jumpTo(Math.min(chapters.length-1, activeChapter+1))"
                                        class="text-surface-500 hover:text-white transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zm2.5-6l5.5 4V8z"/></svg>
                                </button>
                                {{-- Current chapter label --}}
                                <span class="text-xs text-surface-500 hidden sm:block">
                                    Chapter <span x-text="activeChapter + 1" class="text-white font-bold"></span>
                                    of <span x-text="chapters.length"></span> ·
                                    <span x-text="current.label" :style="`color:${current.color}`" class="font-semibold"></span>
                                </span>
                            </div>
                            {{-- Right controls --}}
                            <div class="flex items-center gap-3 text-xs text-surface-600 font-mono">
                                <span x-text="current.timestamp + ' / 5:10'"></span>
                                <span class="text-[10px] px-2 py-0.5 rounded"
                                      style="background:rgba(255,255,255,0.05)">HD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── Chapter Sidebar ──────────────────────────────────────────────── --}}
            <div class="flex flex-col gap-2 xl:max-h-[520px] xl:overflow-y-auto pr-1"
                 style="scrollbar-width:thin;scrollbar-color:rgba(245,158,11,0.3) transparent;">
                <div class="text-xs font-bold text-surface-600 uppercase tracking-widest mb-1 px-1">Chapters</div>
                <template x-for="(ch, i) in chapters" :key="ch.id">
                    <button @click="jumpTo(i)"
                            class="w-full text-left rounded-xl px-4 py-3 transition-all duration-200 flex items-center gap-3 group"
                            :style="activeChapter === i
                                ? `background:${ch.color}18;border:1px solid ${ch.color}40;`
                                : 'background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);'">
                        {{-- Chapter number --}}
                        <div class="w-7 h-7 rounded-lg flex items-center justify-center text-[10px] font-black shrink-0 transition-all"
                             :style="activeChapter === i
                                ? `background:${ch.color};color:#000`
                                : 'background:rgba(255,255,255,0.05);color:#57534e'">
                            <span x-text="i+1"></span>
                        </div>
                        {{-- Info --}}
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-1.5 mb-0.5">
                                <span x-text="ch.icon" class="text-sm leading-none"></span>
                                <span class="text-xs font-semibold truncate transition-colors"
                                      :style="activeChapter === i ? `color:${ch.color}` : 'color:#d6d3d1'"
                                      x-text="ch.label"></span>
                            </div>
                            <div class="text-[10px] text-surface-600 font-mono" x-text="ch.timestamp"></div>
                        </div>
                        {{-- Playing indicator --}}
                        <div x-show="activeChapter === i && playing"
                             class="flex items-end gap-px h-4 shrink-0">
                            <div class="w-0.5 rounded-full animate-bounce" style="animation-delay:0s;height:40%"
                                 :style="`background:${ch.color}`"></div>
                            <div class="w-0.5 rounded-full animate-bounce" style="animation-delay:0.1s;height:80%"
                                 :style="`background:${ch.color}`"></div>
                            <div class="w-0.5 rounded-full animate-bounce" style="animation-delay:0.2s;height:55%"
                                 :style="`background:${ch.color}`"></div>
                        </div>
                        {{-- Completed checkmark --}}
                        <div x-show="activeChapter > i"
                             class="text-emerald-400 text-xs shrink-0">✓</div>
                    </button>
                </template>

                {{-- CTA inside sidebar --}}
                <div class="mt-2 rounded-xl p-4 border" style="background:rgba(245,158,11,0.06);border-color:rgba(245,158,11,0.2);">
                    <div class="text-xs font-bold text-brand-300 mb-2">📄 Prefer PDF?</div>
                    <p class="text-[11px] text-surface-500 mb-3 leading-relaxed">Get my full resume sent to your inbox instantly.</p>
                    <a href="#contact" class="btn-primary text-xs py-2 px-4 w-full text-center block">
                        Request Resume
                    </a>
                </div>
            </div>
        </div>

        {{-- ══════════════════════════════════════════════════════════════════════
             RECRUITER ACTION STRIP
        ══════════════════════════════════════════════════════════════════════════ --}}
        <div class="relative rounded-3xl overflow-hidden">
            <div class="glass-strong border rounded-3xl p-8 sm:p-10 relative"
                 style="border-color:rgba(245,158,11,0.2);
                        transform:perspective(1200px) rotateX(1deg);
                        transition:transform 0.5s ease,box-shadow 0.5s ease;"
                 @mouseenter="$el.style.transform='perspective(1200px) rotateX(0deg) scale(1.008)';$el.style.boxShadow='0 40px 80px rgba(0,0,0,0.5),0 0 40px rgba(245,158,11,0.12)'"
                 @mouseleave="$el.style.transform='perspective(1200px) rotateX(1deg) scale(1)';$el.style.boxShadow=''">

                <div class="absolute top-0 right-0 w-80 h-80 pointer-events-none"
                     style="background:radial-gradient(circle,rgba(245,158,11,0.1) 0%,transparent 70%);filter:blur(50px);"></div>

                {{-- Floating 3D decorations --}}
                <div class="absolute top-5 right-8 animate-float hidden lg:block pointer-events-none" style="animation-delay:0s;">
                    <div class="hero-orb-3d" style="width:60px;height:60px;opacity:0.5;"></div>
                </div>
                <div class="absolute bottom-5 right-28 text-3xl animate-float pointer-events-none hidden lg:block" style="animation-delay:2s;">🎯</div>
                <div class="absolute top-6 right-28 text-xl animate-float pointer-events-none hidden lg:block" style="animation-delay:1s;">⚡</div>

                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                    <div class="text-center lg:text-left max-w-xl">
                        <div class="inline-flex items-center gap-2 badge-brand mb-4">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
                            </span>
                            Open to Full-Time & Contract
                        </div>
                        <h3 class="text-3xl sm:text-4xl font-black text-white mb-3">
                            Convinced? Let's <span class="gradient-text">Talk.</span>
                        </h3>
                        <p class="text-surface-400 leading-relaxed text-sm">
                            You just watched my resume in motion. I'm available for a technical interview,
                            30-minute intro call, or just a quick Slack message.
                            <span class="text-brand-300 font-semibold">I reply within 2 hours.</span>
                        </p>
                    </div>
                    <div class="flex flex-col gap-3 shrink-0 w-full sm:w-auto">
                        <a href="#contact" class="btn-primary px-8 py-3.5 text-sm text-center">
                            📅 Book Intro Call
                        </a>
                        <a href="#contact" class="btn-ghost px-8 py-3.5 text-sm text-center">
                            📄 Get My Resume (PDF)
                        </a>
                        <a href="https://linkedin.com/in/devaraju-r-49860919b" target="_blank" rel="noopener"
                           class="btn-outline px-8 py-3.5 text-sm text-center">
                            💼 LinkedIn Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
