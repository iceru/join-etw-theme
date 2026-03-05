<?php

if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
    require_once __DIR__ . '/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(
            fn($manager) => $manager
                ->withCompiler(
                    new TailPress\Framework\Assets\ViteCompiler,
                    fn($compiler) => $compiler
                        ->registerAsset('resources/css/app.css')
                        ->registerAsset('resources/js/app.js')
                        ->editorStyleFile('resources/css/editor-style.css')
                )
                ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __('Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

if (!function_exists('get_field')) {
    function get_field($selector, $post_id = false, $format_value = true)
    {
        return false;
    }
}

require_once get_template_directory() . '/inc/acf-etw.php';

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Navigation', 'tailpress'),
        'footer' => __('Footer Navigation', 'tailpress'),
    ]);
});

class Eco_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $url = $item->url ?? '#';
        $title = $item->title;
        $current = in_array('current-menu-item', $item->classes) ? 'var(--eco-sand)' : 'rgba(255,255,255,0.8)';
        $output .= sprintf(
            '<a href="%s" style="font-family:\'Plus Jakarta Sans\',sans-serif;font-size:0.8rem;font-weight:500;letter-spacing:0.1em;text-transform:uppercase;color:%s;text-decoration:none;transition:color 0.3s;"
               onmouseover="this.style.color=\'var(--eco-sand)\'"
               onmouseout="this.style.color=\'%s\'">%s</a>',
            esc_url($url),
            $current,
            $current,
            esc_html($title)
        );
    }
}

class Eco_Mobile_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $url = $item->url ?? '#';
        $title = $item->title;
        $current = in_array('current-menu-item', $item->classes);
        $output .= sprintf(
            '<a href="%s" style="display:block;padding:0.65rem 0;font-family:\'Plus Jakarta Sans\',sans-serif;font-size:0.9rem;color:%s;text-decoration:none;border-bottom:1px solid rgba(255,255,255,0.07);">%s</a>',
            esc_url($url),
            $current ? 'var(--eco-sand)' : 'rgba(255,255,255,0.75)',
            esc_html($title)
        );
    }
}

class Eco_Footer_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $output .= sprintf(
            '<a href="%s" style="font-size:0.825rem;color:rgba(255,255,255,0.5);text-decoration:none;transition:color 0.3s;"
                onmouseover="this.style.color=\'rgba(255,255,255,0.9)\'"
                onmouseout="this.style.color=\'rgba(255,255,255,0.5)\'">%s</a>',
            esc_url($item->url),
            esc_html($item->title)
        );
    }
}


tailpress();

