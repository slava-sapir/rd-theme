<?php

namespace RdTheme;

class ThemeSetup
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'theme_supports']);
    }

    public function theme_supports(): void
    {
        load_theme_textdomain(Init::TEXT_DOMAIN, get_template_directory() . '/public/languages');

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
}