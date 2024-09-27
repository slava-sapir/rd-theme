<?php
/**
 * Black Banner Block Template.
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

<section class="bg-off-black w-full">
    <div class="container">
      <div class="flex justify-between">
        <div class="flex flex-col justify-center">
           <InnerBlocks />
        </div>
        
        <?php
          $terms = get_terms( array(
              'taxonomy' => 'product-category',
              'hide_empty' => false,
          ) );

          if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
              <div class="flex gap-5">
                  <?php foreach ( $terms as $term ) : 
                    $category_icon = get_field('category_icon', $term);  
                  ?>
                    <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="flex flex-col gap-5 py-12 px-5">
                        <?php if($category_icon) :
                            echo wp_get_attachment_image($category_icon['id'], 'full', "", array('class' => 'img-fluid object-fit-contain'));
                        endif; ?>
                        <p class="text-xl text-green font-medium"><?php echo esc_html( $term->name ); ?> ></p>
                    </a>
                    
                  <?php endforeach; ?>
                </a>
              </div>
          <?php endif; ?>
         
      </div>
    </div>
</section>