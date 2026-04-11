<footer id="site-footer" class="bg-eco-stone border-t border-eco-deep/30">

    <div class="container mx-auto px-6 py-16 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-[1fr_1.5fr_1fr] gap-12 md:gap-16 items-start">

            <div>
                <p class="text-eco-deep/70 text-sm font-semibold tracking-wider uppercase mb-6">Organized by
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-etb.png" alt="Eco Tourism Bali"
                    class="h-16 md:h-20 w-auto mb-6">
            </div>

            <div class="md:border-x border-eco-deep/30 md:px-12">
                <h4 class="font-display text-eco-deep text-[1.5rem] md:text-[1.75rem] font-light mb-2">Join Our Mailing
                    List</h4>
                <p class="text-eco-deep/80 text-sm font-light leading-relaxed mb-6">
                    Stay updated with the latest news, insights, and announcements from Eco Tourism Bali.
                </p>
                <div class="flex gap-0">
                    <input type="email" placeholder="Your email address"
                        class="flex-1 min-w-0 px-4 py-3 border border-eco-deep/30 border-r-0 bg-white/5 text-eco-deep text-sm font-light focus:outline-none focus:border-eco-gold transition-colors placeholder:text-eco-deep/90">
                    <button type="button"
                        class="px-5 py-3 bg-eco-gold text-eco-deep font-semibold text-sm tracking-widest uppercase hover:bg-white transition-colors duration-300 shrink-0">
                        Subscribe
                    </button>
                </div>
            </div>

            <div>
                <p class="text-eco-deep/70 text-sm font-semibold tracking-wider uppercase mb-6">Follow Us</p>
                <div class="flex flex-col gap-3">
                    <?php
                    $socials = [
                        'Instagram' => '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg>',
                        'Youtube' => '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor" stroke="none"/></svg>',
                        'LinkedIn' => '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>',
                    ];
                    foreach ($socials as $label => $svg): ?>
                        <a href="#"
                            class="inline-flex items-center gap-3 text-eco-deep/90 font-light hover:text-eco-gold transition-colors duration-300 group">
                            <span
                                class="text-eco-deep/90 group-hover:text-eco-gold transition-colors duration-300"><?php echo $svg; ?></span>
                            <?php echo $label; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="border-t border-eco-deep/30">
        <div class="container mx-auto px-6 py-5 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-eco-deep/90 text-sm font-light">&copy; <?php echo date('Y'); ?> Eco Tourism Bali — All rights
                reserved</p>
            <p class="text-eco-deep/90 text-sm font-light">The Meru Eco Tourism Week · 30–31 May 2026 · Sanur, Bali</p>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>