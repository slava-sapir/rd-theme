<?php
/**
 * Column
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

$paddingTop = get_field('padding_top');
$paddingBottom = get_field('padding_bottom');
$width = get_field('column_width');
$gap = get_field('gap');
?>

<article class="<?= $width ?> <?= $gap ?> gap-y-4" style="padding-top: <?= $paddingTop ?>px; padding-bottom: <?= $paddingBottom ?>px;">
    <InnerBlocks/>
</article>

