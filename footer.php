<?php
$social_links = get_field('social_links', get_the_ID());
$reg_email = get_field('registration_email', get_the_ID());
$event_title = get_field('event_title', get_the_ID()) ?: get_bloginfo('name');
?>

<footer id="site-footer"
    style="background:var(--eco-deep);color:rgba(255,255,255,0.6);font-family:'Plus Jakarta Sans',sans-serif;">

    <div
        style="max-width:1200px;margin:0 auto;padding:4rem 2rem 2.5rem;display:grid;grid-template-columns:1fr 1fr 1fr;gap:3rem;align-items:start;">

        <div>
            <?php if (has_custom_logo()):
                the_custom_logo();
            else: ?>
                <span
                    style="font-family:'Cormorant Garamond',Georgia,serif;font-size:1.6rem;font-weight:300;color:#fff;display:block;margin-bottom:1rem;line-height:1.2;">
                    <?php echo esc_html($event_title); ?>
                </span>
            <?php endif; ?>

            <p
                style="font-size:0.825rem;line-height:1.75;color:rgba(255,255,255,0.45);max-width:260px;margin-top:0.75rem;">
                A celebration of nature, culture, and responsible travel in the heart of Bali.
            </p>

            <?php if ($reg_email): ?>
                <a href="mailto:<?php echo esc_attr($reg_email); ?>"
                    style="display:inline-flex;align-items:center;gap:0.5rem;margin-top:1.5rem;font-size:0.8rem;color:var(--eco-sand);text-decoration:none;letter-spacing:0.04em;transition:opacity 0.3s;"
                    onmouseover="this.style.opacity='0.7'" onmouseout="this.style.opacity='1'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0l-9.75 6.75L2.25 6.75" />
                    </svg>
                    <?php echo esc_html($reg_email); ?>
                </a>
            <?php endif; ?>
        </div>

        <div>
            <p
                style="font-size:0.65rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.3);margin-bottom:1.25rem;">
                Quick Links
            </p>
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'items_wrap' => '<nav style="display:flex;flex-direction:column;gap:0.6rem;">%3$s</nav>',
                'walker' => new Eco_Footer_Nav_Walker(),
                'fallback_cb' => function () {
                    $links = [
                        '#countdown' => 'Event Date',
                        '#rundown' => 'Schedule',
                        '#sponsors' => 'Sponsors',
                        '#media-partners' => 'Media Partners',
                        '#register' => 'Register',
                    ];
                    echo '<nav style="display:flex;flex-direction:column;gap:0.6rem;">';
                    foreach ($links as $href => $label) {
                        printf(
                            '<a href="%s" style="font-size:0.825rem;color:rgba(255,255,255,0.5);text-decoration:none;transition:color 0.3s;"
                                onmouseover="this.style.color=\'rgba(255,255,255,0.9)\'"
                                onmouseout="this.style.color=\'rgba(255,255,255,0.5)\'">%s</a>',
                            esc_attr($href),
                            esc_html($label)
                        );
                    }
                    echo '</nav>';
                },
            ]);
            ?>
        </div>

        <div>
            <p
                style="font-size:0.65rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:rgba(255,255,255,0.3);margin-bottom:1.25rem;">
                Follow Us
            </p>

            <?php if ($social_links):
                $icons = [
                    'instagram' => '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>',
                    'facebook' => '<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>',
                    'twitter' => '<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.254 2.25H8.08l4.259 5.63zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>',
                    'youtube' => '<path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/>',
                    'tiktok' => '<path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>',
                    'linkedin' => '<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>',
                ];
                ?>
                <div style="display:flex;flex-direction:column;gap:0.75rem;">
                    <?php foreach ($social_links as $social):
                        $platform = strtolower($social['platform'] ?? '');
                        $icon_path = $icons[$platform] ?? '';
                        $handle = $social['handle'] ?? ucfirst($platform);
                        ?>
                        <a href="<?php echo esc_url($social['url']); ?>" target="_blank" rel="noopener"
                            style="display:inline-flex;align-items:center;gap:0.6rem;font-size:0.825rem;color:rgba(255,255,255,0.5);text-decoration:none;transition:color 0.3s;"
                            onmouseover="this.style.color='var(--eco-sand)'"
                            onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                            <?php if ($icon_path): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <?php echo $icon_path; ?>
                                </svg>
                            <?php endif; ?>
                            <?php echo esc_html($handle); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p style="font-size:0.8rem;color:rgba(255,255,255,0.25);">No social links set.</p>
            <?php endif; ?>
        </div>
    </div>

    <div
        style="max-width:1200px;margin:0 auto;padding:1.5rem 2rem;border-top:1px solid rgba(255,255,255,0.07);display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:1rem;">
        <p style="font-size:0.72rem;color:rgba(255,255,255,0.25);letter-spacing:0.06em;">
            &copy; <?php echo date('Y'); ?> EcotourismBali &mdash; All rights reserved
        </p>
        <p style="font-size:0.72rem;color:rgba(255,255,255,0.2);">
            <?php bloginfo('name'); ?>
        </p>
    </div>
</footer>

<style>
    @media (max-width: 768px) {
        #site-footer>div:first-child {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }
    }
</style>

<?php wp_footer(); ?>
</body>

</html>