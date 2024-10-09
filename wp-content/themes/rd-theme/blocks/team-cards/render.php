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
* @package rd-theme
*/
?>

<?php if (have_rows('team')): ?>
    <section class="grid grid-cols-3 gap-[20px]">
        <?php while (have_rows('team')): the_row(); 
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $phone = get_sub_field('phone');
        $email = get_sub_field('email'); ?>
            <article class="col-span-3 lg:col-span-1 shadow-md lg:shadow-lg p-[25px;] lg:p-[50px] border-t-4 border-grey">
                <div class="border-b-[1px] border-light-grey pb-[20px] grid grid-row-2 gap-y-[20px]">
                    <p class="text-center font-bold text-lg text-button-grey"><?= $name ?></p>
                    <p class="text-center text-base"><?= $title ?></p>
                </div>
                <div class="pt-[20px] grid grid-row-2 gap-y-[20px]">
                    <a class="text-grey text-center row-span-1" href="<?= $phone['url']; ?>" title="<?= $phone['title']; ?>"><?= $phone['title']; ?></a>
                    <a class="text-grey text-center row-span-1" href="<?= $email['url']; ?>" title="<?= $email['title']; ?>"><?= $email['title']; ?></a>
                </div>
            </article>
        <?php endwhile; ?>
    </section>
<?php endif; ?>