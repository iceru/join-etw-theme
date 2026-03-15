<footer id="site-footer" class="bg-eco-deep text-white/60 font-body border-t border-white/10">
    <div class="max-w-[1200px] mx-auto px-8 py-16 md:py-20 grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16 items-start">
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <p class="text-[0.75rem] font-bold tracking-[0.2em] uppercase text-white/40 mb-6">
                Organized by
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/etb-logo.png" alt="Eco Tourism Bali" class="h-16 md:h-20 w-auto brightness-0 invert opacity-80">
        </div>

        <div>
            <h4 class="font-display text-[1.75rem] font-normal text-white mb-6">Join Our Mailing List</h4>
            <p class="text-[0.95rem] leading-relaxed text-white/70 mb-8">
                Subscribe to our newsletter and stay updated with the latest news, insights, and announcements from Eco Tourism Bali
            </p>
            <form class="flex gap-2 flex-wrap">
                <input type="email" placeholder="Your email address" class="flex-1 min-w-[150px] px-4 py-3 border border-white/30 bg-white/5 text-white font-inherit text-[0.9rem] rounded focus:outline-none focus:border-eco-sand transition-colors">
                <button type="submit" class="px-6 py-3 bg-eco-sand text-eco-deep font-bold text-[0.9rem] rounded hover:bg-white transition-colors duration-300">Subscribe</button>
            </form>
        </div>

        <div>
            <p class="text-[0.75rem] font-bold tracking-[0.2em] uppercase text-white/40 mb-6 text-center md:text-left">
                Follow Us
            </p>
            <div class="flex flex-col gap-4 items-center md:items-start">
                <a href="#" class="inline-flex items-center gap-3 text-[0.9rem] text-white/80 hover:text-eco-sand transition-colors duration-300">
                    <i data-lucide="instagram" class="w-4 h-4"></i>
                    Instagram
                </a>
                <a href="#" class="inline-flex items-center gap-3 text-[0.9rem] text-white/80 hover:text-eco-sand transition-colors duration-300">
                    <i data-lucide="youtube" class="w-4 h-4"></i>
                    Youtube
                </a>
                <a href="#" class="inline-flex items-center gap-3 text-[0.9rem] text-white/80 hover:text-eco-sand transition-colors duration-300">
                    <i data-lucide="linkedin" class="w-4 h-4"></i>
                    Linkedin
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-[1200px] mx-auto px-8 py-6 border-t border-white/5 text-center">
        <p class="text-[0.75rem] text-white/30">&copy; <?php echo date('Y'); ?> EcotourismBali &mdash; All rights reserved</p>
    </div>
</footer>
<script>
    if (window.lucide) {
        lucide.createIcons();
    }
</script>
<?php wp_footer(); ?>
</body>
</html>