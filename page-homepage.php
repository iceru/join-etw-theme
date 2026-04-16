<?php
/**
 * Template Name: Ecotourism Week Landing Page
 */

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);
    wp_enqueue_script('lenis-js', 'https://unpkg.com/lenis@1.1.20/dist/lenis.min.js', [], '1.1.20', true);
    wp_enqueue_style('eco-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Poppins:wght@300;400;500;600;700&display=swap', [], null);
});

get_header();
?>

<!-- HERO -->
<section class="mt-22 ">
    <a target="_blank"
        href="https://docs.google.com/forms/d/e/1FAIpQLSeqEYuEsDDvG8c2Ihy38yRO3loPmKJfPSAMgR9AWp_jo6khTA/viewform?usp=send_form">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-1.png" alt="Eco Tourism Week 2026 – Bali"
            class="w-full h-full object-cover" />
    </a>
</section>
<section id="hero" class="relative pt-24 flex items-end bg-eco-deep overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-eco-deep via-eco-deep/50 to-transparent"></div>

    <div class="relative z-10 w-full pb-16 md:pb-24 px-2 md:px-6">
        <div class="container mx-auto">
            <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-sm md:text-sm mb-4">30-31 May 2026 ·
                Bali Beach Convention Center, Sanur</p>
            <h1 class="font-display text-white text-[clamp(3rem,9vw,7rem)] font-light leading-[0.95] mb-8 max-w-4xl">
                Eco Tourism<br><em>Week 2026</em>
            </h1>
            <!-- <div class="flex flex-wrap gap-3">
                <?php
                $roles = [
                    'Volunteer' => '#volunteer',
                    'Eco Pitch' => '#eco-pitch',
                    'Exhibitor' => '#exhibitor',
                    'Participant' => '#participant',
                    'Performance' => '#performance',
                    'Sponsorship' => 'https://example.com/sponsorship',
                    'Media Partner' => 'https://example.com/media-partner',
                ];
                foreach ($roles as $label => $url):
                    $is_external = str_starts_with($url, 'http');
                    ?>
                    <a href="<?php echo esc_url($url); ?>" <?php echo $is_external ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                        class="px-5 py-2.5 border border-white/70 text-white text-sm font-semibold tracking-widest uppercase hover:bg-eco-gold hover:border-eco-gold hover:text-eco-deep transition-all duration-300">
                        <?php echo esc_html($label); ?>
                    </a>
                <?php endforeach; ?>
            </div> -->

            <div class="mt-10 md:mt-24 max-w-4xl border-white/60">
                <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-sm mb-6">Counting Down</p>
                <div class="flex gap-0">
                    <?php foreach (['days' => 'Days', 'hours' => 'Hrs', 'minutes' => 'Min', 'seconds' => 'Sec'] as $id => $label): ?>
                        <div
                            class="flex-1 border-r border-white/60 last:border-r-0 pr-4 md:pr-8 mr-4 md:mr-8 last:pr-0 last:mr-0">
                            <span class="font-display text-white text-[3rem] md:text-[5rem] font-light leading-none block"
                                id="cd-<?php echo $id; ?>">00</span>
                            <span class="text-white/30 text-[0.6rem] font-semibold tracking-[0.2em] uppercase mt-1 block">
                                <?php echo $label; ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-pagination absolute bottom-6 left-0 right-0 z-20"></div>
</section>

<!-- COUNTDOWN --><!-- <section id="countdown" class="bg-eco-deep border-t border-white/60">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">


            <div class="py-14 md:py-20 lg:pl-16">
                <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-sm mb-6">The Event</p>
                <h2 class="font-display text-white text-[clamp(1.5rem,3vw,2.2rem)] font-light leading-snug mb-4">
                    Tourism as a Force<br>for Good
                </h2>
                <p class="text-white/80 text-sm leading-relaxed font-light max-w-sm">
                    The Meru Eco Tourism Week 4th Edition · Bali Beach Convention Center
                </p>
            </div>

        </div>
    </div>
</section> -->

<!-- VIDEO -->
<section class="bg-black">
    <div class="aspect-video w-full max-w-none">
        <video src="<?php echo get_template_directory_uri(); ?>/videos/etw.mp4" controls
            poster="<?php echo get_template_directory_uri(); ?>/images/banner-1.png"
            class="w-full h-full object-cover"></video>
    </div>
</section>

<!-- ABOUT -->
<section id="explanation" class="bg-white">
    <div class="container mx-auto px-6 py-20 md:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-[1.5fr_2fr] gap-16 md:gap-24 items-start">
            <div class="lg:sticky lg:top-32">
                <h1 class="font-display text-eco-mid mb-4 text-xl">
                    The Meru Eco Tourism Week 4th Edition
                </h1>
                <h2 class="font-display text-eco-deep text-3xl md:text-[44px] font-light leading-[1.05]">

                    Tourism as a Force for Good: Regenerating Bali Together
                </h2>
            </div>
            <div class="space-y-8 text-[1rem] md:text-[1.05rem] text-gray-800 leading-[1.9] font-light">
                <p
                    class="text-gray-700 text-[1.1rem] md:text-[1.25rem] leading-relaxed font-light border-l-2 border-eco-gold pl-6">
                    Bali has long been celebrated as one of the world's most iconic tourism destinations — yet the
                    global narrative has increasingly focused on its environmental pressures.
                </p>
                <p>
                    While these challenges are real, they do not tell the full story.
                </p>

                <p>Across Bali, a powerful movement is taking place. Hotels, restaurants, local communities, NGOs, and
                    solution providers are actively transforming how tourism operates — shifting from extractive models
                    towards regenerative practices that restore ecosystems, protect biodiversity, and strengthen local
                    livelihoods.</p>
                <p
                    class="text-gray-700 text-[1.1rem] md:text-[1.25rem] leading-relaxed font-light border-l-2 border-eco-gold pl-6">
                    Eco Tourism Week 2026 aims to bring this story to the forefront.
                </p>
                <p>
                    Rather than focusing on what is broken, this platform highlights what is working. It showcases real
                    solutions, measurable impact, and collaborative efforts that demonstrate how tourism can become a
                    force for good not only in Bali, but as a model for destinations across the region and globally.
                </p>
            </div>
        </div>
    </div>

    <!-- COLLAGE -->
    <div class="grid grid-cols-2 lg:grid-cols-4 w-full">
        <?php
        $collage_imgs = [
            'https://images.unsplash.com/photo-1539367628448-4bc5c9d171c8?w=800',
            'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?w=800',
            'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=800',
            'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800',
            'https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=800',
            'https://images.unsplash.com/photo-1505993597083-3bd19fb75e57?w=800',
            'https://images.unsplash.com/photo-1510076857177-7470076d4098?w=800',
            'https://gravitybali.com/wp-content/uploads/2025/09/beaches.webp',
        ];
        foreach ($collage_imgs as $i => $img):
            $hidden = $i >= 4 ? 'hidden lg:block' : '';
            ?>
            <div class="aspect-square relative overflow-hidden group <?php echo $hidden; ?>">
                <img src="<?php echo $img; ?>" alt="ETW Past Event"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- FACT SHEET -->
<section id="fact-sheet" class="bg-white py-20 md:py-32 px-2 md:px-6">
    <div class="container mx-auto grid md:grid-cols-2">
        <div class=" mb-16 md:mb-20 gap-6">
            <div class="mb-6 lg:mb-10 lg:sticky lg:top-32">
                <p class="text-eco-forest font-semibold tracking-[0.3em] uppercase text-xs mb-4">Why It Matters</p>
                <h2
                    class="font-display text-eco-deep text-[clamp(2rem,5vw,3.5rem)] font-light leading-tight mb-6 lg:mb-10 ">
                    The Market<br>Opportunity
                </h2>
                <p class="text-eco-deep font-light max-w-xs leading-relaxed">
                    Sustainable tourism is one of the fastest-growing investment categories in Southeast Asia.
                </p>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/potential.png"
                alt="Discover Bali's Sustainable Business Potential" class="w-full max-w-2xl h-auto" />
        </div>

    </div>
</section>

<!-- ETW 2025 FACTS -->
<section id="facts" class="bg-white py-20 md:py-32 px-0 md:px-6">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 md:mb-20 gap-6">
            <div>
                <p class="text-eco-mid font-semibold tracking-[0.3em] uppercase text-sm mb-4">Impact So Far</p>
                <h2 class="font-display text-eco-deep text-[clamp(2rem,5vw,3.5rem)] font-light leading-tight">
                    ETW 2025<br>Facts & Figures
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-px bg-eco-stone mb-px">
            <?php
            $stats = [
                ['50', 'Exhibitors'],
                ['339', 'Visitors'],
                ['8+', 'Visitor Profiles'],
            ];
            foreach ($stats as $s): ?>
                <div class="bg-white py-14 px-10 text-center">
                    <p class="font-display text-eco-deep text-[4rem] md:text-[5.5rem] font-light leading-none mb-2">
                        <?php echo $s[0]; ?>
                    </p>
                    <p class="font-semibold text-eco-mid uppercase tracking-[0.2em] text-sm"><?php echo $s[1]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <p
            class="text-center text-2xl text-eco-forest font-light py-4 bg-white border-t border-eco-stone mb-16 md:mb-24">
            HORECA · Private Sector · NGOs/CSOs · Sustainable Suppliers · Tourism Academics · Associations · Media ·
            Public
        </p>

        <!-- ECO PITCH -->
        <div class="bg-eco-deep relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div
                    class="absolute top-0 right-0 w-[600px] h-[600px] border border-white rounded-full translate-x-1/3 -translate-y-1/3">
                </div>
                <div
                    class="absolute top-0 right-0 w-[400px] h-[400px] border border-white rounded-full translate-x-1/4 -translate-y-1/4">
                </div>
            </div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-0">
                <div class="p-6 md:p-16 border-b lg:border-b-0 lg:border-r border-white/60">
                    <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-xs mb-4">Join the Competition
                    </p>
                    <h2 class="font-display text-white text-[clamp(2.2rem,5vw,4rem)] font-light leading-tight mb-6">
                        Eco Pitch<br><em class="text-eco-gold">2026</em>
                    </h2>
                    <p class="text-white/40 text-sm font-light mb-8 max-w-md leading-relaxed">
                        5 exhibition categories · 3 award tracks — Most Favorite, Most Innovative, Most Impactful.<br>
                        Open your potential with 10,000 hotels in Bali.
                    </p>
                    <div class="flex flex-col gap-2 max-w-lg">
                        <?php
                        $categories = [
                            ['Water, Conservation & Sustainable Solutions', 'bg-[#2E7D32] text-white'],
                            ['Experience, Community & Culture', 'bg-[#1565C0] text-white'],
                            ['Responsible Purchasing & Sourcing', 'bg-[#E65100] text-white'],
                            ['Technology, Renewable Energy & Machinery', 'bg-[#1A2B1A] text-white border border-white/20'],
                            ['Waste Solution Management', 'bg-[#757575] text-white'],
                        ];
                        foreach ($categories as $cat): ?>
                            <div
                                class="flex items-center gap-3 <?php echo $cat[1]; ?> px-4 py-2.5 text-xs font-semibold tracking-wide">
                                <?php echo $cat[0]; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="p-6 md:p-16 flex flex-col justify-center items-start lg:items-center lg:min-w-[280px]">
                    <p class="text-white/80 font-light mb-4 tracking-widest uppercase">3 Award Tracks</p>
                    <div class="space-y-3 mb-10 w-full">
                        <?php foreach (['Most Favorite', 'Most Innovative', 'Most Impactful'] as $award): ?>
                            <div class="border border-white/60 px-5 py-3 text-white/80 font-light tracking-wide">
                                <?php echo $award; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="#join-eco-pitch"
                        class="w-full text-center bg-eco-gold text-eco-deep font-bold px-8 py-4 uppercase tracking-[0.15em] text-sm hover:bg-white transition-colors duration-300">
                        Join Eco Pitch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SPONSORS -->
<section id="sponsors" class="bg-eco-deep py-20 md:py-28 px-2 md:px-6">
    <div class="container mx-auto">

        <div class="mb-16 md:mb-20">
            <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-sm mb-10 text-center">Supported By</p>
            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-8">
                <div
                    class="w-[150px] md:w-[250px] flex items-center justify-center text-white/20 text-sm hover:border-eco-gold/40 hover:text-white/80 transition-all duration-300">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-the-meru.png" alt="">
                </div>
            </div>
        </div>

        <div class="border-t border-white/60 pt-16 md:pt-20 mb-16 md:mb-20">
            <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-sm mb-10 text-center">Strategic
                Partner</p>
            <div class="flex flex-wrap justify-center items-center gap-4 md:gap-6">
                <?php
                $strategic_partners = [
                    ['name' => 'BTB', 'logo' => 'btb.png'],
                    ['name' => 'Kopernik', 'logo' => 'kopernik.png'],
                    ['name' => 'cft', 'logo' => 'cft.png'],
                ];
                foreach ($strategic_partners as $partner): ?>
                    <div class="flex items-center justify-center transition-opacity duration-300">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $partner['logo']; ?>"
                            alt="<?php echo esc_attr($partner['name']); ?>" class="w-full h-24 object-contain">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="border-t border-white/60 pt-16 md:pt-20">
            <p class="text-eco-gold font-semibold tracking-[0.3em] uppercase text-sm mb-10 text-center">Media Partner
            </p>
            <div class="flex flex-wrap justify-center items-center gap-4 md:gap-6">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div
                        class="w-[100px] md:w-[120px] h-[50px] md:h-[60px] border border-white/60 flex items-center justify-center text-white/20 text-sm hover:border-white/20 hover:text-white/80 transition-all duration-300">
                        MP Logo
                    </div>
                <?php endfor; ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.hero-swiper', {
            loop: true,
            autoplay: { delay: 5000, disableOnInteraction: false },
            effect: 'fade',
            fadeEffect: { crossFade: true },
            pagination: { el: '.swiper-pagination', clickable: true },
        });

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

        const lenis = new Lenis();
        function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
        requestAnimationFrame(raf);

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetEl = document.querySelector(this.getAttribute('href'));
                if (targetEl) lenis.scrollTo(targetEl);
            });
        });

        const header = document.getElementById('site-header');
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    });
</script>