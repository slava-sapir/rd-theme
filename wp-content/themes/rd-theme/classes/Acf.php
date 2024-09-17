<?php

namespace RdTheme;

class Acf
{
    public string $blocks_path;

    public function __construct()
    {
        $this->blocks_path = get_stylesheet_directory() . '/blocks';

        add_action('init', [$this, 'blocks']);

        add_filter('acf/settings/save_json', [$this, 'save_json']);
    }

    public function save_json($path): string
    {
        return get_stylesheet_directory() . '/resources/acf-json';
    }

    public function blocks(): void
    {
        $directories = scandir(get_stylesheet_directory() . '/blocks/');

        foreach ($directories as $directory) {
            if ($directory === '.' || $directory === '..') {
                continue;
            }

            register_block_type($this->blocks_path . '/' . $directory);
        }
    }
}