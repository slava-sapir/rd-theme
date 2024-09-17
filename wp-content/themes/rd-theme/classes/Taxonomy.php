<?php

namespace RdTheme;

class Taxonomy
{
    public bool $public = true;
    public bool $hierarchical = true;


    protected string $taxonomy;
    protected array $post_types = [];
    protected string $slug;
    protected array $labels;
    protected array $supports = [
        'title', 'editor', 'thumbnail'
    ];

    public function __construct()
    {
        //
    }

    public function labels(string $name, string $singular_name, string $menu_name): static
    {
        $this->labels = [
            'name'          => $name,
            'singular_name' => $singular_name,
            'menu_name'     => $menu_name,
        ];

        return $this;
    }

    public function supports(array $supports): static
    {
        foreach ($supports as $support) {
            if (!in_array($support, $this->supports)) {
                $this->supports[] = $support;
            }
        }

        return $this;
    }

    public function add_post_types(array $post_types) :static
    {
        foreach ($post_types as $post_type) {
            $this->add_post_type($post_type);
        }

        return $this;
    }

    public function add_post_type(string $post_type): static
    {
        if (!in_array($post_type, $this->post_types)) {
            $this->post_types[] = $post_type;
        }

        return $this;
    }

    public function init(): void
    {
        register_taxonomy($this->taxonomy, $this->post_types, [
            'labels'       => $this->labels,
            'public'       => $this->public,
            'hierarchical' => $this->hierarchical,
            'rewrite'      => [
                'slug' => $this->slug
            ],
            'supports'     => $this->supports,
        ]);
    }

    public function create(string $taxonomy, string $slug): void
    {
        $this->taxonomy = $taxonomy;
        $this->slug = $slug;

        add_action('init', [$this, 'init'], 0);
    }
}