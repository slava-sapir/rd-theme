<?php
/**
 * Product CTA Block Template.
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

<div class="w-full flex flex-col lg:flex-row gap-[50px]">

  <div class="flex-1">
    <InnerBlocks />
  </div>
  
  <div class="flex flex-1 flex-col gap-5 justify-center items-center">
      <?php if (have_rows('buttons')) : ?>
          <?php while (have_rows('buttons')) : the_row(); 
            $image = get_sub_field('image');
            $link = get_sub_field('link');
            $btn_color = get_sub_field('button_color');
          ?>
          <a class="bg-<?= $btn_color ? $btn_color : ''; ?> rounded-[35px] shadow-button text-white py-1.5 px-[91px] flex gap-2.5 justify-center items-center" href="<?= $link['url'] ? esc_url($link['url']) : ''; ?>">
            <?php if($image) :
                echo wp_get_attachment_image($image['id'], 'full', "", array('class' => 'object-fit-contain'));
            endif; ?>
          <span class="text-xs text-white"><?= $link['title'] ? esc_html($link['title']) : ''; ?></span>
          </a>
      <?php endwhile; endif; ?>
  </div>

</div>