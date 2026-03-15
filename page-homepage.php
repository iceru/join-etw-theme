<?php
/**
 * Template Name: Ecotourism Week Landing Page
 */

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);
    wp_enqueue_script('lenis-js', 'https://unpkg.com/lenis@1.1.20/dist/lenis.min.js', [], '1.1.20', true);
    wp_enqueue_style('eco-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap', [], null);
});

get_header();
?>

<!-- HERO SLIDER -->
<section id="hero" class="relative">
    <div class="swiper hero-swiper w-full aspect-[4/3] md:aspect-video">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=1600" alt="Bali Nature" class="w-full h-full object-cover text-white">
                <div class="absolute inset-0 bg-gradient-to-b from-eco-deep/40 to-eco-deep/70"></div>
            </div>
            <div class="swiper-slide relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1600" alt="Bali Culture" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-eco-deep/40 to-eco-deep/70"></div>
            </div>
            <div class="swiper-slide relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1600" alt="Bali Coast" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-eco-deep/40 to-eco-deep/70"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- COUNTDOWN & TRAILER -->
<section id="countdown" class="bg-eco-cream py-12 md:py-20 px-0 md:px-6 overflow-hidden">
    <div class="max-w-[1100px] mx-auto text-center px-6 md:px-0">
        <span class="text-eco-leaf text-[0.75rem] font-bold tracking-[0.25em] uppercase mb-4 block">Mark Your Calendar</span>
        <h2 class="font-display text-eco-deep text-[clamp(1.75rem,4vw,2.75rem)] font-light leading-tight mb-8">Counting Down to Eco Tourism Week 2026</h2>
        
        <div class="flex justify-center gap-3 md:gap-6 flex-wrap mb-12 md:mb-20 text-center">
            <div class="bg-white border border-eco-stone py-4 md:py-8 px-2 md:px-4 min-w-[80px] md:min-w-[140px]">
                <span class="font-display text-eco-forest text-[2.5rem] md:text-[4rem] font-light leading-none block" id="cd-days">00</span>
                <span class="text-eco-earth text-[0.6rem] md:text-[0.7rem] font-bold tracking-[0.2em] uppercase mt-1 md:mt-2 block">Days</span>
            </div>
            <div class="bg-white border border-eco-stone py-4 md:py-8 px-2 md:px-4 min-w-[80px] md:min-w-[140px]">
                <span class="font-display text-eco-forest text-[2.5rem] md:text-[4rem] font-light leading-none block" id="cd-hours">00</span>
                <span class="text-eco-earth text-[0.6rem] md:text-[0.7rem] font-bold tracking-[0.2em] uppercase mt-1 md:mt-2 block">Hours</span>
            </div>
            <div class="bg-white border border-eco-stone py-4 md:py-8 px-2 md:px-4 min-w-[80px] md:min-w-[140px]">
                <span class="font-display text-eco-forest text-[2.5rem] md:text-[4rem] font-light leading-none block" id="cd-minutes">00</span>
                <span class="text-eco-earth text-[0.6rem] md:text-[0.7rem] font-bold tracking-[0.2em] uppercase mt-1 md:mt-2 block">Min</span>
            </div>
            <div class="bg-white border border-eco-stone py-4 md:py-8 px-2 md:px-4 min-w-[80px] md:min-w-[140px]">
                <span class="font-display text-eco-forest text-[2.5rem] md:text-[4rem] font-light leading-none block" id="cd-seconds">00</span>
                <span class="text-eco-earth text-[0.6rem] md:text-[0.7rem] font-bold tracking-[0.2em] uppercase mt-1 md:mt-2 block">Sec</span>
            </div>
        </div>
    </div>
        
    <div class="aspect-video w-full max-w-[1240px] mx-auto md:rounded-2xl overflow-hidden shadow-2xl bg-black">
        <iframe 
            class="w-full h-full border-0"
            src="https://www.youtube.com/embed/placeholder" 
            title="Eco Tourism Week Trailer" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
    </div>
</section>

<!-- EXPLANATION & COLLAGE -->
<section id="explanation" class="bg-white">
    <div class="max-w-[900px] mx-auto py-16 md:py-24 px-6 text-center">
        <h2 class="font-display text-eco-deep text-[clamp(1.75rem,5vw,3rem)] leading-[1.1] mb-6">
            Does Tourism Destroy Nature or Can It Regenerate?
        </h2>
        <h3 class="text-eco-forest text-[1rem] md:text-[1.2rem] font-bold tracking-[0.15em] uppercase mb-12 md:mb-16">
            The Meru Eco Tourism Week 4th Edition
        </h3>
        
        <div class="text-[1.1rem] md:text-[1.2rem] text-gray-600 leading-relaxed text-left max-w-[750px] mx-auto">
            <p class="mb-8">
                Recent environmental incidents across Indonesia have demonstrated that environmental degradation is not an abstract risk, but a real and immediate threat that affects communities, wildlife, and economic stability. For Bali, safeguarding nature is not only an environmental responsibility, but a strategic necessity for the future of tourism.
            </p>
            <p>
                Eco Tourism Week 2026 responds to this reality by re-centering nature and biodiversity within the tourism conversation, encouraging the industry to move beyond sustainability as compliance and towards regeneration as a shared responsibility.
            </p>
        </div>
    </div>

    <!-- FULL WIDTH COLLAGE -->
    <div class="grid grid-cols-2 lg:grid-cols-4 w-full">
        <div class="aspect-square relative overflow-hidden group"><img src="https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?w=800" alt="Past Event 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group"><img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?w=800" alt="Past Event 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group"><img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=800" alt="Past Event 3" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group"><img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800" alt="Past Event 4" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group hidden lg:block"><img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=800" alt="Past Event 5" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group hidden lg:block"><img src="https://images.unsplash.com/photo-1505993597083-3bd19fb75e57?w=800" alt="Past Event 6" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group hidden lg:block"><img src="https://images.unsplash.com/photo-1510076857177-7470076d4098?w=800" alt="Past Event 7" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
        <div class="aspect-square relative overflow-hidden group hidden lg:block"><img src="https://images.unsplash.com/photo-1524492459426-edec9369528f?w=800" alt="Past Event 8" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"></div>
    </div>
</section>

<!-- FACT SHEET - 2 GRIDS -->
<section id="fact-sheet" class="bg-eco-cream py-16 md:py-24 px-6">
    <div class="max-w-[1100px] mx-auto">
        <span class="text-eco-leaf text-[0.75rem] font-bold tracking-[0.25em] uppercase mb-4 block text-center">Our Mission</span>
        <h2 class="font-display text-eco-deep text-[clamp(1.75rem,4vw,2.75rem)] font-light leading-tight mb-16 md:mb-24 text-center">Eco Tourism Fact Sheet</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16">
            <div class="flex flex-col">
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=1000" alt="Sustainable Business" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl mb-8">
                <h4 class="font-display text-eco-deep text-[1.75rem] md:text-[2rem] mb-6">Sustainable Business Potential</h4>
                <ul class="space-y-4 text-[1rem] md:text-[1.1rem] text-gray-600 leading-relaxed">
                    <li class="flex gap-3"><i data-lucide="check-circle" class="text-eco-leaf w-5 h-5 shrink-0"></i> Identify green investment opportunities in Bali's growing eco-sector.</li>
                    <li class="flex gap-3"><i data-lucide="check-circle" class="text-eco-leaf w-5 h-5 shrink-0"></i> Connect with local innovators building sustainable travel solutions.</li>
                    <li class="flex gap-3"><i data-lucide="check-circle" class="text-eco-leaf w-5 h-5 shrink-0"></i> Understand market trends driving regenerative tourism in Indonesia.</li>
                </ul>
            </div>
            
            <div class="flex flex-col">
                <img src="https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?w=1000" alt="Regenerative Solutions" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl mb-8">
                <h4 class="font-display text-eco-deep text-[1.75rem] md:text-[2rem] mb-6">The ETW Concept & Impact</h4>
                <ul class="space-y-4 text-[1rem] md:text-[1.1rem] text-gray-600 leading-relaxed">
                    <li class="flex gap-3"><i data-lucide="check-circle" class="text-eco-leaf w-5 h-5 shrink-0"></i> Moving beyond sustainability towards active ecological regeneration.</li>
                    <li class="flex gap-3"><i data-lucide="check-circle" class="text-eco-leaf w-5 h-5 shrink-0"></i> Serving as a central hub for industry leaders and conservationists.</li>
                    <li class="flex gap-3"><i data-lucide="check-circle" class="text-eco-leaf w-5 h-5 shrink-0"></i> Providing practical functions for community-led tourism development.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FACTS - 4 GRIDS -->
<section id="facts" class="bg-white py-16 md:py-24 px-6 text-center">
    <div class="max-w-[1200px] mx-auto">
        <span class="text-eco-leaf text-[0.75rem] font-bold tracking-[0.25em] uppercase mb-4 block text-center">Impact so far</span>
        <h2 class="font-display text-eco-deep text-[clamp(1.75rem,4vw,2.75rem)] font-light leading-tight mb-16 md:mb-24 text-center">Eco Tourism Week 2025 Facts</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 mb-20 md:mb-32">
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1531055060086-51c1a2ee62dd?w=600" alt="Exhibitors" class="w-full h-[200px] md:h-[250px] object-cover rounded-lg mb-6">
                <h5 class="font-display text-eco-leaf text-[2rem] md:text-[2.5rem] mb-2 leading-none">50+</h5>
                <p class="font-bold text-eco-deep uppercase tracking-wider text-xs md:text-sm">Jumlah Exhibitor</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1511578334221-d302391030cd?w=600" alt="Visitors" class="w-full h-[200px] md:h-[250px] object-cover rounded-lg mb-6">
                <h5 class="font-display text-eco-leaf text-[2rem] md:text-[2.5rem] mb-2 leading-none">2,500+</h5>
                <p class="font-bold text-eco-deep uppercase tracking-wider text-xs md:text-sm">Jumlah Pengunjung</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1517245366810-6062f8d2514d?w=600" alt="Sectors" class="w-full h-[200px] md:h-[250px] object-cover rounded-lg mb-6">
                <h5 class="font-display text-eco-leaf text-[2rem] md:text-[2.5rem] mb-2 leading-none">12</h5>
                <p class="font-bold text-eco-deep uppercase tracking-wider text-xs md:text-sm">Sector Pengunjung</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600" alt="Innovators" class="w-full h-[200px] md:h-[250px] object-cover rounded-lg mb-6">
                <h5 class="font-display text-eco-leaf text-[2rem] md:text-[2.5rem] mb-2 leading-none">100</h5>
                <p class="font-bold text-eco-deep uppercase tracking-wider text-xs md:text-sm">Eco Pitch Teams</p>
            </div>
        </div>

        <!-- ECO PITCH CTA -->
        <div class="bg-eco-deep py-16 md:py-24 px-8 md:px-12 rounded-[24px] text-center text-white relative overflow-hidden">
            <div class="absolute -top-12 -right-12 w-48 h-48 bg-eco-mid/20 rounded-full blur-2xl"></div>
            <h2 class="font-display text-eco-sand text-[2.5rem] md:text-[3.5rem] mb-6 leading-tight">ECO PITCH 2025 FACTS</h2>
            <p class="text-[1rem] md:text-[1.1rem] text-white/70 max-w-[700px] mx-auto mb-10 md:mb-12 leading-relaxed">
                5 Kategori Journey program eco pitch. Open your potential 10,000 hotels in Bali. Join our most innovative program yet.
            </p>
            <a href="#join-eco-pitch" class="bg-eco-sand text-eco-deep font-bold px-8 md:px-10 py-3 md:py-4 uppercase tracking-[0.1em] text-xs md:text-sm hover:bg-white hover:-translate-y-1 transition duration-300 inline-block">Join Eco Pitch</a>
        </div>
    </div>
</section>

<!-- SPONSORS -->
<section id="sponsors" class="bg-eco-cream py-16 md:py-20 px-6 text-center">
    <div class="max-w-[1000px] mx-auto">
        <span class="text-eco-leaf text-[0.75rem] font-bold tracking-[0.25em] uppercase mb-4 block">Our Supporters</span>
        <h2 class="text-eco-deep text-[1.5rem] md:text-[1.75rem] font-light leading-snug tracking-widest mb-12 md:mb-16 uppercase">RECOGNIZED BY</h2>
        <div class="flex flex-wrap justify-center gap-8 md:gap-12 mb-20 md:mb-32">
            <div class="w-[140px] md:w-[200px] h-[80px] md:h-[120px] bg-white border border-eco-stone flex items-center justify-center text-eco-earth text-[0.8rem] md:text-[0.9rem] rounded-xl hover:border-eco-leaf transition-colors duration-300">Logo Sponsor</div>
            <div class="w-[140px] md:w-[200px] h-[80px] md:h-[120px] bg-white border border-eco-stone flex items-center justify-center text-eco-earth text-[0.8rem] md:text-[0.9rem] rounded-xl hover:border-eco-leaf transition-colors duration-300">Logo Sponsor</div>
            <div class="w-[140px] md:w-[200px] h-[80px] md:h-[120px] bg-white border border-eco-stone flex items-center justify-center text-eco-earth text-[0.8rem] md:text-[0.9rem] rounded-xl hover:border-eco-leaf transition-colors duration-300">Logo Sponsor</div>
        </div>

        <h2 class="text-eco-deep text-[1.25rem] md:text-[1.5rem] font-light leading-snug tracking-widest mb-12 md:mb-16 uppercase">STRATEGIC PARTNER</h2>
        <div class="flex flex-wrap justify-center gap-8 md:gap-12 mb-20 md:mb-32">
            <div class="px-8 md:px-12 py-4 md:py-6 bg-eco-stone flex items-center justify-center font-bold text-eco-forest text-lg md:text-xl rounded-xl hover:scale-105 transition-transform duration-300">Kumpul</div>
            <div class="px-8 md:px-12 py-4 md:py-6 bg-eco-stone flex items-center justify-center font-bold text-eco-forest text-lg md:text-xl rounded-xl hover:scale-105 transition-transform duration-300">Kopernik</div>
        </div>

        <h2 class="text-eco-deep text-[1.1rem] md:text-[1.25rem] font-light leading-snug tracking-widest mb-12 md:mb-16 uppercase">MEDIA PARTNER</h2>
        <div class="flex flex-wrap justify-center gap-6 md:gap-8">
            <div class="w-[120px] md:w-[140px] h-[60px] md:h-[70px] bg-white border border-eco-stone flex items-center justify-center text-eco-earth text-[0.7rem] md:text-[0.8rem] rounded-lg hover:border-eco-leaf">MP Logo</div>
            <div class="w-[120px] md:w-[140px] h-[60px] md:h-[70px] bg-white border border-eco-stone flex items-center justify-center text-eco-earth text-[0.7rem] md:text-[0.8rem] rounded-lg hover:border-eco-leaf">MP Logo</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Swiper
        const swiper = new Swiper('.hero-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Countdown Timer
        var target = new Date('2026-05-28T08:00:00').getTime();
        function tick() {
            var diff = target - Date.now();
            var pad = function (n) { return String(Math.floor(Math.max(n, 0))).padStart(2, '0'); };
            document.getElementById('cd-days').textContent = pad(diff / 86400000);
            document.getElementById('cd-hours').textContent = pad((diff % 86400000) / 3600000);
            document.getElementById('cd-minutes').textContent = pad((diff % 3600000) / 60000);
            document.getElementById('cd-seconds').textContent = pad((diff % 60000) / 1000);
        }
        tick();
        setInterval(tick, 1000);

        // Lenis Smooth Scroll
        const lenis = new Lenis();
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Smooth scroll for anchors
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    lenis.scrollTo(targetElement);
                }
            });
        });

        // Sticky Header Effect
        const header = document.getElementById('site-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Initialize Lucide Icons again in case they weren't caught
        if (window.lucide) {
            lucide.createIcons();
        }
    });
</script>