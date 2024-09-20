<header class="navbar bg-blue absolute top-0 left-0" id="header">
    <div class="navbar container" id="navbar">
        <div class="navbar-start brightness-0 invert">
            <a href="<?php echo get_home_url(); ?>">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . home_url() . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
                }
            ?>
            </a>
        </div> 
        <div class="navbar-end">
          <div class="navbar-item flex flex-col gap-x-10">
            <div class="flex flex-row gap-x-6">

            </div>

          </div>
        </div>
    </div>
  
</header>