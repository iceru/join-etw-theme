<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="site-header"
        style="position:fixed;top:0;left:0;right:0;z-index:100;transition:background 0.4s,box-shadow 0.4s,padding 0.4s;">
        <div style="max-width:1200px;margin:0 auto;padding:1.5rem 2rem;display:flex;align-items:center;justify-content:space-between;transition:padding 0.4s;"
            id="header-inner">

            <a href="<?php echo esc_url(home_url('/')); ?>"
                style="text-decoration:none;display:flex;align-items:center;gap:0.75rem;">
                <?php if (has_custom_logo()):
                    the_custom_logo();
                else: ?>
                    <span
                        style="font-family:'Cormorant Garamond',Georgia,serif;font-size:1.4rem;font-weight:300;color:#fff;letter-spacing:0.04em;line-height:1;"
                        id="site-logo-text">
                        <?php bloginfo('name'); ?>
                    </span>
                <?php endif; ?>
            </a>

            <nav id="primary-nav" style="display:flex;align-items:center;gap:2.5rem;">
                <?php
                $nav_items = [
                    '#countdown' => 'Event Date',
                    '#rundown' => 'Schedule',
                    '#sponsors' => 'Sponsors',
                    '#media-partners' => 'Partners',
                ];
                foreach ($nav_items as $href => $label): ?>
                    <a href="<?php echo esc_attr($href); ?>"
                        style="font-family:'Plus Jakarta Sans',sans-serif;font-size:0.8rem;font-weight:500;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.8);text-decoration:none;transition:color 0.3s;"
                        onmouseover="this.style.color='var(--eco-sand)'"
                        onmouseout="this.style.color='rgba(255,255,255,0.8)'">
                        <?php echo esc_html($label); ?>
                    </a>
                <?php endforeach; ?>

                <?php
                $reg_url = get_field('registration_url', get_the_ID());
                if ($reg_url && $reg_url !== '#'): ?>
                    <a href="<?php echo esc_url($reg_url); ?>"
                        style="padding:0.5rem 1.5rem;background:var(--eco-leaf);color:#fff;font-family:'Plus Jakarta Sans',sans-serif;font-size:0.75rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;transition:background 0.3s;"
                        onmouseover="this.style.background='var(--eco-forest)'"
                        onmouseout="this.style.background='var(--eco-leaf)'">
                        Register
                    </a>
                <?php endif; ?>
            </nav>


            <button id="mobile-toggle" style="display:none;background:none;border:none;cursor:pointer;padding:0.25rem;"
                aria-label="Toggle menu">
                <span id="hamburger-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="#fff"
                        stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </span>
            </button>
        </div>

        <div id="mobile-nav"
            style="display:none;background:var(--eco-deep);border-top:1px solid rgba(255,255,255,0.08);padding:1.5rem 2rem 2rem;">
            <div style="display:flex;flex-direction:column;gap:0.25rem;">
                <?php foreach ($nav_items as $href => $label): ?>
                    <a href="<?php echo esc_attr($href); ?>"
                        style="display:block;padding:0.65rem 0;font-family:'Plus Jakarta Sans',sans-serif;font-size:0.9rem;color:rgba(255,255,255,0.75);text-decoration:none;border-bottom:1px solid rgba(255,255,255,0.07);">
                        <?php echo esc_html($label); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php if ($reg_url && $reg_url !== '#'): ?>
                    <a href="<?php echo esc_url($reg_url); ?>"
                        style="display:inline-block;margin-top:1.5rem;padding:0.65rem 2rem;background:var(--eco-leaf);color:#fff;font-size:0.75rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;">
                        Register
                    </a>
            <?php endif; ?>
        </div>

    </header>

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

        #site-header.scrolled {
            background: rgba(22, 42, 30, 0.97);
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        #site-header.scrolled #header-inner {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        #site-header .custom-logo {
            max-height: 36px;
            width: auto;
        }

        @media (max-width: 768px) {
            #primary-nav {
                display: none !important;
            }

            #mobile-toggle {
                display: block !important;
            }
        }
    </style>

    <script>
        (function () {
            var header = document.getElementById('site-header');
            var toggle = document.getElementById('mobile-toggle');
            var mobileNav = document.getElementById('mobile-nav');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 40) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            toggle.addEventListener('click', function () {
                var open = mobileNav.style.display === 'block';
                mobileNav.style.display = open ? 'none' : 'block';
            });
        })();
    </script>