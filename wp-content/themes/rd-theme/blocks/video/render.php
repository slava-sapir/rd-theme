<?php
/**
 * Video-Block Template.
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
$video = get_field('video');
?>
<section class="pb-[20px] lg:pb-[100px] bg-gradient-to-t from-off-black to-white from-[29%] to-[29%] relative">
  <div class="container">
    <video class="inset-0 w-full h-full object-cover" autoplay muted loop controls>
      <source src="<?= $video['url'] ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</section>