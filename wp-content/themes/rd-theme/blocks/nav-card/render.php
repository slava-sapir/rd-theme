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
<<<<<<< HEAD
echo $filter_color;
=======
>>>>>>> develop
$title = get_field('title'); 
$text = get_field('text'); 
$link = get_field('link');
?>
  <div class="relative w-full pt-[70px] pb-[40px] pl-[60px] pr-[135px] bg-no-repeat bg-center bg-cover h-[600px] flex flex-col justify-between" style="background-image: url('<?php echo $bg_image['url']; ?>');">
<<<<<<< HEAD
    <div class="absolute inset-0 bg-<?= $filter_color ? $filter_color : ''; ?>"></div>
=======
    <div class="absolute inset-0 bg-<?= $filter_color ? $filter_color : ''; ?> "></div>
>>>>>>> develop
  <div class="">
    <h3 class="text-white text-4xl font-medium mb-[18px]"><?= $title; ?></h3>
    <p class="text-white text-base"><?= $text; ?></p>
  </div>
  <?php if ($link) : ?>
    <a class="text-white text-base" href="<?= $link['url']; ?>"><?= $link['title']; ?>&nbsp;&nbsp;&nbsp;></a>
  <?php endif; ?>

</div>