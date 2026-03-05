<?php
/**
 * Template Name: Ecotourism Week Landing Page
 */

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);
    wp_enqueue_script('lenis-js', 'https://unpkg.com/lenis@1.1.20/dist/lenis.min.js', [], '1.1.20', true);
    wp_enqueue_style('eco-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap', [], null);
});


get_header();

// ── ACF fields with fallbacks ──────────────────────────────────────────────

$event_title = get_field('event_title') ?: 'Ecotourism Week Bali';
$event_subtitle = get_field('event_subtitle') ?: 'Celebrating Nature, Culture & Sustainable Tourism';
$event_date = get_field('event_date') ?: '2026-06-05 08:00:00';
$event_location = get_field('event_location') ?: 'Bali, Indonesia';

$slide_1 = get_field('slide_1_image');
$slide_2 = get_field('slide_2_image');
$slide_3 = get_field('slide_3_image');
$slides = array_filter([
    ['url' => is_array($slide_1) ? $slide_1['url'] : $slide_1, 'caption' => get_field('slide_1_caption') ?: ''],
    ['url' => is_array($slide_2) ? $slide_2['url'] : $slide_2, 'caption' => get_field('slide_2_caption') ?: ''],
    ['url' => is_array($slide_3) ? $slide_3['url'] : $slide_3, 'caption' => get_field('slide_3_caption') ?: ''],
], fn($s) => !empty($s['url']));

if (empty($slides)) {
    $slides = [
        ['url' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=1600', 'caption' => 'Rice Terraces, Bali'],
        ['url' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1600', 'caption' => 'Sacred Forest'],
        ['url' => 'https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1600', 'caption' => 'Coastal Nature'],
    ];
}

$rundown_day1_label = get_field('rundown_day1_label') ?: 'Day 1 — Thursday, June 5';
$rundown_day1_sessions = get_field('rundown_day1_sessions') ?: "08:00 – 09:00 | Registration & Welcome Coffee | Panitia ETW | Gather and connect with fellow participants\n09:00 – 10:00 | Opening Ceremony | I Wayan Eco | Official opening by EcotourismBali\n10:00 – 12:00 | Nature Walk: Campuhan Ridge | Guide Team | Guided sunrise walk through Ubud's green ridge\n13:00 – 15:00 | Panel: Sustainable Tourism in 2025 | Various Speakers | Industry leaders share their vision\n15:00 – 17:00 | Workshop: Community-Based Tourism | Yayasan Alam | Hands-on workshop with local communities";

$rundown_day2_label = get_field('rundown_day2_label') ?: 'Day 2 — Friday, June 6';
$rundown_day2_sessions = get_field('rundown_day2_sessions') ?: "08:00 – 09:30 | Sunrise Yoga at Tegallalang | Bali Yoga Collective | Start the day in the rice terraces\n10:00 – 12:00 | Mangrove Restoration | Green Fins Bali | Hands-on reef & mangrove activity\n13:00 – 14:30 | Lunch with Local Farmers | Subak Community | Farm-to-table experience\n15:00 – 17:00 | Closing Talk: Future of Eco Travel | Keynote Speaker | Vision for responsible travel in Indonesia\n18:00 – 20:00 | Cultural Night & Farewell Dinner | | Traditional performances and closing celebration";

$rundown_day3_label = get_field('rundown_day3_label') ?: '';
$rundown_day3_sessions = get_field('rundown_day3_sessions') ?: '';

$sponsor_tiers = ['gold' => [], 'silver' => [], 'bronze' => []];
for ($i = 1; $i <= 3; $i++) {
    foreach (['gold', 'silver', 'bronze'] as $tier) {
        $name = get_field("sponsor_{$tier}_{$i}_name");
        $logo = get_field("sponsor_{$tier}_{$i}_logo");
        $url = get_field("sponsor_{$tier}_{$i}_url");
        if ($name || $logo) {
            $logo_url = is_array($logo) ? $logo['url'] : $logo;
            $sponsor_tiers[$tier][] = ['name' => $name ?: "Sponsor", 'logo' => $logo_url, 'url' => $url ?: '#'];
        }
    }
}
$has_sponsors = !empty($sponsor_tiers['gold']) || !empty($sponsor_tiers['silver']) || !empty($sponsor_tiers['bronze']);
if (!$has_sponsors) {
    $sponsor_tiers = [
        'gold' => [['name' => 'Green Earth Co.', 'logo' => '', 'url' => '#'], ['name' => 'EcoFund Bali', 'logo' => '', 'url' => '#']],
        'silver' => [['name' => 'Alam Resort', 'logo' => '', 'url' => '#'], ['name' => 'Tropic Air', 'logo' => '', 'url' => '#'], ['name' => 'Bali Organics', 'logo' => '', 'url' => '#']],
        'bronze' => [['name' => 'WildCraft', 'logo' => '', 'url' => '#'], ['name' => 'SeaRoots', 'logo' => '', 'url' => '#']],
    ];
}

$media_partners = [];
for ($i = 1; $i <= 6; $i++) {
    $name = get_field("media_partner_{$i}_name");
    $logo = get_field("media_partner_{$i}_logo");
    $url = get_field("media_partner_{$i}_url");
    if ($name || $logo) {
        $logo_url = is_array($logo) ? $logo['url'] : $logo;
        $media_partners[] = ['name' => $name ?: "Media Partner", 'logo' => $logo_url, 'url' => $url ?: '#'];
    }
}
if (empty($media_partners)) {
    $media_partners = [
        ['name' => 'Bali Post', 'logo' => '', 'url' => '#'],
        ['name' => 'Eco Travel Mag', 'logo' => '', 'url' => '#'],
        ['name' => 'Green Indonesia', 'logo' => '', 'url' => '#'],
        ['name' => 'Travelist ID', 'logo' => '', 'url' => '#'],
    ];
}

$instagram_url = get_field('instagram_url') ?: '#';
$facebook_url = get_field('facebook_url') ?: '#';
$tiktok_url = get_field('tiktok_url') ?: '#';
$youtube_url = get_field('youtube_url') ?: '#';
$reg_url = get_field('registration_url') ?: '#';
$reg_email = get_field('registration_email') ?: 'info@ecotourismbali.com';

function eco_parse_sessions(string $text): array
{
    $sessions = [];
    foreach (array_filter(array_map('trim', explode("\n", $text))) as $line) {
        $parts = array_map('trim', explode('|', $line));
        $sessions[] = [
            'time' => $parts[0] ?? '',
            'title' => $parts[1] ?? '',
            'speaker' => $parts[2] ?? '',
            'description' => $parts[3] ?? '',
        ];
    }
    return $sessions;
}

$rundown_days = array_filter([
    ['label' => $rundown_day1_label, 'sessions' => eco_parse_sessions($rundown_day1_sessions)],
    ['label' => $rundown_day2_label, 'sessions' => eco_parse_sessions($rundown_day2_sessions)],
    $rundown_day3_label ? ['label' => $rundown_day3_label, 'sessions' => eco_parse_sessions($rundown_day3_sessions)] : null,
]);
?>

<style>
    :root {
        --eco-deep: #162a1e;
        --eco-forest: #264d38;
        --eco-mid: #3a7a56;
        --eco-leaf: #5aaa78;
        --eco-earth: #7a5230;
        --eco-sand: #c8a96a;
        --eco-cream: #f4efe5;
        --eco-stone: #e6dfd3;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    html.lenis,
    html.lenis body {
        height: auto;
    }

    .lenis.lenis-smooth {
        scroll-behavior: auto !important;
    }

    .lenis.lenis-smooth [data-lenis-prevent] {
        overscroll-behavior: contain;
    }

    .lenis.lenis-stopped {
        overflow: hidden;
    }

    .lenis.lenis-scrolling iframe {
        pointer-events: none;
    }

    .font-display {

        font-family: 'Cormorant Garamond', Georgia, serif;
    }

    .eco-btn {
        display: inline-block;
        padding: 0.75rem 2.25rem;
        background: var(--eco-leaf);
        color: #fff;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        text-decoration: none;
        transition: background 0.3s, transform 0.2s;
    }

    .eco-btn:hover {
        background: var(--eco-forest);
        transform: translateY(-1px);
    }

    .eco-btn-outline {
        display: inline-block;
        padding: 0.75rem 2.25rem;
        border: 1px solid var(--eco-leaf);
        color: var(--eco-leaf);
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        text-decoration: none;
        transition: background 0.3s, color 0.3s;
    }

    .eco-btn-outline:hover {
        background: var(--eco-leaf);
        color: #fff;
    }

    .section-label {
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: var(--eco-leaf);
    }

    .section-heading {
        font-family: 'Cormorant Garamond', Georgia, serif;
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 300;
        line-height: 1.15;
        color: var(--eco-deep);
    }

    .countdown-box {
        background: var(--eco-cream);
        border-top: 2px solid var(--eco-sand);
        padding: 1.5rem 1rem;
        text-align: center;
        min-width: 100px;
    }

    .countdown-num {
        font-family: 'Cormorant Garamond', Georgia, serif;
        font-size: 3.5rem;
        font-weight: 300;
        color: var(--eco-forest);
        line-height: 1;
        display: block;
    }

    .countdown-lbl {
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--eco-earth);
        display: block;
        margin-top: 0.4rem;
    }

    .timeline-item {
        position: relative;
        padding-left: 2.5rem;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 0.375rem;
        top: 1.75rem;
        bottom: -1.5rem;
        width: 1px;
        background: var(--eco-stone);
    }

    .timeline-item:last-child::before {
        display: none;
    }

    .timeline-dot {
        position: absolute;
        left: 0;
        top: 0.25rem;
        width: 0.875rem;
        height: 0.875rem;
        border-radius: 50%;
        background: var(--eco-leaf);
        border: 2px solid var(--eco-cream);
        box-shadow: 0 0 0 2px var(--eco-leaf);
    }

    .logo-card {
        background: #fff;
        border: 1px solid var(--eco-stone);
        padding: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: border-color 0.3s, box-shadow 0.3s;
        text-decoration: none;
    }

    .logo-card:hover {
        border-color: var(--eco-leaf);
        box-shadow: 0 4px 20px rgba(58, 122, 86, 0.1);
    }

    .logo-card img {
        max-height: 48px;
        width: auto;
        filter: grayscale(60%);
        transition: filter 0.3s;
    }

    .logo-card:hover img {
        filter: grayscale(0%);
    }

    .logo-card-text {
        font-size: 0.85rem;
        font-weight: 500;
        color: var(--eco-forest);
        text-align: center;
    }

    .social-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.25rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.8rem;
        letter-spacing: 0.05em;
        text-decoration: none;
        transition: border-color 0.3s, color 0.3s, background 0.3s;
    }

    .social-pill:hover {
        border-color: var(--eco-sand);
        color: var(--eco-sand);
        background: rgba(200, 169, 106, 0.08);
    }

    .swiper-pagination-bullet {
        background: rgba(255, 255, 255, 0.5);
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: var(--eco-sand);
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(24px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-up {
        animation: fadeUp 0.9s ease both;
    }

    .delay-1 {
        animation-delay: 0.2s;
    }

    .delay-2 {
        animation-delay: 0.4s;
    }

    .delay-3 {
        animation-delay: 0.6s;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateX(-50%) translateY(0)
        }

        50% {
            transform: translateX(-50%) translateY(6px)
        }
    }
</style>


<!-- HERO -->
<section id="hero" style="position:relative;height:100vh;min-height:560px;overflow:hidden;background:var(--eco-deep);">
    <div class="swiper eco-swiper" style="height:100%;">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $slide): ?>
                <div class="swiper-slide" style="position:relative;overflow:hidden;">
                    <img src="<?php echo esc_url($slide['url']); ?>" alt="<?php echo esc_attr($slide['caption']); ?>"
                        style="width:100%;height:100%;object-fit:cover;transform:scale(1.06);transition:transform 8s ease;">
                    <div
                        style="position:absolute;inset:0;background:linear-gradient(to bottom,rgba(22,42,30,0.3) 0%,rgba(22,42,30,0.6) 55%,rgba(22,42,30,0.85) 100%);">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination" style="bottom:2rem;"></div>
    </div>

    <div
        style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;z-index:10;text-align:center;padding:2rem;">
        <div>
            <p class="section-label animate-fade-up" style="color:var(--eco-sand);margin-bottom:1rem;">
                <?php echo esc_html($event_location); ?>
            </p>
            <h1 class="font-display animate-fade-up delay-1"
                style="font-size:clamp(2.5rem,8vw,6rem);font-weight:300;color:#fff;line-height:1.05;letter-spacing:-0.01em;margin-bottom:1.25rem;">
                <?php echo nl2br(esc_html($event_title)); ?>
            </h1>
            <p class="animate-fade-up delay-2"
                style="font-size:clamp(0.95rem,2.5vw,1.15rem);color:rgba(255,255,255,0.75);font-weight:300;max-width:520px;margin:0 auto 2.25rem;">
                <?php echo esc_html($event_subtitle); ?>
            </p>
            <p class="animate-fade-up delay-3"
                style="font-family:'Cormorant Garamond',Georgia,serif;font-size:1.15rem;color:var(--eco-sand);letter-spacing:0.08em;">
                <?php echo date('l, d F Y', strtotime($event_date)); ?>
            </p>
            <?php if ($reg_url && $reg_url !== '#'): ?>
                <div class="animate-fade-up delay-3" style="margin-top:2rem;">
                    <a href="<?php echo esc_url($reg_url); ?>" class="eco-btn">Register Now</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div style="position:absolute;bottom:2.5rem;left:50%;transform:translateX(-50%);z-index:10;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="rgba(255,255,255,0.5)"
            stroke-width="1.5" viewBox="0 0 24 24" style="animation:bounce 2s infinite">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
</section>


<!-- COUNTDOWN -->
<section id="countdown" style="background:var(--eco-cream);padding:5rem 1.5rem;">
    <div style="max-width:900px;margin:0 auto;text-align:center;">
        <p class="section-label" style="margin-bottom:0.75rem;">Mark Your Calendar</p>
        <h2 class="section-heading" style="margin-bottom:0.5rem;">
            <?php echo date('l, d F Y', strtotime($event_date)); ?>
        </h2>
        <p style="font-size:0.875rem;color:var(--eco-earth);letter-spacing:0.08em;margin-bottom:3rem;">
            <?php echo esc_html($event_location); ?>
        </p>
        <div style="display:flex;justify-content:center;gap:0.75rem;flex-wrap:wrap;">
            <div class="countdown-box"><span class="countdown-num" id="cd-days">00</span><span
                    class="countdown-lbl">Days</span></div>
            <div class="countdown-box"><span class="countdown-num" id="cd-hours">00</span><span
                    class="countdown-lbl">Hours</span></div>
            <div class="countdown-box"><span class="countdown-num" id="cd-minutes">00</span><span
                    class="countdown-lbl">Minutes</span></div>
            <div class="countdown-box"><span class="countdown-num" id="cd-seconds">00</span><span
                    class="countdown-lbl">Seconds</span></div>
        </div>
    </div>
</section>


<!-- RUNDOWN -->
<section id="rundown" style="background:#fff;padding:5rem 1.5rem;">
    <div style="max-width:820px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:3.5rem;">
            <p class="section-label" style="margin-bottom:0.75rem;">Full Schedule</p>
            <h2 class="section-heading">Event Rundown</h2>
        </div>
        <?php foreach ($rundown_days as $day): ?>
            <div style="margin-bottom:3rem;">
                <div style="display:flex;align-items:center;gap:1rem;margin-bottom:2rem;">
                    <span
                        style="font-family:'Cormorant Garamond',Georgia,serif;font-size:1.5rem;font-weight:600;color:var(--eco-forest);white-space:nowrap;">
                        <?php echo esc_html($day['label']); ?>
                    </span>
                    <div style="flex:1;height:1px;background:var(--eco-stone);"></div>
                </div>
                <div style="display:flex;flex-direction:column;gap:1.5rem;">
                    <?php foreach ($day['sessions'] as $session): ?>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div style="display:grid;grid-template-columns:110px 1fr;gap:1.25rem;align-items:start;">
                                <span
                                    style="font-size:0.78rem;font-weight:600;color:var(--eco-earth);letter-spacing:0.04em;padding-top:0.2rem;">
                                    <?php echo esc_html($session['time']); ?>
                                </span>
                                <div>
                                    <h4
                                        style="font-family:'Cormorant Garamond',Georgia,serif;font-size:1.2rem;font-weight:600;color:var(--eco-deep);margin-bottom:0.2rem;line-height:1.3;">
                                        <?php echo esc_html($session['title']); ?>
                                    </h4>
                                    <?php if ($session['speaker']): ?>
                                        <p
                                            style="font-size:0.78rem;color:var(--eco-leaf);font-weight:500;margin-bottom:0.35rem;letter-spacing:0.04em;">
                                            <?php echo esc_html($session['speaker']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($session['description']): ?>
                                        <p style="font-size:0.85rem;color:#6b7280;line-height:1.6;">
                                            <?php echo esc_html($session['description']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<!-- SPONSORS -->
<section id="sponsors" style="background:var(--eco-cream);padding:5rem 1.5rem;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:3.5rem;">
            <p class="section-label" style="margin-bottom:0.75rem;">Our Partners</p>
            <h2 class="section-heading">Sponsors</h2>
        </div>
        <?php
        $tier_labels = ['gold' => 'Gold', 'silver' => 'Silver', 'bronze' => 'Bronze'];
        foreach ($sponsor_tiers as $tier_key => $tier_sponsors):
            if (empty($tier_sponsors))
                continue;
            $min_width = $tier_key === 'gold' ? '180px' : '140px';
            ?>
            <div style="margin-bottom:2.5rem;">
                <p
                    style="font-size:0.7rem;font-weight:600;letter-spacing:0.2em;text-transform:uppercase;color:var(--eco-earth);text-align:center;margin-bottom:1.25rem;">
                    <?php echo $tier_labels[$tier_key]; ?> Sponsors
                </p>
                <div
                    style="display:grid;grid-template-columns:repeat(auto-fit,minmax(<?php echo $min_width; ?>,1fr));gap:1rem;">
                    <?php foreach ($tier_sponsors as $s): ?>
                        <a href="<?php echo esc_url($s['url']); ?>" target="_blank" rel="noopener" class="logo-card">
                            <?php if (!empty($s['logo'])): ?>
                                <img src="<?php echo esc_url($s['logo']); ?>" alt="<?php echo esc_attr($s['name']); ?>">
                            <?php else: ?>
                                <span class="logo-card-text"><?php echo esc_html($s['name']); ?></span>
                            <?php endif; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<!-- MEDIA PARTNERS -->
<section id="media-partners" style="background:#fff;padding:5rem 1.5rem;border-top:1px solid var(--eco-stone);">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:3rem;">
            <p class="section-label" style="margin-bottom:0.75rem;">Coverage & Publicity</p>
            <h2 class="section-heading">Media Partners</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:1rem;">
            <?php foreach ($media_partners as $mp): ?>
                <a href="<?php echo esc_url($mp['url']); ?>" target="_blank" rel="noopener" class="logo-card">
                    <?php if (!empty($mp['logo'])): ?>
                        <img src="<?php echo esc_url($mp['logo']); ?>" alt="<?php echo esc_attr($mp['name']); ?>">
                    <?php else: ?>
                        <span class="logo-card-text"><?php echo esc_html($mp['name']); ?></span>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- CTA & SOCIAL -->
<section id="register" style="background:var(--eco-deep);padding:6rem 1.5rem;position:relative;overflow:hidden;">
    <div
        style="position:absolute;top:-120px;right:-120px;width:400px;height:400px;border-radius:50%;background:var(--eco-forest);opacity:0.3;pointer-events:none;">
    </div>
    <div
        style="position:absolute;bottom:-80px;left:-80px;width:280px;height:280px;border-radius:50%;background:var(--eco-mid);opacity:0.2;pointer-events:none;">
    </div>

    <div style="max-width:700px;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <p class="section-label" style="color:var(--eco-sand);margin-bottom:1rem;">Join the Movement</p>
        <h2 class="font-display"
            style="font-size:clamp(2rem,5vw,3.5rem);font-weight:300;color:#fff;line-height:1.15;margin-bottom:1.25rem;">
            Be Part of<br><em style="color:var(--eco-sand);">Ecotourism Week</em>
        </h2>
        <p style="color:rgba(255,255,255,0.6);font-size:0.95rem;line-height:1.75;max-width:480px;margin:0 auto 3rem;">
            Connect with nature lovers, conservationists, and sustainable travel advocates from across the archipelago.
        </p>

        <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-bottom:2.5rem;">
            <?php if ($reg_url && $reg_url !== '#'): ?>
                <a href="<?php echo esc_url($reg_url); ?>" class="eco-btn">Register Now</a>
            <?php endif; ?>
            <?php if ($reg_email): ?>
                <a href="mailto:<?php echo esc_attr($reg_email); ?>" class="eco-btn-outline">Email to Register</a>
            <?php endif; ?>
        </div>

        <?php if ($reg_email): ?>
            <p style="font-size:0.8rem;color:rgba(255,255,255,0.35);margin-bottom:3rem;letter-spacing:0.04em;">
                Or write to us: <a href="mailto:<?php echo esc_attr($reg_email); ?>"
                    style="color:var(--eco-sand);text-decoration:none;"><?php echo esc_html($reg_email); ?></a>
            </p>
        <?php endif; ?>

        <div style="border-top:1px solid rgba(255,255,255,0.1);padding-top:2.5rem;">
            <p
                style="font-size:0.7rem;font-weight:600;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.3);margin-bottom:1.25rem;">
                Follow the Journey
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:0.75rem;justify-content:center;">
                <?php
                $socials = [
                    'instagram' => ['url' => $instagram_url, 'label' => '@ecotourismbali', 'icon' => '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>'],
                    'facebook' => ['url' => $facebook_url, 'label' => 'EcotourismBali', 'icon' => '<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>'],
                    'tiktok' => ['url' => $tiktok_url, 'label' => '@ecotourismbali', 'icon' => '<path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>'],
                    'youtube' => ['url' => $youtube_url, 'label' => 'EcotourismBali', 'icon' => '<path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/>'],
                ];
                foreach ($socials as $s): ?>
                    <a href="<?php echo esc_url($s['url']); ?>" target="_blank" rel="noopener" class="social-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="currentColor"><?php echo $s['icon']; ?></svg>
                        <?php echo esc_html($s['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.eco-swiper', {
                loop: true,
                autoplay: { delay: 5500, disableOnInteraction: false },
                effect: 'fade',
                fadeEffect: { crossFade: true },
                pagination: { el: '.swiper-pagination', clickable: true },
                on: {
                    slideChange: function () {
                        var active = document.querySelector('.swiper-slide-active img');
                        if (active) setTimeout(function () { active.style.transform = 'scale(1)'; }, 50);
                    }
                }
            });
            var first = document.querySelector('.swiper-slide-active img');
            if (first) setTimeout(function () { first.style.transform = 'scale(1)'; }, 50);
        }

        var target = new Date('<?php echo date('Y-m-d\TH:i:s', strtotime($event_date)); ?>').getTime();
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
    });
</script>