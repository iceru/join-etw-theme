<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header" class="fixed top-0 left-0 w-full z-[100] bg-eco-deep border-b border-white/10 transition-all duration-500">
        <div id="header-inner" class="max-w-[1200px] mx-auto px-4 md:px-8 py-4 md:py-6 flex flex-col md:flex-row items-center justify-between gap-4 md:gap-6 transition-all duration-500">
            
            <div class="hidden md:flex gap-6 text-white text-[0.85rem] font-semibold tracking-wider order-2 md:order-1">
                <a href="#" class="flex items-center gap-1.5 hover:text-eco-sand transition-colors duration-300">
                    <i data-lucide="instagram" class="w-4 h-4"></i> Instagram
                </a>
                <a href="#" class="flex items-center gap-1.5 hover:text-eco-sand transition-colors duration-300">
                    <i data-lucide="youtube" class="w-4 h-4"></i> Youtube
                </a>
                <a href="#" class="flex items-center gap-1.5 hover:text-eco-sand transition-colors duration-300">
                    <i data-lucide="linkedin" class="w-4 h-4"></i> Linkedin
                </a>
            </div>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center justify-center no-underline order-1 md:order-2">
                <span id="site-logo-text" class="font-display text-[1.75rem] md:text-[2rem] font-semibold text-eco-sand tracking-wide leading-none">
                    Logo ETW
                </span>
            </a>

            <div class="text-[0.75rem] md:text-[0.85rem] text-white/80 text-center md:text-right max-w-[300px] leading-relaxed order-3">
                <strong class="text-white block md:inline">28-29 May 2026</strong>
                <span class="hidden md:inline"> | </span>
                Bali Beach Convention Center, Sanur, Bali
            </div>
            
            <div class="flex md:hidden gap-4 text-white text-[0.75rem] font-semibold tracking-wider order-4">
                <a href="#" class="hover:text-eco-sand transition-colors"><i data-lucide="instagram" class="w-4 h-4"></i></a>
                <a href="#" class="hover:text-eco-sand transition-colors"><i data-lucide="youtube" class="w-4 h-4"></i></a>
                <a href="#" class="hover:text-eco-sand transition-colors"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
            </div>
        </div>
    </header>
    <script>
        lucide.createIcons();
    </script>