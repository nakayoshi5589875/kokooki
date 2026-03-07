
<article id="post-<?php the_ID(); ?>">
	<div class="p-archive__box">
		<a href="<?php the_permalink(); ?>"  class="p-archive__image">
			<?php if(has_post_thumbnail()): ?>
				<img src="<?php the_post_thumbnail_url() ?>" alt="">
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/alt.png" alt="">
			<?php endif; ?>
		</a>
		<p class="p-archive__date"><?php echo get_the_date(); ?></p>
		<a href="<?php the_permalink(); ?>"  class="p-archive__title"><?php the_title(); ?></a>
		<div class="p-archive__category">
			<?php echo the_category();?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
