<?php
/* Template Name: Blog Page */

get_header();
?>

<div class="container mt-5 mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-7xl">
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-6">Blogs</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        // Arguments for WP_Query to fetch 'projects' category posts
        $args = array(
            'category_name' => 'blog', // Fetch posts from 'projects' category
            'posts_per_page' => -1, // Retrieve all posts
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $categories = get_the_category();
                $badges = [];

                // Collect badges (keywords) from categories
                foreach ($categories as $category) {
                    $badges[] = $category->name;
                }
                ?>
                <!-- Project Card -->
                <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <!-- Featured Image -->
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="w-full h-48 object-cover rounded-t-lg" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <div class="w-full h-48 bg-gray-300 flex items-center justify-center rounded-t-lg">
                                <span class="text-gray-500 dark:text-gray-400">No Image</span>
                            </div>
                        <?php endif; ?>
                    </a>

                    <div class="p-4">
                        <!-- Post Title -->
                        <a href="<?php the_permalink(); ?>" class="text-lg font-semibold text-gray-800 dark:text-white hover:underline">
                            <?php the_title(); ?>
                        </a>

                        <!-- Badges -->
                        <div class="mt-2 flex flex-wrap gap-2">
                            <?php foreach ($badges as $badge) : ?>
                                <span class="px-2 py-1 text-xs font-medium text-white bg-blue-500 rounded dark:bg-blue-600">
                                <?php echo esc_html($badge); ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        else :
            ?>
            <!-- No Projects Found -->
            <div class="col-span-full text-center">
                <p class="text-gray-500 dark:text-gray-400">No blog found.</p>
            </div>
        <?php
        endif;

        // Restore original post data
        wp_reset_postdata();
        ?>
    </div>
</div>

</main>

<?php
get_footer();