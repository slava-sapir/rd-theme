<?php
/**
 * Black Banner Block Template.
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

 $backgroundBar = get_field('background_bar');
 $image = get_field('image');
 $paddingTop = get_field('padding_top');
 $paddingBottom = get_field('padding_bottom');
 $container = get_field('container_width');
 $bg = get_field('background');
?>

<section class="<?= $bg ?> w-full" style="padding-top: <?= $paddingTop ?>px; padding-bottom: <?= $paddingBottom ?>px;">
    <div class="<?= $container ?>" style="<?= $image ? "background-image: url('{$image['url']}');" : ''; ?>">
        <InnerBlocks/>
    </div>
</section>