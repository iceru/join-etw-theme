<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-body'); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header"
        class="fixed top-0 left-0 w-full z-[100] transition-all duration-500 bg-eco-deep/95 backdrop-blur-sm border-b border-white/10">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between gap-6">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center no-underline shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-etw.png"
                    alt="The Meru Eco Tourism Week" class="h-10 md:h-14 w-auto">
            </a>

            <div class="hidden md:flex items-center gap-8 text-white/50 text-xs font-light tracking-wide">
                <span class="text-white/80 font-medium">30–31 May 2026</span>
                <span class="text-white/80">|</span>
                <span class="text-white/90">Bali Beach Convention Center, Sanur</span>
            </div>

            <div class="flex items-center gap-4">
                <?php
                $socials = [
                    'Instagram' => ['url' => '#', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg>'],
                    'Youtube' => ['url' => '#', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor" stroke="none"/></svg>'],
                    'LinkedIn' => ['url' => '#', 'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>'],
                ];
                foreach ($socials as $label => $social): ?>
                    <a href="<?php echo esc_url($social['url']); ?>" aria-label="<?php echo esc_attr($label); ?>"
                        class="text-white hover:text-eco-gold transition-colors duration-300">
                        <?php echo $social['svg']; ?>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>
    </header>