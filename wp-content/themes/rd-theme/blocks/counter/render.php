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

<div class="flex flex-wrap gap-[100px]">
   
      <?php if (have_rows('counter')) : ?>
        <?php while (have_rows('counter')) : the_row(); 
         $counter_number = get_sub_field('counter_number');
         $counter_title = get_sub_field('counter_title');
        ?>
        <div class="flex flex-col gap-5">
          <div class="counter flex items-center justify-center text-green text-3xl font-medium shadow-md rounded-full w-[180px] h-[180px]" data-target="<?php echo esc_attr($counter_number); ?>">
              0
          </div>
          <p class="text-center text-off-black text-xl font-medium"><?= $counter_title; ?></p>
        </div>
      <?php endwhile; endif; ?>
</div>

<!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    // Select all elements with the class 'counter'
    const counters: NodeListOf<Element> = document.querySelectorAll('.counter');
    
    counters.forEach((counter: Element) => {
        const targetAttr: string | null = counter.getAttribute('data-target');
        const target: number = targetAttr ? parseInt(targetAttr) : 0;  // Safely handle null
        let count: number = 0;
        let started: boolean = false;
        const increment: number = target / 100;

        function updateCounter(): void {
            count += increment;
            if (count < target) {
                counter.textContent = Math.ceil(count).toString();  // Update counter with rounded number
                setTimeout(updateCounter, 20); // Adjust the speed
            } else {
                counter.textContent = target.toString();  // Set the counter to the final number
            }
        }

        // Add hover event listener for each counter
        counter.addEventListener('mouseover', function() {
            if (!started) {
                started = true;
                updateCounter();
            }
        });
    });
}); -->

</script>
