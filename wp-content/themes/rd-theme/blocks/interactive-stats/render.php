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
?>

<style>

.circular-bar{
  width: 260px;
  height: 260px;
  background: conic-gradient(#4285f4 1.5deg, #e8f0f7 0deg);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
  -6px -6px 10px -1px rgba(255,255,255,0.7);
  margin-bottom: 40px;
}

.circular-bar::before{
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  background: #e8f0f7;
  border-radius: 50%;
  box-shadow: inset 6px 6px 10px -1px rgba(0,0,0,0.15),
  inset -6px -6px 10px -1px rgba(255,255,255,0.7);
}

.percent{
  z-index: 10;
  font-size: 30px;
}


</style>

  <div class="circular-bar">
        <div class="percent">0%</div>
  </div>


