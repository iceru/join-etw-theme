<?php
/**
 * ACF Field Group: Ecotourism Week — Static Fields (no repeaters)
 * require_once get_template_directory() . '/inc/acf-ecotourism-week.php';
 */

if (!function_exists('acf_add_local_field_group'))
    return;

acf_add_local_field_group([
    'key' => 'group_ecotourism_week',
    'title' => 'Ecotourism Week',
    'fields' => [

        // ── Event Info ──────────────────────────────────────────────────────
        ['key' => 'field_eco_event_title', 'label' => 'Event Title', 'name' => 'event_title', 'type' => 'text', 'wrapper' => ['width' => '60']],
        ['key' => 'field_eco_event_subtitle', 'label' => 'Subtitle', 'name' => 'event_subtitle', 'type' => 'text', 'wrapper' => ['width' => '100']],
        ['key' => 'field_eco_event_date', 'label' => 'Event Date', 'name' => 'event_date', 'type' => 'date_time_picker', 'display_format' => 'd/m/Y g:i a', 'return_format' => 'Y-m-d H:i:s', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_event_location', 'label' => 'Location', 'name' => 'event_location', 'type' => 'text', 'wrapper' => ['width' => '40']],

        // ── Slides ──────────────────────────────────────────────────────────
        ['key' => 'field_eco_tab_slides', 'label' => 'Slides', 'name' => 'tab_slides', 'type' => 'tab'],

        ['key' => 'field_eco_slide_1_image', 'label' => 'Slide 1 — Image', 'name' => 'slide_1_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_slide_1_caption', 'label' => 'Slide 1 — Caption', 'name' => 'slide_1_caption', 'type' => 'text', 'wrapper' => ['width' => '70']],
        ['key' => 'field_eco_slide_2_image', 'label' => 'Slide 2 — Image', 'name' => 'slide_2_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_slide_2_caption', 'label' => 'Slide 2 — Caption', 'name' => 'slide_2_caption', 'type' => 'text', 'wrapper' => ['width' => '70']],
        ['key' => 'field_eco_slide_3_image', 'label' => 'Slide 3 — Image', 'name' => 'slide_3_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_slide_3_caption', 'label' => 'Slide 3 — Caption', 'name' => 'slide_3_caption', 'type' => 'text', 'wrapper' => ['width' => '70']],

        // ── Rundown ─────────────────────────────────────────────────────────
        ['key' => 'field_eco_tab_rundown', 'label' => 'Rundown', 'name' => 'tab_rundown', 'type' => 'tab'],

        ['key' => 'field_eco_rundown_day1_label', 'label' => 'Day 1 — Label', 'name' => 'rundown_day1_label', 'type' => 'text', 'placeholder' => 'Day 1 — Thursday, June 5'],
        [
            'key' => 'field_eco_rundown_day1_sessions',
            'label' => 'Day 1 — Sessions',
            'name' => 'rundown_day1_sessions',
            'type' => 'textarea',
            'rows' => 6,
            'instructions' => 'One session per line: TIME | Title | Speaker | Description  (speaker & description are optional)'
        ],
        ['key' => 'field_eco_rundown_day2_label', 'label' => 'Day 2 — Label', 'name' => 'rundown_day2_label', 'type' => 'text', 'placeholder' => 'Day 2 — Friday, June 6'],
        [
            'key' => 'field_eco_rundown_day2_sessions',
            'label' => 'Day 2 — Sessions',
            'name' => 'rundown_day2_sessions',
            'type' => 'textarea',
            'rows' => 6,
            'instructions' => 'Leave blank to hide Day 2 entirely.'
        ],
        ['key' => 'field_eco_rundown_day3_label', 'label' => 'Day 3 — Label (optional)', 'name' => 'rundown_day3_label', 'type' => 'text'],
        ['key' => 'field_eco_rundown_day3_sessions', 'label' => 'Day 3 — Sessions', 'name' => 'rundown_day3_sessions', 'type' => 'textarea', 'rows' => 6],

        // ── Sponsors ────────────────────────────────────────────────────────
        ['key' => 'field_eco_tab_sponsors', 'label' => 'Sponsors', 'name' => 'tab_sponsors', 'type' => 'tab'],

        ['key' => 'field_eco_sponsor_gold_1_name', 'label' => 'Gold 1 — Name', 'name' => 'sponsor_gold_1_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_gold_1_logo', 'label' => 'Gold 1 — Logo', 'name' => 'sponsor_gold_1_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_gold_1_url', 'label' => 'Gold 1 — URL', 'name' => 'sponsor_gold_1_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_gold_2_name', 'label' => 'Gold 2 — Name', 'name' => 'sponsor_gold_2_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_gold_2_logo', 'label' => 'Gold 2 — Logo', 'name' => 'sponsor_gold_2_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_gold_2_url', 'label' => 'Gold 2 — URL', 'name' => 'sponsor_gold_2_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_gold_3_name', 'label' => 'Gold 3 — Name', 'name' => 'sponsor_gold_3_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_gold_3_logo', 'label' => 'Gold 3 — Logo', 'name' => 'sponsor_gold_3_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_gold_3_url', 'label' => 'Gold 3 — URL', 'name' => 'sponsor_gold_3_url', 'type' => 'url', 'wrapper' => ['width' => '30']],

        ['key' => 'field_eco_sponsor_silver_1_name', 'label' => 'Silver 1 — Name', 'name' => 'sponsor_silver_1_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_silver_1_logo', 'label' => 'Silver 1 — Logo', 'name' => 'sponsor_silver_1_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_silver_1_url', 'label' => 'Silver 1 — URL', 'name' => 'sponsor_silver_1_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_silver_2_name', 'label' => 'Silver 2 — Name', 'name' => 'sponsor_silver_2_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_silver_2_logo', 'label' => 'Silver 2 — Logo', 'name' => 'sponsor_silver_2_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_silver_2_url', 'label' => 'Silver 2 — URL', 'name' => 'sponsor_silver_2_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_silver_3_name', 'label' => 'Silver 3 — Name', 'name' => 'sponsor_silver_3_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_silver_3_logo', 'label' => 'Silver 3 — Logo', 'name' => 'sponsor_silver_3_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_silver_3_url', 'label' => 'Silver 3 — URL', 'name' => 'sponsor_silver_3_url', 'type' => 'url', 'wrapper' => ['width' => '30']],

        ['key' => 'field_eco_sponsor_bronze_1_name', 'label' => 'Bronze 1 — Name', 'name' => 'sponsor_bronze_1_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_bronze_1_logo', 'label' => 'Bronze 1 — Logo', 'name' => 'sponsor_bronze_1_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_bronze_1_url', 'label' => 'Bronze 1 — URL', 'name' => 'sponsor_bronze_1_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_bronze_2_name', 'label' => 'Bronze 2 — Name', 'name' => 'sponsor_bronze_2_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_bronze_2_logo', 'label' => 'Bronze 2 — Logo', 'name' => 'sponsor_bronze_2_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_bronze_2_url', 'label' => 'Bronze 2 — URL', 'name' => 'sponsor_bronze_2_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_bronze_3_name', 'label' => 'Bronze 3 — Name', 'name' => 'sponsor_bronze_3_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_sponsor_bronze_3_logo', 'label' => 'Bronze 3 — Logo', 'name' => 'sponsor_bronze_3_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_sponsor_bronze_3_url', 'label' => 'Bronze 3 — URL', 'name' => 'sponsor_bronze_3_url', 'type' => 'url', 'wrapper' => ['width' => '30']],

        // ── Media Partners ──────────────────────────────────────────────────
        ['key' => 'field_eco_tab_media', 'label' => 'Media Partners', 'name' => 'tab_media', 'type' => 'tab'],

        ['key' => 'field_eco_mp_1_name', 'label' => 'Media 1 — Name', 'name' => 'media_partner_1_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_mp_1_logo', 'label' => 'Media 1 — Logo', 'name' => 'media_partner_1_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_1_url', 'label' => 'Media 1 — URL', 'name' => 'media_partner_1_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_2_name', 'label' => 'Media 2 — Name', 'name' => 'media_partner_2_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_mp_2_logo', 'label' => 'Media 2 — Logo', 'name' => 'media_partner_2_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_2_url', 'label' => 'Media 2 — URL', 'name' => 'media_partner_2_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_3_name', 'label' => 'Media 3 — Name', 'name' => 'media_partner_3_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_mp_3_logo', 'label' => 'Media 3 — Logo', 'name' => 'media_partner_3_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_3_url', 'label' => 'Media 3 — URL', 'name' => 'media_partner_3_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_4_name', 'label' => 'Media 4 — Name', 'name' => 'media_partner_4_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_mp_4_logo', 'label' => 'Media 4 — Logo', 'name' => 'media_partner_4_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_4_url', 'label' => 'Media 4 — URL', 'name' => 'media_partner_4_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_5_name', 'label' => 'Media 5 — Name', 'name' => 'media_partner_5_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_mp_5_logo', 'label' => 'Media 5 — Logo', 'name' => 'media_partner_5_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_5_url', 'label' => 'Media 5 — URL', 'name' => 'media_partner_5_url', 'type' => 'url', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_6_name', 'label' => 'Media 6 — Name', 'name' => 'media_partner_6_name', 'type' => 'text', 'wrapper' => ['width' => '40']],
        ['key' => 'field_eco_mp_6_logo', 'label' => 'Media 6 — Logo', 'name' => 'media_partner_6_logo', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail', 'wrapper' => ['width' => '30']],
        ['key' => 'field_eco_mp_6_url', 'label' => 'Media 6 — URL', 'name' => 'media_partner_6_url', 'type' => 'url', 'wrapper' => ['width' => '30']],

        // ── Social & Registration ───────────────────────────────────────────
        ['key' => 'field_eco_tab_social', 'label' => 'Social & Registration', 'name' => 'tab_social', 'type' => 'tab'],

        ['key' => 'field_eco_instagram_url', 'label' => 'Instagram URL', 'name' => 'instagram_url', 'type' => 'url', 'wrapper' => ['width' => '50']],
        ['key' => 'field_eco_facebook_url', 'label' => 'Facebook URL', 'name' => 'facebook_url', 'type' => 'url', 'wrapper' => ['width' => '50']],
        ['key' => 'field_eco_tiktok_url', 'label' => 'TikTok URL', 'name' => 'tiktok_url', 'type' => 'url', 'wrapper' => ['width' => '50']],
        ['key' => 'field_eco_youtube_url', 'label' => 'YouTube URL', 'name' => 'youtube_url', 'type' => 'url', 'wrapper' => ['width' => '50']],
        ['key' => 'field_eco_registration_url', 'label' => 'Registration URL', 'name' => 'registration_url', 'type' => 'url', 'wrapper' => ['width' => '50']],
        ['key' => 'field_eco_registration_email', 'label' => 'Registration Email', 'name' => 'registration_email', 'type' => 'email', 'wrapper' => ['width' => '50']],
    ],

    'location' => [
        [
            ['param' => 'page_template', 'operator' => '==', 'value' => 'page-ecotourism-week.php'],
        ]
    ],

    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
]);