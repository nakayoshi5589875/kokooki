<?php get_header(); ?>

<div>

	<main id="main">
		<div class="l-wrap">
			<h2 class="c-headline01">
				ご利用事例
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/case_text.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case_text.png" alt="Introduction of staff">
				</picture>
			</h2>
		</div>

		<div class="p-case">
			<?php
			if ( have_posts() ) :
				?>
				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					
					get_template_part( 'template-parts/post/content-case', get_post_format() );

				endwhile;

				the_posts_pagination(
					array(
						'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					)
				);

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
		</div>

	</main><!-- #main -->
</div><!-- .wrap -->

<?php
get_footer();
