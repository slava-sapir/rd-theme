<?php get_header(); ?>

<?php get_template_part('template-parts/header'); ?>
<<<<<<< HEAD
        <main class="content" style="height:2500px;">
=======
        <main class="content" style="height:3000px;">
>>>>>>> develop
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </main>
<?php get_template_part('template-parts/footer'); ?>

<?php get_footer(); ?>
