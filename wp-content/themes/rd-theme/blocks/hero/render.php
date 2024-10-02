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
$video = get_field('video'); 
$bg = get_field('background_type'); ?>

<section class="h-72 sm:h-96 lg:h-[550px] xl:h-[805px] relative" 
    style="<?= $bg === 'Image' ? "background-image: url('{$image['url']}');" : ''; ?>">
    <?php if ($bg === 'Video'): ?>
        <video class="h-72 sm:h-96 lg:h-[550px] xl:h-[805px] z-[1] absolute top-0 left-0 object-cover w-full" 
            src="<?= $video['url']; ?>" type="video/mp4" autoplay muted loop playsinline>
            Your browser does not support the video tag.
            <?= $video['url']; ?>
        </video>
    <?php endif; ?>
    <div class="container text-white relative z-[2] flex content-end h-full flex-wrap pb-[50px] white">
        <InnerBlocks/>
    </div>
</section>