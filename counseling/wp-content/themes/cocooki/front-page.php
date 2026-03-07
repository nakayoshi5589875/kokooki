<?php get_header(); ?>

<div id="primary" class="">
	<main id="main" class="">
		<div class="p-kv">
			<div class="p-kv__main">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv-sp.webp" media="(max-width: 768px)" type="image/webp" />
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv-sp.png" media="(max-width: 768px)" alt="">
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv.png" alt="">
				</picture>
			</div>
			<div class="p-kv__main__deco01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco01.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco01.png" alt="">
				</picture>
			</div>
		</div>

		<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/page/content', 'front-page' );
				endwhile;
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;
		?>

		<?php
			if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) :
				$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
				global $twentyseventeencounter;

				for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
					$twentyseventeencounter = $i;
					twentyseventeen_front_page_section( null, $i );
				}
			endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
