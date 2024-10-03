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
    <div class="collapse collapse-plus bg-white rounded-none shadow-accordion mb-[30px]">
        <input type="radio" name="accordion" checked="checked" class="w-full" />
        <div class="collapse-title text-grey font-medium">Click to open this one and close others</div>
        <div class="collapse-content">
            <p>hello</p>
        </div>
    </div>
    <div class="collapse collapse-plus bg-white rounded-none shadow-accordion mb-[30px]">
        <input type="radio" name="accordion" class="w-full" />
        <div class="collapse-title text-grey font-medium">Click to open this one and close others</div>
        <div class="collapse-content">
            <p>hello</p>
        </div>
    </div>
    <div class="collapse collapse-plus bg-white rounded-none shadow-accordion">
        <input type="radio" name="accordion" class="w-full" />
        <div class="collapse-title text-grey font-medium">Click to open this one and close others</div>
        <div class="collapse-content">
            <p>hello</p>
        </div>
    </div>
</section>