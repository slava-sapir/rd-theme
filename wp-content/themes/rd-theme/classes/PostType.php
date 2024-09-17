<?php

namespace RdTheme;

class PostType
{
    public string $label;
    public bool $public = true;
    public bool $has_archive = true;

    protected string $post_type;
    protected string $slug;
    protected array $labels;
    protected array $supports = [
        'title', 'editor', 'thumbnail'
    ];

    public function __construct()
    {
        //
    }

    public function labels(string $name, string $singular, string $menu_name): static
    {
        $this->label = $name;
        $this->labels = [
            'name'      => $name,
            'singular'  => $singular,
            'menu_name' => $menu_name,
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

    public function init(): void
    {
        register_post_type($this->post_type, [
            'label'       => $this->label,
            'labels'      => $this->labels,
            'public'      => $this->public,
            'has_archive' => $this->has_archive,
            'rewrite'     => [
                'slug' => $this->slug
            ],
            'supports'    => $this->supports,
        ]);
    }

    public function create(string $post_type, string $slug): void
    {
        $this->post_type = $post_type;
        $this->slug = $slug;

        add_action('init', [$this, 'init'], 0);
    }
}