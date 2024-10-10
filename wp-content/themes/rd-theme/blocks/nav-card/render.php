<?php
/**
 *
* @param array $block The block settings and attributes.
* @param string $content The block inner HTML (empty).
* @param bool $is_preview True during backend preview render.
* @param int $post_id The post ID the block is rendering content against.
*        This is either the post ID currently being displayed inside a query loop,
*        or the post ID of the post hosting this block.
* @param array $context The context provided to the block by the post or it's parent block.
*
* @package Tenax_North_America
*/
$bg_image = get_field('bg_image');
$filter_color = get_field('filter_color'); 
$title = get_field('title'); 
$text = get_field('text'); 
$link = get_field('link');
$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$padding_left = get_field('padding_left');
$padding_right = get_field('padding_right');
?>
  <div class="relative w-full bg-no-repeat bg-center bg-cover flex flex-col justify-between" style="background-image: url('<?php echo $bg_image['url']; ?>'); padding-top: <?= $padding_top; ?>px; padding-bottom: <?= $padding_bottom; ?>px; padding-left: <?= $padding_left; ?>px; padding-right: <?= $padding_right; ?>px">
    <div class="absolute inset-0 bg-<?= $filter_color ? $filter_color : ''; ?> "></div>
  <div>
    <h3 class="text-white text-4xl font-medium mb-[18px]"><?= $title; ?></h3>
    <p class="text-white text-base"><?= $text; ?></p>
  </div>
  <?php if ($link) : ?>
    <a class="text-white text-base pt-[50px] md:pt-[100px]" href="<?= $link['url']; ?>"><?= $link['title']; ?>&nbsp;&nbsp;&nbsp;></a>
  <?php endif; ?>

</div>