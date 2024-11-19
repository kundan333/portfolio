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

        <div class="container mt-8 mx-auto p-6 bg-white rounded-lg shadow-lg md:flex md:space-x-10 max-w-7xl h-[500px]">

            <!-- Section 1: Introduction -->
            <div class="md:w-1/2 flex flex-col justify-between text-center md:text-left space-y-4 md:space-y-6">
                <div>
                    <h1 class="text-7xl font-bold text-gray-800">Hi there!</h1>
                    <h2 class="text-7xl font-semibold text-blue-600">I'm Kundan</h2>
                    <p class="text-lg text-gray-700 mt-6">
                        I'm a full stack PHP, WordPress, and Flutter developer.
                    </p>
                    <p class="text-lg text-gray-700 mt-2">
                        I make Web and mobile apps.
                    </p>
                </div>
                <div class="flex justify-center md:justify-start space-x-4 mt-5">
                    <a href="#contact" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Contact</a>
                    <a href="#services" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-lg hover:bg-gray-400">Services</a>
                </div>
            </div>

            <!-- Section 2: YouTube Introduction Video -->
            <div class="md:w-1/2 mt-8 md:mt-0">
                <div class="w-full h-full">
                    <iframe class="rounded-lg shadow-lg w-full h-full" src="https://www.youtube.com/embed/9ELS_Icvjbk" title="Video intro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>

        <div class="container mt-5 mx-auto p-6 bg-white rounded-lg shadow-lg md:flex md:space-x-10 max-w-7xl ">

            <!-- Section 1: Introduction -->
            <div class="md:w-1/2 flex flex-col justify-between text-center md:text-left space-y-4 md:space-y-6">
                <div>
                    <h1 class="text-4xl font-bold text-gray-800">About kundan</h1>

                    <p class="text-lg text-gray-700 mt-6">
                        After graduating from IT Gopeshwar with a Bachelor's degree in <b>Computer Sciences & Engineering</b> in 2019, Kundan relentlessly pursued a career in <b>Full Stack Web Development</b>.
                        Since then, he has worked with many companies.
                    </p>
                    <p class="text-lg text-gray-700 mt-6">
                        Kundan is the <b>top-rated</b> PHP freelancer on Upwork, with over $10,000+ earned within a year. He's an expert freelancer in his stream, which represents the <b>top 10%</b> of freelancers on Upwork.
                    </p>
                    <p class="text-lg text-gray-700 mt-6">
                        In his free time, Kundan enjoys the peaceful life in the mountains of <b>himalayan</b> region.
                    </p>

                </div>
            </div>


            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center items-center">
                <div class="w-full h-full flex justify-center">
                    <img class="rounded-full w-96 h-96" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_1.jpg" alt="image description">
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
