<?php
/**
 * Side Panel Showcase Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *        This is either the post ID currently being displayed inside a query loop,
 *        or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 * 
 * @package rd-theme
 */
?>

<?php
$anchor = isset($block['anchor']) ? $block['anchor'] : '';
$classes = isset($block['className']) ? $block['className'] : '';
?>

<section id="<?= $anchor; ?>" class="md:grid md:grid-cols-3 <?= $classes; ?>" style="padding-top: <?= get_field('padding_top'); ?>px; padding-bottom: <?= get_field('padding_bottom'); ?>px;">
    <div class="md:col-span-1 px-9 py-[15%] md:px-[20%] bg-off-black flex flex-col justify-between">
        <h2 class="font-semibold mb-5 text-white"><?= get_field('title'); ?></h2>
        <div class="leading-loose"><?= get_field('content'); ?></div>
    </div>
    <div class="md:col-span-2 md:flex md:items-end">
        <?= wp_get_attachment_image(get_field('image')['id'], 'full', false, ['class' => 'md:mt-[190px]']); ?>
    </div>
</section>