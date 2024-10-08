<?php
/**
 * Counter Block Template.
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

<section class="pt-[50px] flex justify-center items-center bg-gradient-to-b from-off-black to-white from-[49%] to-[49%] relative">
  <div class="flex gap-[10px] md:gap-[20px] lg:gap-[100px]">
        <?php if (have_rows('counter')) : ?>
          <?php while (have_rows('counter')) : the_row(); 
          $counter_number = get_sub_field('counter_number');
          $counter_title = get_sub_field('counter_title');
          ?>
          <div class="flex flex-col justify-center items-center gap-5">
            <div class="counter bg-white flex items-center justify-center text-green text-2xl lg:text-3xl font-medium shadow-md rounded-full w-[60px] h-[60px] md:w-[90px] md:h-[90px] lg:w-[180px] lg:h-[180px]" data-target="<?php echo esc_attr($counter_number); ?>">
                0
            </div>
            <p class="text-center text-off-black text-sm md:text-xl font-medium"><?= $counter_title; ?></p>
          </div>
        <?php endwhile; endif; ?>
  </div>
</section>
