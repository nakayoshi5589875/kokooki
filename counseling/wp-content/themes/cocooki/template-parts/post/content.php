
<article id="post-<?php the_ID(); ?>">
	
	<div class="p-article__main">
		<div class="p-article__top">
			<p class="p-article__date"><?php echo get_the_date(); ?></p>
			<div class="p-article__category">
				<?php echo the_category();?>
			</div>
		</div>
	

		<h2 class="p-article__title"><?php the_title(); ?></h2>
		<div class="p-article__content">
			<?php the_content(); ?>
		</div>

		<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
