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
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile; // End the loop.
			?>
			<div class="p-article__links">
				<div class="p-article__links__prev">
					<?php previous_post_link('&laquo; %link', '前の記事'); ?>
				</div>
				<div class="p-article__links__next">
					<?php next_post_link('%link &raquo;', '次の記事'); ?>
				</div>
			</div>

			<?php
				// 関連記事取得
				$categories = get_the_category();
				$category_ID = array();
				foreach($categories as $category):
					array_push( $category_ID, $category -> cat_ID);
				endforeach ;
				$args = array(
					'post__not_in' => array($post -> ID),
					'posts_per_page'=> 3,
					'category__in' => $category_ID,
					'orderby' => 'rand',
				);
				$query = new WP_Query($args); 
			?>
			<h3 class="p-archive__smalltitle">■関連記事</h3>
			<div class="p-archive__container">
				<?php if( $query -> have_posts() ): while ($query -> have_posts()): $query -> the_post(); ?>
					<?php get_template_part( 'template-parts/post/content-archive', get_post_format() );?>
				<?php endwhile; else:?>
				<?php endif; ?>
			</div>

			<?php wp_reset_postdata(); ?>
		</div>
		<div class="l-side">
			<?php get_sidebar(); ?>
		</div>
	
	</main><!-- #main -->
</div><!-- .wrap -->

<?php
get_footer();
