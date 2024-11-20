<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header();
?>




	<main id="primary" class="site-main">

        <div class="container mt-8 mx-auto p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg md:flex md:space-x-10 max-w-7xl h-auto md:h-[500px]">
            <!-- Section 1: Introduction -->
            <div class="md:w-1/2 flex flex-col justify-between text-center md:text-left space-y-4 md:space-y-6">
                <div>
                    <h1 class="text-7xl font-bold text-gray-800 dark:text-gray-100">Hi there!</h1>
                    <h2 class="text-7xl font-semibold text-blue-600 dark:text-blue-400">I'm Kundan</h2>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mt-6">
                        I'm a full-stack PHP, WordPress, and Flutter developer.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mt-2">
                        I make Web and mobile apps.
                    </p>
                </div>
                <div class="flex justify-center md:justify-start space-x-4 mt-5">
                    <a href="#contact" class="bg-blue-600 dark:bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">
                        Contact
                    </a>
                    <a href="#services" class="bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 font-semibold py-2 px-4 rounded-lg hover:bg-gray-400 dark:hover:bg-gray-600">
                        Services
                    </a>
                </div>
            </div>

            <!-- Section 2: YouTube Introduction Video -->
            <div class="md:w-1/2 mt-8 md:mt-0">
                <div class="flex-1 h-full">
                    <div class="rounded-lg shadow-lg aspect-w-16 aspect-h-9 w-full h-full">
                        <iframe class="rounded-lg shadow-lg w-full h-full" src="https://www.youtube.com/embed/9ELS_Icvjbk"
                                title="Video intro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg md:flex md:flex-col space-y-6 max-w-7xl">
            <!-- Services Heading -->
            <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Services</h2>

            <!-- Skills Section -->
            <div class="space-y-4">
                <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 text-center">Skills I have</h3>
                <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-8 gap-6 justify-items-center items-center">

                        <!-- Skill Logos -->
                        <div class="group relative dark:bg-white shadow-md rounded-md justify-center items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/php.svg" alt="PHP" class="p-2 w-16 h-16 filter grayscale hover:grayscale-0 transition duration-300">
                            <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 dark:bg-gray-900 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">PHP</span>
                        </div>

                    <div class="group relative dark:bg-white shadow-md rounded-md justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress-icon.svg" alt="WordPress" class=" p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">WordPress</span>
                    </div>
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flutter.svg" alt="Flutter" class=" p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Flutter</span>
                    </div>
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mysql-logo-pure.svg" alt="SQL" class=" p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">SQL</span>
                    </div>

                    <!-- Zend/Laminas -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/laminas.svg" alt="Zend/Laminas" class="p-2 w-16 h-16 fill-gray-800 dark:fill-gray-200 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 dark:bg-gray-900 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Zend/Laminas</span>
                    </div>

                    <!-- Laravel -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/laravel.svg" alt="Laravel" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Laravel</span>
                    </div>

                    <!-- Redis -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/redis.svg" alt="Redis" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Redis</span>
                    </div>

                    <!-- Git -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/git.svg" alt="Git" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Git</span>
                    </div>

                    <!-- REST API -->
<!--                    <div class="group relative dark:bg-white shadow-md rounded-md">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/rest-api.svg" alt="REST API" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">-->
<!--                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">REST API</span>-->
<!--                    </div>-->

                    <!-- Docker -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/docker.svg" alt="Docker" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Docker</span>
                    </div>

                    <!-- AWS -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aws.svg" alt="AWS" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">AWS</span>
                    </div>

                    <!-- WooCommerce -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/woocommerce.svg" alt="WooCommerce" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">WooCommerce</span>
                    </div>

                    <!-- Node.js -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nodejs.svg" alt="Node.js" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Node.js</span>
                    </div>

                    <!-- JIRA -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jira.svg" alt="JIRA" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">JIRA</span>
                    </div>

                    <!-- HTML -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/html.svg" alt="HTML" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">HTML</span>
                    </div>

                    <!-- CSS -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/css.svg" alt="CSS" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">CSS</span>
                    </div>

                    <!-- JavaScript -->
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/javascript.svg" alt="JavaScript" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">JavaScript</span>
                    </div>

                </div>
            </div>

            <!-- Tools Section -->
            <div class="space-y-4 ">
                <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 text-center">Tools I use</h3>
                <div class=" grid grid-cols-3  md:grid-cols-4 lg:grid-cols-4 gap-6 justify-items-center items-center">
                    <!-- Tool Logos -->
                    <div class="group relative dark:bg-white shadow-md rounded-md ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phpstorm.svg" alt="PHPStorm" class=" p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">PHPStorm</span>
                    </div>
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/postman.svg" alt="Postman" class=" p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Postman</span>
                    </div>
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual-studio-code.svg" alt="VS Code" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">VS Code</span>
                    </div>
                    <div class="group relative dark:bg-white shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/android.svg" alt="Android Studio" class="p-2 w-16 h-16 text-gray-800 filter grayscale hover:grayscale-0 transition duration-300">
                        <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-gray-700 text-white text-sm rounded px-2 py-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Android Studio</span>
                    </div>
                </div>
            </div>


            <!-- Buttons -->
            <div class="flex space-x-4 mt-6">
                <a href="#services" class="bg-blue-500 dark:bg-blue-700 !text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 dark:hover:bg-blue-800 transition duration-300">View Services</a>
                <a href="#projects" class="bg-gray-500 dark:bg-gray-700 text-white font-semibold py-2 px-4 rounded hover:bg-gray-600 dark:hover:bg-gray-800 transition duration-300">View Projects</a>
            </div>
        </div>





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


        <?php
//		if ( have_posts() ) :
//
//			if ( is_home() && ! is_front_page() ) :
//				?>
<!--				<header>-->
<!--					<h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
<!--				</header>-->
<!--				--><?php
//			endif;
//
//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//
//				/*
//				 * Include the Post-Type-specific template for the content.
//				 * If you want to override this in a child theme, then include a file
//				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content', get_post_type() );
//
//			endwhile;
//
//			the_posts_navigation();
//
//		else :
//
//			get_template_part( 'template-parts/content', 'none' );
//
//		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
