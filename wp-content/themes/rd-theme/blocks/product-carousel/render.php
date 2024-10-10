<?php
/**
 * Product Carousel Block Template.
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
$args = [
    'post_type' => 'product',
];
$products = new WP_Query($args);
?>

<section id="<?= $anchor; ?>" class="relative <?= $classes; ?>" style="padding-top: <?= get_field('padding_top'); ?>px; padding-bottom: <?= get_field('padding_bottom'); ?>px;">
    <h2 class="font-semibold text-center mb-10 lg:mb-24 relative after:content-[''] after:absolute after:bottom-[-23px] after:left-1/2 after:-translate-x-1/2 after:bg-off-black after:h-[6px] after:w-[48px]"><?= geT_field('title'); ?></h2>
    <div class="swiper-container product-carousel overflow-x-hidden">
        <div class="swiper-wrapper">
            <?php while($products->have_posts()) : $products->the_post(); ?>
            <div class="swiper-slide relative">
                <?= wp_get_attachment_image(get_field('accordion_image', get_the_ID())['id'], 'full'); ?>
                    <h3 class="text-h4 text-off-black font-semibold pt-5 text-center"><?php the_title(); ?></h3>
                <?php if(get_field('accordion_alt_title', get_the_ID())): ?>
                    <p class="pt-2 text-center"><?= get_field('accordion_alt_title', get_the_ID()) ?></p>
                <?php endif; ?>
                <a href="<?= get_the_permalink(); ?>" title="<?php the_title(); ?>" class="absolute inset-0 z-10"></a>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="swiper-pagination !static pt-12 lg:pt-[80px]"></div>
    </div>

</section>