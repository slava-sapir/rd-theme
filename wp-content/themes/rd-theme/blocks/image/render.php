<?php
/**
 * Image Block Template.
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
$classes = isset($block['className']) ? $block['className'] : '';
$image = get_field('image');
$size = get_field('image_size');
echo wp_get_attachment_image($image['ID'], $size, false, ['class' => $classes]);