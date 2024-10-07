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

$query = new WP_Query(array(
    'post_type' => 'product', 
    'tax_query' => array(
        array(
            'taxonomy' => 'product-category',
            'field'    => 'slug',
            'terms'    => 'featured',
        ),
    ),
));
?>

<div class="flex gap-5">
  <?php if ($query->have_posts()) {
    $count = 0;
      while ($query->have_posts()) {
        $query->the_post();
        $count++;
        $backgroundImage = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';
  ?>
      <div class="relative w-full bg-no-repeat <?= $count % 2 === 1 ? 'bg-right' : 'bg-left' ?> bg-cover h-[710px] flex justify-center items-center" style="background-image: url('<?php echo esc_url($backgroundImage); ?>');">
        <div class="absolute inset-0 bg-light-grey"></div>
      </div>

    <?php }
      wp_reset_postdata();
    } else {
        echo '<p>No featured products found.</p>';
    }
  ?>
</div>
