<?php get_header(); ?>

<div class="wrap">

	<div class="p-article__head">
		<h2 class="p-article__head__title">
			おき楽ニュース
		</h2>
		<div class="p-article__head__subtext">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/news_text.webp" type="image/webp" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news_text.png" alt="Program">
			</picture>
		</div>
	</div>
	<ul class="p-article__tags">
		<?php
			$categories = get_categories();
			foreach($categories as $category):
				echo '<li class="p-article__tags__button"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
			endforeach;
		?>
	</ul>

	<main id="main" class="l-wrap l-separate">
		<div class="l-main">
			<div class="p-archive__container">
				<?php
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/post/content-archive', get_post_format() );

						endwhile; // End the loop.

						the_posts_pagination(
							array(
								/* translators: Hidden accessibility text. */
								'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
								/* translators: Hidden accessibility text. */
								'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
								/* translators: Hidden accessibility text. */
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
							)
						);

					else :
						?>

						<p><?php _e( 'お探しのページは見つかりませんでした'); ?></p>
						<?php

					endif;
				?>
			</div>
		</div>
		<div class="l-side">
			<?php get_sidebar(); ?>
		</div>
	</main>

</div><!-- .wrap -->

<?php
get_footer();
