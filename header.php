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

        $attributes = 'class="rounded-md px-3 py-2 text-lg font-medium text-gray-500 hover:bg-gray-700 hover:text-white"'; // Add custom class to <a>
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
<html <?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('dark:bg-gray-900'); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

    <header id="masthead" class="site-header text-gray-900 shadow-md">

        <nav class="">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <!-- Mobile Menu Button -->
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Site Branding -->
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="site-branding flex-shrink-0">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold !text-gray-900 dark:!text-gray-100 hover:!text-gray-600">
                                <?php bloginfo('name'); ?>
                            </a>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="hidden sm:ml-6 sm:flex w-full justify-around items-center">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'portfolio',
                            'menu_id' => 'portfolio',
                            'container' => false,
                            'menu_class' => 'flex justify-center items-center',
                            'walker' => new Custom_Nav_Walker_Desktop(),
                        ]);
                        ?>
                    </div>

                    <!-- Dark Mode Toggle -->
                    <div class="ml-auto">
                        <button id="theme-toggle" type="button" class="flex items-center justify-center text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path>
                            </svg>
                        </button>
                    </div>
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