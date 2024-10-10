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

$product = get_field('featured_product');
  if ($product) {
    $backgroundImage = get_the_post_thumbnail_url($product->ID, 'full');
  }
?>
<div class="relative w-full bg-no-repeat bg-center bg-cover h-[710px] flex justify-center items-center" style="background-image: url('<?php echo esc_url($backgroundImage); ?>'); ">
  <div class="flex flex-col justify-center items-center gap-[20px]">
   <h2 class="text-white font-medium"><?php echo $product->post_title; ?></h2>
   <p class="text-white">The brand new <?php echo $product->post_title; ?> is here</p>
   <a class="btn-orange text-white py-2.5 px-7" href="<?php echo get_permalink($product->ID); ?>">Go to page ></a>
  </div>
</div>
