<?php
/**
 * Accordion Block Template.
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

<section id="<?= $anchor; ?>" class="container <?= $classes; ?>"
         style="padding-top: <?= get_field('padding_top'); ?>px; padding-bottom: <?= get_field('padding_bottom'); ?>px;">
    <?php while( have_rows('accordion') ): the_row(); ?>
    <div class="collapse collapse-plus bg-white rounded-none shadow-accordion mb-[30px] last:mb-0">
        <input type="radio" name="accordion" class="w-full h-full peer" />
        <div class="collapse-title flex items-center pt-[30px] pl-[30px] peer-checked:text-orange group">
            <?= wp_get_attachment_image(get_sub_field('icon')['id'], 'icon', true); ?>
            <h4 class="text-grey peer-checked:text-orange group-checked:text-orange font-medium text-h5 pl-4"><?= get_sub_field('title'); ?></h4>
        </div>
        <div class="collapse-content px-[80px] xl:px-[105px] peer-checked:pb-14">
            <p class="text-grey font-medium text-h5"><?= get_sub_field('content'); ?></p>
        </div>
    </div>
    <?php endwhile; ?>
</section>