<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */


class Custom_Nav_Walker_Desktop extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = implode(' ', $item->classes); // Get any existing classes
        $output .= '<li class="custom-li-class ' . esc_attr($classes) . '">'; // Add custom class to <li>

        $attributes = 'class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white"'; // Add custom class to <a>
        $output .= '<a ' . $attributes . ' href="' . esc_url($item->url) . '">';
        $output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}

class Custom_Nav_Walker_Mobile extends Walker_Nav_Menu {

    // Skip the <ul> and <li> elements for mobile menu by not outputting start_lvl and end_lvl.
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Do nothing to skip <ul>
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        // Do nothing to skip </ul>
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Append each menu link directly without <li> wrapping
        $output .= sprintf(
            '<a href="%s" class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">%s</a>',
            esc_url($item->url),
            esc_html($item->title)
        );
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        // Do nothing to skip </li>
    }
}


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

    <header id="masthead" class="site-header text-gray-900 shadow-md">

        <nav class="">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!--
                              Icon when menu is closed.

                              Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
                              Icon when menu is open.

                              Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
<!--                        <div class=" mx-auto flex items-center justify-between p-4">-->
                            <!-- Site Branding -->
                            <div class="site-branding flex-shrink-0">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-bold text-gray-900 hover:text-gray-600">
                                    <?php bloginfo( 'name' ); ?>
                                </a>
                            </div>

<!--                        </div>-->

                        <div class="hidden sm:ml-6 sm:block">

                            <?php

                            wp_nav_menu(
                                array(
                                    'theme_location' => 'portfolio',
                                    'menu_id'        => 'portfolio',
                                    'container'      => false,
                                    'menu_class'     => 'flex space-x-4',
//                                    'link_before'    => '<span class="relative text-gray-900 hover:bg-white hover:underline transition-colors px-2 py-1">',
//                                    'link_after'     => '</span>',
                                    'walker'         => new Custom_Nav_Walker_Desktop(), // Optional: use if you have a custom walker for dropdowns
                                )
                            );
                            ?>
                        </div>
                    </div>



<!--                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">-->
<!--                        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">-->
<!--                            <span class="absolute -inset-1.5"></span>-->
<!--                            <span class="sr-only">View notifications</span>-->
<!--                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />-->
<!--                            </svg>-->
<!--                        </button>-->

                        <!-- Profile dropdown -->
<!--                        <div class="relative ml-3">-->
<!--                            <div>-->
<!--                                <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">-->
<!--                                    <span class="absolute -inset-1.5"></span>-->
<!--                                    <span class="sr-only">Open user menu</span>-->
<!--                                    <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">-->
<!--                                </button>-->
<!--                            </div>-->

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
<!--                            <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">-->
                                <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
<!--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>-->
<!--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>-->
<!--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">

                <div class="space-y-1 px-2 pb-3 pt-2">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'portfolio',
                        'menu_id'        => 'portfolio',
                        'container'      => false,
//                        'menu_class'     => 'flex space-x-4',
//                                    'link_before'    => '<span class="relative text-gray-900 hover:bg-white hover:underline transition-colors px-2 py-1">',
//                                    'link_after'     => '</span>',
                        'walker'         => new Custom_Nav_Walker_Mobile(), // Optional: use if you have a custom walker for dropdowns
                    )
                );
                ?>
                </div>

            </div>
        </nav>

    </header><!-- #masthead -->

</div>