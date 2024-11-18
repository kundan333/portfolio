<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>


<footer class="bg-white mt-5 text-gray-800 py-8 " style="box-shadow: inset 0 2px 4px 0 rgba(0,0,0,0.05);">
    <div class="container mx-auto px-4 ">
        <div class="flex  flex-wrap justify-end">

            <!-- Footer Logo and Description -->
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h2 class="text-xl font-semibold mb-2">About this Site</h2>
                <p class="text-gray-600">I made this website with custom made wordpress theme. The technology I have used in this are html,css,php,tailwind css.</p>
            </div>

            <!-- Navigation Links -->
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-lg font-semibold mb-3">Quick Links</h3>
                <ul>
                    <?php
                    // Replace 'footer-menu' with the actual menu name you've registered in WordPress
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'add_li_class'  => 'mb-2 text-gray-600 hover:text-gray-800',
                    ));
                    ?>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="w-full md:w-1/3">
                <h3 class="text-lg font-semibold mb-3">Follow Us</h3>
                <div class="flex space-x-4">
                    <!-- Replace # with actual links to your social profiles -->
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <!-- Facebook Icon SVG -->
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <!-- Twitter Icon SVG -->
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <!-- Instagram Icon SVG -->
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="mt-8 border-t border-gray-200 pt-4 text-center text-gray-600">
            <p>&copy; <?php echo date('Y'); ?> Kundankb. All rights reserved.</p>
        </div>
    </div>
</footer>


        <!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?><!--">-->
<!--				--><?php
				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://kundankb.com/">kundankb.com</a>' );
//				?>
<!--		</div>-->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
