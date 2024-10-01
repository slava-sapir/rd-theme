<header class="bg-blue fixed top-0 left-0 z-50 w-full" id="header">
    <!-- Desktop Navigation Menu -->
    <div
        class="navbar container flex flex-row lg:flex-col xl:flex-row justify-between lg:justify-evenly gap-3 xl:gap-0 pb-1"
        id="navbar">

        <div class="navbar-start brightness-0 invert">
            <a href="<?php echo get_home_url(); ?>">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . home_url() . '" class="site-title">' . get_bloginfo('name') . '</a>';
                }
                ?>
            </a>
        </div>
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle lg:hidden" id="mobileMenuBtn">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="white">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h7"/>
            </svg>
        </div>

        <div class="navbar-end w-full hidden lg:flex justify-center xl:justify-end relative">
            <div class="flex flex-col gap-3 xl:gap-7">
                <div class="flex flex-row gap-3 justify-center xl:justify-end items-center">
                    <img src="<?= get_template_directory_uri(); ?>/resources/images/icons/phone_icon.svg"
                         alt="phone_icon" class="img-fluid" id="phone-icon">
                    <?php
                    $contact_number = get_field('phone', 'options');
                    if ($contact_number):
                        ?>
                        <a href="<?= $contact_number['url']; ?>"
                           class="text-base font-medium text-white"><?= $contact_number['title']; ?></a>
                    <?php endif; ?>
                </div>

                <ul class="flex flex-col lg:flex-row gap-6">

                    <?php if (have_rows('nav_repeater', 'options')): ?>

                        <?php while (have_rows('nav_repeater', 'options')): the_row(); ?>
                            <?php if (get_sub_field('if_sub_menu')): ?>
                                <li class="navbar-item">
                                    <div class="dropdown dropdown-hover">
                                        <a href="javascript:void(0)" tabindex="0" role="button"
                                           class="flex items-center justify-between text-base font-medium text-white group">
                                            <?php echo esc_html(get_sub_field('nav_link')['title']); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" id="svg" width="12" height="6"
                                                 viewBox="0 0 12 6" fill="none"
                                                 class="ml-2 transition-transform duration-300 ease-in-out transform group-hover:rotate-180">
                                                <path d="M6 5.8335L0.803849 0.833496L11.1962 0.833497L6 5.8335Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>

                                        <div tabindex="0" class="dropdown-content menu p-0 bg-base-100 z-[1] w-52">

                                            <?php while (have_rows('sub_menu_repeater', 'options')): the_row(); ?>
                                                <?php if (get_sub_field('right_sub_menu')): ?>

                                                    <div class="dropdown dropdown-right relative group">
                                                        <a href="javascript:void(0)" tabindex="0" role="button"
                                                           class="py-3.5 pr-2.5 pl-3 hover:bg-green border-b-2 border-light-grey last:border-b-0 flex items-center justify-between text-base font-medium text-black group">
                                                            <?php echo esc_html(get_sub_field('sub_menu_link')['title']); ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                                 height="12" viewBox="0 0 5 12" fill="none"
                                                                 class="ml-2 transition-transform duration-300 ease-in-out transform group-hover:rotate-90">
                                                                <path
                                                                    d="M5 6L-1.25622e-08 11.1962L4.417e-07 0.803848L5 6Z"
                                                                    fill="#232323"/>
                                                            </svg>
                                                        </a>
                                                        <div tabindex="0"
                                                             class="dropdown-content menu p-0 bg-base-100 z-[1] w-52 hidden group-hover:block absolute top-0 left-full flex-col">
                                                            <?php while (have_rows('right_menu_repeater', 'options')): the_row(); ?>

                                                                <a href="javascript:void(0)"
                                                                   class="py-3.5 pr-2.5 pl-3 hover:bg-green border-b-2 border-light-grey last:border-b-0 text-base font-medium text-black block w-full p-0"
                                                                   href="<?= esc_url(get_sub_field('right_menu_link')['url']); ?>">
                                                                    <?= esc_html(get_sub_field('right_menu_link')['title']); ?>
                                                                </a>

                                                            <?php endwhile; ?>
                                                        </div>
                                                    </div>

                                                <?php else: ?>

                                                    <a href="javascript:void(0)"
                                                       class="py-3.5 pr-2.5 pl-3 hover:bg-green border-b-2 border-light-grey last:border-b-0 text-base font-medium text-black p-0"
                                                       href="<?= esc_url(get_sub_field('sub_menu_link')['url']); ?>">
                                                        <?= esc_html(get_sub_field('sub_menu_link')['title']); ?>
                                                    </a>

                                                <?php endif; ?>
                                            <?php endwhile; ?>

                                        </div>
                                    </div>
                                </li>
                            <?php else: ?>


                                <li class="">
                                    <a class="text-base font-medium text-white"
                                       href="<?php echo esc_url(get_sub_field('nav_link')['url']); ?>">
                                        <?php echo esc_html(get_sub_field('nav_link')['title']); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>

                    <?php endif; ?>

                </ul>

            </div>
        </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
         class="hidden flex-col gap-4 bg-blue w-full absolute top-full left-0 z-40 lg:hidden items-start p-[30px]">
        <div class="flex flex-row gap-3 justify-center xl:justify-end items-center">
            <img src="<?= get_template_directory_uri(); ?>/resources/images/icons/phone_icon.svg" alt="phone_icon"
                 class="img-fluid">
            <?php
            $contact_number = get_field('phone', 'options');
            if ($contact_number):
                ?>
                <a href="<?= $contact_number['url']; ?>"
                   class="text-base font-medium text-white"><?= $contact_number['title']; ?></a>
            <?php endif; ?>
        </div>
        <ul class="flex flex-col">
            <?php if (have_rows('nav_repeater', 'options')): ?>
                <?php while (have_rows('nav_repeater', 'options')): the_row(); ?>
                    <?php if (get_sub_field('if_sub_menu')): ?>
                        <li class="relative p-[5px]">
                            <a href="javascript:void(0)"
                               class="flex items-center justify-between text-base font-medium text-white group"
                               role="button">
                                <?php echo esc_html(get_sub_field('nav_link')['title']); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" fill="none"
                                     class="ml-2 transition-transform duration-300 ease-in-out transform">
                                    <path d="M6 5.8335L0.803849 0.833496L11.1962 0.833497L6 5.8335Z" fill="white"/>
                                </svg>
                            </a>
                            <ul class="dropdown-content hidden relative bg-blue w-52 shadow-lg mt-2">
                                <?php while (have_rows('sub_menu_repeater', 'options')): the_row(); ?>
                                    <?php if (get_sub_field('right_sub_menu')): ?>
                                        <li class="relative">
                                            <a href="javascript:void(0)"
                                               class="flex items-center justify-between py-3.5 px-3 hover:bg-green text-white group"
                                               role="button">
                                                <?php echo esc_html(get_sub_field('sub_menu_link')['title']); ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="12"
                                                     fill="none"
                                                     class="ml-2 transition-transform duration-300 ease-in-out transform">
                                                    <path d="M5 6L0 11.1962L0 0.803848L5 6Z" fill="white"/>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-content hidden relative bg-blue w-52 shadow-lg ml-2 transition-transform duration-300 ease-in-out">
                                                <?php while (have_rows('right_menu_repeater', 'options')): the_row(); ?>
                                                    <li class="relative">
                                                        <a href="<?php echo esc_url(get_sub_field('right_menu_link')['url']); ?>"
                                                           class="block py-3.5 px-3 hover:bg-green text-white">
                                                            <?php echo esc_html(get_sub_field('right_menu_link')['title']); ?>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?php echo esc_url(get_sub_field('sub_menu_link')['url']); ?>"
                                               class="block py-3.5 px-3 hover:bg-green text-white">
                                                <?php echo esc_html(get_sub_field('sub_menu_link')['title']); ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="p-[5px]">
                            <a href="<?php echo esc_url(get_sub_field('nav_link')['url']); ?>"
                               class="text-base font-medium text-white">
                                <?php echo esc_html(get_sub_field('nav_link')['title']); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</header>







