<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\{Profile, Skill, Experience, Project, Certification, Testimonial, Statistic, BlogPost, Setting};

class PortfolioSeeder extends Seeder {
    public function run(): void {
        // Profile
        Profile::updateOrCreate(['email' => 'devadeva2330@gmail.com'], [
            'name' => 'Devaraju R',
            'tagline' => 'Full Stack Laravel Developer & TALL Stack Engineer',
            'bio' => "I'm Devaraju R, a passionate full-stack developer specialising in the TALL Stack (TailwindCSS, Alpine.js, Livewire, Laravel). With a strong foundation in clean architecture and modern UI design, I craft web applications that are both performant and elegant.\n\nBased in Bangalore, I thrive on solving complex problems and delivering user experiences that leave a lasting impression. I'm an open-source enthusiast, continuous learner, and firm believer in writing code that tells a story.",
            'email' => 'devadeva2330@gmail.com',
            'phone' => '+91 9786535614',
            'location' => 'Bangalore, Karnataka, India',
            'linkedin_url' => 'https://linkedin.com/in/devaraju-r-49860919b',
            'github_url' => 'https://github.com/danieldeva',
            'open_to_work' => true,
            'availability' => 'Immediately Available',
            'notice_period' => '30 Days',
            'preferred_location' => 'Bangalore / Remote / Hybrid',
            'salary_range' => 'Competitive / Open to discuss',
        ]);

        // Statistics
        $stats = [
            ['label' => 'Years of Experience', 'value' => '3', 'suffix' => '+', 'icon' => 'calendar', 'color' => 'violet'],
            ['label' => 'Projects Completed', 'value' => '25', 'suffix' => '+', 'icon' => 'folder', 'color' => 'indigo'],
            ['label' => 'GitHub Repositories', 'value' => '30', 'suffix' => '+', 'icon' => 'github', 'color' => 'purple'],
            ['label' => 'Lines of Code', 'value' => '500K', 'suffix' => '+', 'icon' => 'code', 'color' => 'fuchsia'],
            ['label' => 'Happy Clients', 'value' => '15', 'suffix' => '+', 'icon' => 'users', 'color' => 'sky'],
            ['label' => 'Problems Solved', 'value' => '200', 'suffix' => '+', 'icon' => 'check-circle', 'color' => 'emerald'],
        ];
        foreach ($stats as $i => $stat) {
            Statistic::updateOrCreate(['label' => $stat['label']], array_merge($stat, ['sort_order' => $i]));
        }

        // Skills
        $skills = [
            // Frontend
            ['name' => 'HTML5', 'category' => 'frontend', 'level' => 95, 'confidence' => 95, 'years' => 3, 'color' => '#e34c26'],
            ['name' => 'CSS3', 'category' => 'frontend', 'level' => 92, 'confidence' => 92, 'years' => 3, 'color' => '#264de4'],
            ['name' => 'TailwindCSS', 'category' => 'frontend', 'level' => 95, 'confidence' => 95, 'years' => 2, 'color' => '#38bdf8'],
            ['name' => 'Alpine.js', 'category' => 'frontend', 'level' => 88, 'confidence' => 88, 'years' => 2, 'color' => '#77c1d2'],
            ['name' => 'JavaScript', 'category' => 'frontend', 'level' => 85, 'confidence' => 85, 'years' => 3, 'color' => '#f7df1e'],
            ['name' => 'Livewire', 'category' => 'frontend', 'level' => 90, 'confidence' => 92, 'years' => 2, 'color' => '#fb70a9'],
            // Backend
            ['name' => 'PHP', 'category' => 'backend', 'level' => 90, 'confidence' => 92, 'years' => 3, 'color' => '#777bb4'],
            ['name' => 'Laravel', 'category' => 'backend', 'level' => 92, 'confidence' => 95, 'years' => 3, 'color' => '#ff2d20', 'featured' => true],
            ['name' => 'Filament', 'category' => 'backend', 'level' => 88, 'confidence' => 90, 'years' => 1, 'color' => '#f59e0b'],
            ['name' => 'REST APIs', 'category' => 'backend', 'level' => 85, 'confidence' => 88, 'years' => 2, 'color' => '#6366f1'],
            // Database
            ['name' => 'MySQL', 'category' => 'database', 'level' => 85, 'confidence' => 87, 'years' => 3, 'color' => '#00758f'],
            ['name' => 'Redis', 'category' => 'database', 'level' => 72, 'confidence' => 75, 'years' => 1, 'color' => '#dc382d'],
            ['name' => 'SQLite', 'category' => 'database', 'level' => 80, 'confidence' => 82, 'years' => 2, 'color' => '#003b57'],
            // DevOps
            ['name' => 'Linux', 'category' => 'devops', 'level' => 80, 'confidence' => 82, 'years' => 3, 'color' => '#fcc624'],
            ['name' => 'Nginx', 'category' => 'devops', 'level' => 75, 'confidence' => 78, 'years' => 2, 'color' => '#009639'],
            ['name' => 'Docker', 'category' => 'devops', 'level' => 70, 'confidence' => 72, 'years' => 1, 'color' => '#2496ed'],
            // Tools
            ['name' => 'Vite', 'category' => 'tools', 'level' => 88, 'confidence' => 90, 'years' => 2, 'color' => '#646cff'],
            ['name' => 'Composer', 'category' => 'tools', 'level' => 90, 'confidence' => 92, 'years' => 3, 'color' => '#885630'],
            ['name' => 'NPM', 'category' => 'tools', 'level' => 85, 'confidence' => 87, 'years' => 3, 'color' => '#cb0000'],
            // VCS
            ['name' => 'Git', 'category' => 'vcs', 'level' => 88, 'confidence' => 90, 'years' => 3, 'color' => '#f05032'],
            ['name' => 'GitHub', 'category' => 'vcs', 'level' => 88, 'confidence' => 90, 'years' => 3, 'color' => '#181717'],
            // Soft Skills
            ['name' => 'Problem Solving', 'category' => 'soft', 'level' => 90, 'confidence' => 90, 'years' => 3, 'color' => '#8b5cf6'],
            ['name' => 'Team Collaboration', 'category' => 'soft', 'level' => 88, 'confidence' => 88, 'years' => 3, 'color' => '#06b6d4'],
            ['name' => 'Clean Code', 'category' => 'soft', 'level' => 92, 'confidence' => 92, 'years' => 3, 'color' => '#10b981'],
        ];
        foreach ($skills as $i => $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], array_merge($skill, ['sort_order' => $i]));
        }

        // Experience
        $experiences = [
            [
                'title' => 'Full Stack Laravel Developer',
                'company' => 'Tech Solutions Pvt. Ltd.',
                'location' => 'Bangalore, Karnataka',
                'start_date' => '2023-06-01',
                'end_date' => null,
                'is_current' => true,
                'employment_type' => 'Full-time',
                'description' => 'Leading full-stack development of enterprise-grade web applications using the TALL Stack. Responsible for architecture decisions, code reviews, and mentoring junior developers.',
                'achievements' => [
                    'Reduced page load time by 60% through query optimisation and Redis caching',
                    'Built a real-time dashboard serving 5,000+ daily active users',
                    'Introduced CI/CD pipelines, reducing deployment time by 80%',
                    'Architected a multi-tenant SaaS application from scratch',
                ],
                'technologies' => ['Laravel', 'Livewire', 'TailwindCSS', 'Alpine.js', 'MySQL', 'Redis', 'Docker', 'GitHub Actions'],
                'sort_order' => 0,
            ],
            [
                'title' => 'PHP Laravel Developer',
                'company' => 'Digital Agency Co.',
                'location' => 'Chennai, Tamil Nadu',
                'start_date' => '2022-01-01',
                'end_date' => '2023-05-31',
                'is_current' => false,
                'employment_type' => 'Full-time',
                'description' => 'Developed and maintained client web applications for e-commerce, CRM, and content management platforms. Worked closely with designers to deliver pixel-perfect UIs.',
                'achievements' => [
                    'Delivered 10+ client projects on time and within budget',
                    'Built a custom CMS used by 3 clients, saving 40 development hours per project',
                    'Integrated payment gateways (Razorpay, Stripe) across multiple platforms',
                ],
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'TailwindCSS', 'JavaScript', 'REST APIs'],
                'sort_order' => 1,
            ],
            [
                'title' => 'Junior PHP Developer',
                'company' => 'StartupXYZ',
                'location' => 'Remote',
                'start_date' => '2021-06-01',
                'end_date' => '2021-12-31',
                'is_current' => false,
                'employment_type' => 'Internship',
                'description' => 'Started my professional journey building internal tools and CRUD applications. Gained hands-on experience with MVC architecture, database design, and agile development practices.',
                'achievements' => [
                    'Built an inventory management system from scratch',
                    'Learned Laravel best practices under senior developer guidance',
                    'Contributed to open source Laravel packages',
                ],
                'technologies' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap', 'jQuery'],
                'sort_order' => 2,
            ],
        ];
        foreach ($experiences as $exp) {
            Experience::updateOrCreate(['title' => $exp['title'], 'company' => $exp['company']], $exp);
        }

        // Projects
        $projects = [
            [
                'title' => 'SaaS Admin Dashboard',
                'slug' => 'saas-admin-dashboard',
                'description' => 'A multi-tenant SaaS platform with real-time analytics, role-based access control, and subscription management.',
                'long_description' => "A fully-featured multi-tenant SaaS administration dashboard built with Laravel Filament. The system supports multiple organisations, each with their own isolated data, custom roles, and subscription plans.\n\nKey technical highlights include dynamic menus based on permissions, real-time notifications via Livewire polling, and a comprehensive analytics dashboard with Chart.js visualisations.",
                'live_url' => null,
                'github_url' => 'https://github.com/danieldeva',
                'featured' => true,
                'tech_stack' => ['Laravel', 'Filament', 'Livewire', 'TailwindCSS', 'MySQL', 'Redis'],
                'features' => ['Multi-tenancy', 'Role-based access', 'Real-time analytics', 'Subscription billing', 'Email notifications'],
                'challenges' => ['Isolating tenant data efficiently', 'Building flexible permission system'],
                'metrics' => ['5000+ daily active users', '99.9% uptime', '< 200ms response time'],
                'status' => 'completed',
                'category' => 'saas',
                'sort_order' => 0,
            ],
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'description' => 'A full-featured e-commerce platform with product management, cart, Razorpay payment integration, and an admin panel.',
                'long_description' => "Built a comprehensive e-commerce platform for a retail client with 500+ products. Features include dynamic product filtering, wishlist, reviews, coupon system, and an intuitive admin dashboard.",
                'live_url' => null,
                'github_url' => 'https://github.com/danieldeva',
                'featured' => true,
                'tech_stack' => ['Laravel', 'Livewire', 'TailwindCSS', 'Alpine.js', 'MySQL', 'Razorpay'],
                'features' => ['Product catalogue', 'Shopping cart', 'Payment gateway', 'Order tracking', 'Admin panel'],
                'challenges' => ['Inventory synchronisation', 'Payment failure recovery'],
                'metrics' => ['500+ products', 'Rs. 10L+ transactions', '1200+ orders processed'],
                'status' => 'completed',
                'category' => 'ecommerce',
                'sort_order' => 1,
            ],
            [
                'title' => 'Real-time Chat Application',
                'slug' => 'realtime-chat-app',
                'description' => 'A WhatsApp-style real-time chat application built with Laravel, Livewire, and Pusher for WebSocket connections.',
                'long_description' => "A real-time messaging application supporting individual and group conversations. Built with Livewire for reactive UI and Pusher for WebSocket events.",
                'live_url' => null,
                'github_url' => 'https://github.com/danieldeva',
                'featured' => true,
                'tech_stack' => ['Laravel', 'Livewire', 'Pusher', 'TailwindCSS', 'MySQL'],
                'features' => ['Real-time messaging', 'Group chats', 'Message read receipts', 'File sharing', 'Online status'],
                'challenges' => ['Handling concurrent connections', 'Message delivery guarantees'],
                'metrics' => ['< 50ms message latency', '200+ concurrent users tested'],
                'status' => 'completed',
                'category' => 'web',
                'sort_order' => 2,
            ],
            [
                'title' => 'HR Management System',
                'slug' => 'hr-management-system',
                'description' => 'Complete HR platform for employee management, leave tracking, payroll, and performance reviews.',
                'long_description' => "A comprehensive HR management system built for a 200-person organisation. Handles employee onboarding, leave management, payroll generation, and annual performance reviews.",
                'live_url' => null,
                'github_url' => 'https://github.com/danieldeva',
                'featured' => false,
                'tech_stack' => ['Laravel', 'Filament', 'Livewire', 'TailwindCSS', 'MySQL'],
                'features' => ['Employee profiles', 'Leave management', 'Payroll', 'Performance reviews', 'Reports'],
                'challenges' => ['Complex payroll calculations', 'Multi-level approval workflows'],
                'metrics' => ['200+ employees', 'Saved 20 hours/month on manual processes'],
                'status' => 'completed',
                'category' => 'enterprise',
                'sort_order' => 3,
            ],
        ];
        foreach ($projects as $proj) {
            Project::updateOrCreate(['slug' => $proj['slug']], $proj);
        }

        // Testimonials
        $testimonials = [
            [
                'name' => 'Arjun Sharma', 'title' => 'CTO', 'company' => 'Tech Solutions Pvt. Ltd.',
                'rating' => 5, 'featured' => true,
                'body' => 'Devaraju is an exceptional developer. His attention to detail and deep knowledge of the TALL Stack is impressive. He delivered our SaaS dashboard ahead of schedule and the code quality was outstanding.',
                'sort_order' => 0,
            ],
            [
                'name' => 'Priya Nair', 'title' => 'Product Manager', 'company' => 'Digital Agency Co.',
                'rating' => 5, 'featured' => true,
                'body' => 'Working with Devaraju was a pleasure. He communicates clearly, understands requirements quickly, and always brings creative solutions to complex problems. Our e-commerce platform exceeded all expectations.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Rahul Verma', 'title' => 'Founder', 'company' => 'StartupXYZ',
                'rating' => 5, 'featured' => true,
                'body' => 'Devaraju built our internal tool from scratch and it has transformed how our team works. Professional, reliable, and genuinely passionate about his craft. Highly recommended!',
                'sort_order' => 2,
            ],
        ];
        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['name' => $t['name'], 'company' => $t['company']], $t);
        }

        // Certifications
        $certs = [
            ['name' => 'Laravel Certified Developer', 'issuer' => 'Laravel LLC', 'issued_at' => '2023-01-01', 'verified' => true, 'sort_order' => 0],
            ['name' => 'PHP Fundamentals', 'issuer' => 'Zend Technologies', 'issued_at' => '2022-06-01', 'verified' => true, 'sort_order' => 1],
            ['name' => 'MySQL Database Design', 'issuer' => 'Oracle', 'issued_at' => '2022-03-01', 'verified' => true, 'sort_order' => 2],
            ['name' => 'Web Application Security', 'issuer' => 'OWASP', 'issued_at' => '2023-06-01', 'verified' => true, 'sort_order' => 3],
        ];
        foreach ($certs as $cert) {
            Certification::updateOrCreate(['name' => $cert['name']], $cert);
        }

        // Blog Posts
        $posts = [
            [
                'title' => 'Building Scalable Multi-tenant SaaS with Laravel',
                'slug' => 'building-scalable-multi-tenant-saas-laravel',
                'excerpt' => 'A deep dive into architecting multi-tenant applications with Laravel, covering database isolation strategies, middleware patterns, and performance optimisations.',
                'body' => "# Building Scalable Multi-tenant SaaS with Laravel\n\nMulti-tenancy is one of the most rewarding architectural challenges in web development...\n\n## Database Isolation Strategies\n\nThere are three main approaches to tenant isolation...",
                'tags' => ['Laravel', 'SaaS', 'Architecture', 'Multi-tenancy'],
                'category' => 'Backend',
                'reading_time' => 8,
                'published' => true,
                'published_at' => now()->subDays(10),
                'views' => 342,
            ],
            [
                'title' => 'TALL Stack: Why It\'s the Best PHP Stack in 2024',
                'slug' => 'tall-stack-best-php-stack-2024',
                'excerpt' => 'Exploring why the combination of TailwindCSS, Alpine.js, Livewire, and Laravel creates the most productive and delightful PHP development experience.',
                'body' => "# TALL Stack: Why It's the Best PHP Stack in 2024\n\nThe TALL Stack has revolutionised how I build web applications...",
                'tags' => ['Laravel', 'Livewire', 'TailwindCSS', 'Alpine.js'],
                'category' => 'Full Stack',
                'reading_time' => 6,
                'published' => true,
                'published_at' => now()->subDays(25),
                'views' => 521,
            ],
            [
                'title' => 'Optimising Laravel Queries: From 5s to 50ms',
                'slug' => 'optimising-laravel-queries-5s-to-50ms',
                'excerpt' => 'Real-world techniques I used to reduce a critical endpoint from 5 seconds to 50ms using eager loading, caching, and query analysis.',
                'body' => "# Optimising Laravel Queries: From 5s to 50ms\n\nWhen I first joined my current role, one of our dashboard pages took 5 seconds to load...",
                'tags' => ['Laravel', 'Performance', 'MySQL', 'Redis'],
                'category' => 'Performance',
                'reading_time' => 10,
                'published' => true,
                'published_at' => now()->subDays(45),
                'views' => 789,
            ],
        ];
        foreach ($posts as $post) {
            BlogPost::updateOrCreate(['slug' => $post['slug']], $post);
        }

        // Settings
        Setting::set('site_title', 'Devaraju R — Laravel Developer Portfolio');
        Setting::set('site_description', 'Full Stack Laravel Developer & TALL Stack Engineer based in Bangalore, India.');
        Setting::set('twitter_handle', '@devaraju_r');
        Setting::set('analytics_id', '');

        $this->command->info('Portfolio seeded successfully!');
    }
}
