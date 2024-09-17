<?php

namespace RdTheme;

class ImageSize
{
    protected string $name;
    protected int $width;

    protected int $height;
    protected bool $crop = false;
    public function __construct(string $name, int $width, int $height, bool $crop = false)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->crop = $crop;

        add_action('after_setup_theme', [$this, 'add']);
    }

    public function add(): void
    {
        add_image_size($this->name, $this->width, $this->height, $this->crop);
    }
}