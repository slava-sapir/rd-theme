<?php
/**
 * Green CTA Banner
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
<?php if (have_rows('information')): ?>
    <?php while (have_rows('information')): the_row(); 
    $title = get_sub_field('title');
    $link = get_sub_field('link'); ?>
        <section class="bg-white p-[50px] drop-shadow-[0_0_20px_0_rgba(0,0,0,0.09)] mb-[20px] last:mb-0">
            <h5 class="font-semibold pb-[25px]"><?= $title ?></h5>
            <a class="text-grey" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

