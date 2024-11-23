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

<div class="container mt-5 mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg md:flex md:space-x-10 max-w-7xl">

    <!-- Section 1: Introduction -->
    <div class="md:w-1/2 flex flex-col justify-between text-center md:text-left space-y-4 md:space-y-6">
        <div>
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white">About Kundan</h1>

            <p class="text-lg text-gray-700 dark:text-gray-300 mt-6">
                After graduating from IT Gopeshwar with a Bachelor's degree in <b class="dark:text-blue-400">Computer Sciences & Engineering</b> in 2019, Kundan relentlessly pursued a career in <b class="dark:text-blue-400">Full Stack Web Development</b>.
                Since then, he has worked with many companies.
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-300 mt-6">
                Kundan is the <b class="dark:text-blue-400">top-rated</b> PHP freelancer on Upwork, with over $10,000+ earned within a year. He's an expert freelancer in his stream, which represents the <b class="dark:text-blue-400">top 10%</b> of freelancers on Upwork.
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-300 mt-6">
                In his free time, Kundan enjoys the peaceful life in the mountains of <b class="dark:text-blue-400">Himalayan</b> region.
            </p>

        </div>
    </div>

    <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center items-center">
        <div class="w-full h-full flex justify-center">
            <img class="rounded-full shadow-lg w-96 h-96" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_1.jpg" alt="image description">
        </div>
    </div>

</div>


<footer class="mb-0 bg-white dark:bg-gray-800 mt-5 text-gray-800 dark:text-gray-300 py-8" style="box-shadow: inset 0 2px 4px 0 rgba(0,0,0,0.05);">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-end">

            <!-- Footer Logo and Description -->
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h2 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">About this Site</h2>
                <p class="text-gray-600 dark:text-gray-400">I built this website using a custom WordPress theme. The technologies used include HTML, CSS, PHP, and Tailwind CSS.<a href="https://github.com/kundan333/portfolio" target="_blank" class="inline">

</p>
                <p class="text-gray-600 dark:text-gray-400">
                    You can check the source code <img src="<?php echo get_template_directory_uri(); ?>/assets/images/github.svg" alt="GitHub" class="inline p-2 w-8 h-8 filter grayscale hover:grayscale-0 transition duration-300 dark:invert">
                    </a>
                </p>
            </div>

            <!-- Navigation Links -->
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-lg font-semibold mb-3 text-gray-800 dark:text-white">Quick Links</h3>
                <ul>
                    <?php
                    // Replace 'footer-menu' with the actual menu name you've registered in WordPress
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'add_li_class'  => 'mb-2 text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200',
                    ));
                    ?>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="w-full md:w-1/3">
                <h3 class="text-lg font-semibold mb-3 text-gray-800 dark:text-white">Follow Us</h3>
                <div class="flex space-x-4">
                    <!-- Replace # with actual links to your social profiles -->
                    <a href="#" class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <!-- Facebook Icon SVG -->
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <!-- Twitter Icon SVG -->
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <!-- Instagram Icon SVG -->
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="mt-8 border-t border-gray-200 dark:border-gray-600 pt-4 text-center text-gray-600 dark:text-gray-400">
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

<!--</div>-->

<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
