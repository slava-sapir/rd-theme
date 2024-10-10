<?php
/**
 * Product Menu Block Template.
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


<section class="bg-off-black flex flex-col sm:flex-row gap-5 sm:gap-0 justify-between items-center py-[50px] px-[50px] lg:px-[200px] 2xl:px-[483px]">
     <?php if (have_rows('items_repeater')) :
          while (have_rows('items_repeater')) : the_row(); 
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $link = get_sub_field('link');
     ?>
        <div class="flex items-center gap-5">
            <?php if($image) :
                  echo wp_get_attachment_image($image['id'], 'full', "", array('class' => 'object-fit-contain'));
              endif; ?>
            <div class="flex flex-col">
              <h6 class="text-lg font-medium text-grey"><?= $title; ?></h6>
              <a  href="<?= esc_url($link['url']); ?>" class="text-white font-normal"><?= $link['title']; ?>&nbsp;&nbsp;&nbsp;></a>
            </div>
        </div>

  <?php endwhile; endif; ?>
</section>