<?php
/**
 *
* @param array $block The block settings and attributes.
* @param string $content The block inner HTML (empty).
* @param bool $is_preview True during backend preview render.
* @param int $post_id The post ID the block is rendering content against.
*        This is either the post ID currently being displayed inside a query loop,
*        or the post ID of the post hosting this block.
* @param array $context The context provided to the block by the post or it's parent block.
*
* @package Tenax_North_America
*/
$image = get_field('image');
$vido = get_field('video'); ?>

<section class="h-96 md:h-3/4 bg-off-white">
    <div class="container">
        <InnerBlocks class="row gy-50 gx-lg-100" />
    </div>
</section>