import './bootstrap';
import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { TextPlugin } from 'gsap/TextPlugin';

gsap.registerPlugin(ScrollTrigger, TextPlugin);
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// ─── Alpine Global Stores ────────────────────────────────────────────────────

Alpine.store('theme', {
    dark: true,
    init() {
        const saved = localStorage.getItem('theme');
        const system = window.matchMedia('(prefers-color-scheme: dark)').matches;
        this.dark = saved ? saved === 'dark' : system;
        this.apply();
    },
    toggle() {
        this.dark = !this.dark;
        localStorage.setItem('theme', this.dark ? 'dark' : 'light');
        this.apply();
    },
    apply() {
        document.documentElement.classList.toggle('dark', this.dark);
        document.body.classList.toggle('light-mode', !this.dark);
    }
});

Alpine.store('nav', {
    mobileOpen: false,
    scrolled: false,
    activeSection: 'hero',
    init() {
        window.addEventListener('scroll', () => {
            this.scrolled = window.scrollY > 60;
            this.updateActiveSection();
        });
    },
    updateActiveSection() {
        const sections = ['hero','about','skills','experience','projects','blog','contact'];
        for (const id of sections.reverse()) {
            const el = document.getElementById(id);
            if (el && el.getBoundingClientRect().top <= 100) {
                this.activeSection = id;
                break;
            }
        }
    }
});

Alpine.store('terminal', {
    open: false,
    lines: [],
    input: '',
    toggle() { this.open = !this.open; if (this.open) this.$nextTick(() => document.getElementById('terminal-input')?.focus()); },
});

Alpine.store('recruiter', {
    open: false,
    toggle() { this.open = !this.open; document.body.style.overflow = this.open ? 'hidden' : ''; }
});

Alpine.store('chat', {
    open: false,
    messages: [],
    input: '',
    toggle() { this.open = !this.open; }
});

window.Alpine = Alpine;
Alpine.start();

// ─── Custom Cursor ────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.getElementById('custom-cursor');
    const follower = document.getElementById('cursor-follower');
    let mouseX = 0, mouseY = 0, followerX = 0, followerY = 0;

    if (cursor && follower && window.innerWidth > 768) {
        document.addEventListener('mousemove', e => {
            mouseX = e.clientX; mouseY = e.clientY;
            cursor.style.left = mouseX + 'px';
            cursor.style.top = mouseY + 'px';
        });
        const animateFollower = () => {
            followerX += (mouseX - followerX) * 0.12;
            followerY += (mouseY - followerY) * 0.12;
            follower.style.left = followerX + 'px';
            follower.style.top = followerY + 'px';
            requestAnimationFrame(animateFollower);
        };
        animateFollower();

        document.querySelectorAll('a, button, .card, .card-project').forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.width = '8px'; cursor.style.height = '8px';
                follower.style.width = '60px'; follower.style.height = '60px';
                follower.style.borderColor = 'rgba(245,158,11,0.85)';
            });
            el.addEventListener('mouseleave', () => {
                cursor.style.width = '20px'; cursor.style.height = '20px';
                follower.style.width = '40px'; follower.style.height = '40px';
                follower.style.borderColor = 'rgba(245,158,11,0.5)';
            });
        });
    }

    // ─── Scroll-triggered Animations ─────────────────────────────────────────
    const initScrollAnimations = () => {
        document.querySelectorAll('.aos-init').forEach(el => {
            const obs = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const delay = el.dataset.delay || 0;
                        setTimeout(() => el.classList.add('aos-animate'), delay);
                        obs.unobserve(el);
                    }
                });
            }, { threshold: 0.1 });
            obs.observe(el);
        });
    };
    initScrollAnimations();

    // ─── Hero Particles ───────────────────────────────────────────────────────
    const canvas = document.getElementById('particles-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const particles = [];
        const count = 80;
        for (let i = 0; i < count; i++) {
            particles.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                r: Math.random() * 2 + 0.5,
                vx: (Math.random() - 0.5) * 0.4,
                vy: (Math.random() - 0.5) * 0.4,
                alpha: Math.random() * 0.5 + 0.1,
            });
        }
        let mouseX = canvas.width / 2, mouseY = canvas.height / 2;
        canvas.addEventListener('mousemove', e => { mouseX = e.clientX; mouseY = e.clientY; });
        const draw = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                const dx = mouseX - p.x, dy = mouseY - p.y;
                const dist = Math.sqrt(dx*dx + dy*dy);
                if (dist < 120) { p.vx += dx * 0.00005; p.vy += dy * 0.00005; }
                p.x += p.vx; p.y += p.vy;
                if (p.x < 0) p.x = canvas.width; if (p.x > canvas.width) p.x = 0;
                if (p.y < 0) p.y = canvas.height; if (p.y > canvas.height) p.y = 0;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                // Alternate particle colors: yellow, orange, rose
                const colors = ['rgba(251,191,36,', 'rgba(249,115,22,', 'rgba(244,63,94,'];
                const ci = Math.floor(p.x * 3 / (canvas.width || 1)) % colors.length;
                ctx.fillStyle = `${colors[ci]}${p.alpha})`;
                ctx.fill();
                // Connect nearby particles
                particles.forEach(p2 => {
                    const d = Math.sqrt((p.x-p2.x)**2 + (p.y-p2.y)**2);
                    if (d < 100) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(245,158,11,${0.12 * (1 - d/100)})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(p.x, p.y); ctx.lineTo(p2.x, p2.y);
                        ctx.stroke();
                    }
                });
            });
            requestAnimationFrame(draw);
        };
        draw();
        window.addEventListener('resize', () => { canvas.width = window.innerWidth; canvas.height = window.innerHeight; });
    }

    // ─── Typing Animation ─────────────────────────────────────────────────────
    const typingEl = document.getElementById('typing-text');
    if (typingEl) {
        const titles = JSON.parse(typingEl.dataset.titles || '[]');
        let i = 0;
        const typeNext = () => {
            const title = titles[i % titles.length];
            gsap.to(typingEl, {
                duration: 0.05 * title.length,
                text: { value: title, delimiter: '' },
                ease: 'none',
                onComplete: () => setTimeout(() => {
                    gsap.to(typingEl, {
                        duration: 0.03 * title.length,
                        text: { value: '', delimiter: '' },
                        ease: 'none',
                        onComplete: () => { i++; setTimeout(typeNext, 400); }
                    });
                }, 2000)
            });
        };
        setTimeout(typeNext, 800);
    }

    // ─── Animated Counters ────────────────────────────────────────────────────
    document.querySelectorAll('[data-counter]').forEach(el => {
        const target = parseInt(el.dataset.counter);
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    gsap.from(el, { textContent: 0, duration: 2, ease: 'power2.out',
                        snap: { textContent: 1 },
                        onUpdate() { el.textContent = Math.ceil(parseFloat(el.textContent)); }
                    });
                    obs.unobserve(el);
                }
            });
        });
        obs.observe(el);
    });

    // ─── Skill Bar Animation ──────────────────────────────────────────────────
    document.querySelectorAll('.skill-bar-fill').forEach(el => {
        const width = el.dataset.width || '80%';
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    gsap.to(el, { width, duration: 1.2, ease: 'power3.out', delay: parseFloat(el.dataset.delay || 0) });
                    obs.unobserve(el);
                }
            });
        });
        obs.observe(el);
    });

    // ─── GSAP Hero Entrance ───────────────────────────────────────────────────
    gsap.timeline({ delay: 0.3 })
        .from('#hero-tag', { y: 30, opacity: 0, duration: 0.6, ease: 'power3.out' })
        .from('#hero-name', { y: 50, opacity: 0, duration: 0.8, ease: 'power3.out' }, '-=0.3')
        .from('#hero-subtitle', { y: 30, opacity: 0, duration: 0.6, ease: 'power3.out' }, '-=0.4')
        .from('#hero-ctas', { y: 30, opacity: 0, duration: 0.6, ease: 'power3.out' }, '-=0.3')
        .from('#hero-stats', { y: 20, opacity: 0, duration: 0.6, ease: 'power3.out' }, '-=0.2')
        .from('#hero-scroll', { opacity: 0, duration: 0.4 });

    // ─── Mouse Parallax for Hero ──────────────────────────────────────────────
    document.addEventListener('mousemove', e => {
        const { innerWidth: w, innerHeight: h } = window;
        const x = (e.clientX / w - 0.5) * 30;
        const y = (e.clientY / h - 0.5) * 20;
        document.querySelectorAll('.parallax-layer').forEach(el => {
            const depth = parseFloat(el.dataset.depth || 1);
            gsap.to(el, { x: x * depth, y: y * depth, duration: 1.5, ease: 'power1.out' });
        });
    });

    // ─── 3D Card Tilt Effect ──────────────────────────────────────────────
    document.querySelectorAll('.tilt-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const cx = rect.left + rect.width  / 2;
            const cy = rect.top  + rect.height / 2;
            const dx = (e.clientX - cx) / (rect.width  / 2);
            const dy = (e.clientY - cy) / (rect.height / 2);
            const rotX = dy * -12;
            const rotY = dx *  12;
            card.style.transform = `perspective(600px) rotateX(${rotX}deg) rotateY(${rotY}deg) scale(1.04)`;
            const shine = card.querySelector('.tilt-card-shine');
            if (shine) {
                const px = ((e.clientX - rect.left) / rect.width  * 100).toFixed(1);
                const py = ((e.clientY - rect.top)  / rect.height * 100).toFixed(1);
                shine.style.background = `radial-gradient(circle at ${px}% ${py}%, rgba(255,220,80,0.18) 0%, transparent 60%)`;
                shine.style.opacity = '1';
            }
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(600px) rotateX(0deg) rotateY(0deg) scale(1)';
            const shine = card.querySelector('.tilt-card-shine');
            if (shine) shine.style.opacity = '0';
        });
    });

    // ─── Konami Code Easter Egg ───────────────────────────────────────────────
    const konamiCode = ['ArrowUp','ArrowUp','ArrowDown','ArrowDown','ArrowLeft','ArrowRight','ArrowLeft','ArrowRight','b','a'];
    let konamiIndex = 0;
    document.addEventListener('keydown', e => {
        if (e.key === konamiCode[konamiIndex]) {
            konamiIndex++;
            if (konamiIndex === konamiCode.length) {
                konamiIndex = 0;
                triggerEasterEgg();
            }
        } else { konamiIndex = 0; }
    });
    function triggerEasterEgg() {
        const egg = document.getElementById('easter-egg');
        if (egg) {
            egg.style.display = 'flex';
            egg.style.pointerEvents = 'auto';
            setTimeout(() => { egg.style.display = 'none'; egg.style.pointerEvents = 'none'; }, 4000);
        }
    }

    // ─── Keyboard Shortcuts ───────────────────────────────────────────────────
    document.addEventListener('keydown', e => {
        if (e.ctrlKey && e.shiftKey && e.key === 'T') {
            e.preventDefault();
            Alpine.store('terminal').toggle();
        }
        if (e.key === 'Escape') {
            Alpine.store('terminal').open = false;
            Alpine.store('recruiter').open = false;
            Alpine.store('chat').open = false;
        }
    });
});
