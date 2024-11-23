<?php
/* Template Name: Service Page */

get_header();
?>

    <main id="primary" class="site-main">

        <div class="container mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-7xl md:flex md:items-start md:space-x-6">

            <!-- Section 1: Text Content -->
            <div class="md:w-1/2 flex flex-col justify-between h-full space-y-6">
                <!-- Heading at the top -->
                <h2 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Full Stack PHP and WordPress</h2>

                <!-- Description in the middle -->
                <p class="text-lg text-gray-700 dark:text-gray-300">
                    I have over 9 years of experience in PHP and web development.
                    I am top-rated and have a 100% success score on Upwork. I only choose the projects in which I can excel.
                </p>

                <!-- Buttons at the bottom -->
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#services" class="link-btn-primary">View Case Study</a>
                    <a href="#projects" class="link-btn-secondary">View Projects</a>
                </div>
            </div>

            <!-- Section 2: Image -->
            <div class="md:w-1/2 mt-6 md:mt-0">
                <div class="rounded-lg shadow-lg overflow-hidden">
                    <img class="rounded-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/upwork_profile.png" alt="image description">
                </div>
            </div>

        </div>

        <?php get_template_part('template-parts/client-reviews'); ?>


    </main>

<?php
get_footer();