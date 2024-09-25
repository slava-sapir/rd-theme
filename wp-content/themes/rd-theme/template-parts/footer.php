<?php $main_logo = get_field('main_logo', 'options');
$secondary_logo = get_field('secondary_logo', 'options'); 
$address = get_field('address', 'options');
$phone = get_field('phone', 'options');
$email = get_field('email', 'options'); 
$pages = get_field('pages', 'options');
$copyright = get_field('copyright', 'options');
$certification = get_field('certification', 'options');?>
<footer class="bg-off-black py-12">
    <section class="container grid grid-cols-4">
        <figure class="col-span-4 lg:col-span-1">
            <a href="/" title="Home"><?= wp_get_attachment_image($main_logo['ID'], 'full', 'false', array('class' => 'w-auto mb-3')); ?></a>
            <?= wp_get_attachment_image($secondary_logo['ID'], 'full', 'false', array('class' => 'w-auto')); ?>
        </figure>
        <article class="col-span-4 md:col-span-3 lg:col-span-2 lg:ps-12 pt-5 lg:pt-0 flex flex-col">
            <h5 class="font-semibold text-white mb-1"><?= bloginfo('name') ?></h5>
            <a class="mb-1 text-off-white font-light text-sm" href="<?= $address['url'] ?>" title="<?= $address['title'] ?>" target="<?= $address['target'] ?>"><?= $address['title'] ?></a>
            <a class="mb-1 text-off-white font-light text-sm" href="<?= $phone['url'] ?>" title="<?= $phone['title'] ?>" target="<?= $phone['target'] ?>"><?= $phone['title'] ?></a>
            <a class="text-off-white font-light text-sm" href="<?= $email['url'] ?>" title="<?= $email['title'] ?>" target="<?= $email['target'] ?>"><?= $email['title'] ?></a>
        </article>
        <article class="col-span-4 md:col-span-1 pt-5 lg:pt-0 flex flex-col">
            <?php if ($pages): ?>
                <ul>
                    <?php foreach ($pages as $page): 
                    $permalink = get_permalink($page->ID); 
                    $title = get_the_title($page->ID);?>
                        <li class="mb-1 md:text-end font-light text-sm"><a class="text-off-white" href="<?= $permalink?>" title="<?= $title ?>"><?= $title ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </article>
        <section class="col-span-4 grid grid-cols-6 border-solid border-t border-off-white mt-3 md:mt-5 pt-2">
            <?php if ($copyright): ?>
                <article class="col-span-5 lg:col-span-2">
                    <span class="text-sm font-light text-off-white"><?= $copyright ?></span>
                </article>
            <?php endif; ?>
            <?php if ($certification): ?>
                <article class="col-span-5 lg:col-span-2 text-left lg:text-right">
                    <span class="text-sm font-light text-off-white"><?= $certification ?></span>
                </article>
            <?php endif; ?>
            <?php if (have_rows('social_media_links', 'options')): ?>
                <article class="col-span-4 lg:col-span-2">
                    <ul class="flex gap-x-2 pt-2 lg:pt-0 lg:justify-end">
                        <?php while (have_rows('social_media_links', 'options')): the_row(); 
                        $link = get_sub_field('link');
                        $icon = get_sub_field('icon');?>
                            <li><a href="<?= $link['url']; ?>" title="<?= $link['title']; ?>" target="<?= $link['target']; ?>"><?= wp_get_attachment_image($icon['ID'], 'full', 'false', array('class' => 'w-auto mb-3')); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </article>
            <?php endif; ?>
        </section>
    </section>
</footer>