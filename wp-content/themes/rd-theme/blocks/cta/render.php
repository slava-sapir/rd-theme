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

<section class="<?= $bg ?> w-full flex justify-center relative" style="padding-top: <?= $paddingTop ?>px; padding-bottom: <?= $paddingBottom ?>px;">
    <article class="<?= $container ?> h-[25rem] md:h-[47rem] flex justify-center items-center relative z-[3] bg-cover bg-no-repeat" style="<?= $image ? "background-image: url('{$image['url']}');" : ''; ?>">
        <div class="max-w-[44rem] px-5">
            <InnerBlocks/>
        </div>
    </article>
    <?php if ($backgroundBar): ?>
        <div class="absolute top-0 left-0 w-full h-full flex items-center">
            <div class="h-[7rem] md:h-[20rem] bg-off-black w-full"></div>
        </div>
    <?php endif; ?>
</section>