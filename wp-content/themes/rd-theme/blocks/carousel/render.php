<?php
/**
 * Container Block Template.
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

<section id="<?= $anchor; ?>" class="<?= $classes; ?>" style="padding-top: <?= get_field('padding_top'); ?>px; padding-bottom: <?= get_field('padding_bottom'); ?>px;">
    <div class="swiper-container image-carousel">
        <div class="swiper-wrapper">
            <?php while(have_rows('carousel')): the_row(); ?>
            <div class="swiper-slide">
                <?= wp_get_attachment_image(get_sub_field('image')['id'], 'full'); ?>
                <?php if(get_sub_field('title')): ?>
                    <h3 class="text-h4 text-off-black font-semibold pt-5"><?= get_sub_field('title') ?></h3>
                <?php endif;
                if(get_sub_field('content')): ?>
                    <p class="text-xl pt-5"><?= get_sub_field('content') ?></p>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <!-- Add more slides here -->
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

</section>