<?php get_header(); ?>

<?php get_template_part('template-parts/header'); ?>
    <div class="container">
        <main class="content" style="height:2000px;">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </main>
    </div>
<?php get_template_part('template-parts/footer'); ?>

<?php get_footer(); ?>
