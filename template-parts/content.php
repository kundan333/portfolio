<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		// if ( is_singular() ) :
		// 	the_title( '<h1 class="entry-title">', '</h1>' );
		// else :
		// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;

//		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
//				portfolio_posted_on();
//				portfolio_posted_by();
				?>
			</div><!-- .entry-meta -->
<!--		--><?php //endif; ?>
	</header><!-- .entry-header -->

<!--	--><?php //portfolio_post_thumbnail(); ?>

	<div class="entry-content">

        <div class="container mt-5 mx-auto p-6 bg-white dark:bg-gray-800 dark:text-white rounded-lg shadow-lg md:flex md:space-x-10 max-w-7xl">
            <div class="flex flex-col justify-between text-center md:text-left space-y-4 md:space-y-6">
		
		<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
		?>

<hr >

        <?php


		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'portfolio' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

//		wp_link_pages(
//			array(
//				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio' ),
//				'after'  => '</div>',
//			)
//		);
		?>
            </div>
        </div>
	</div>

    <!-- .entry-content -->

	<footer class="entry-footer">
<!--		--><?php //portfolio_entry_footer(); ?>
	</footer>

    <!-- .entry-footer -->
</article>

<!-- #post-
<?php //the_ID(); ?>
-->
