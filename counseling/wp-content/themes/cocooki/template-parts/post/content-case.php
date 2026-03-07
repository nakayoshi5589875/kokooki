<article id="post-<?php the_ID(); ?>" class="p-case__article js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
	<div class="p-case__article__inner">
		<div class="p-case__main">
			<?php if(!empty(get_post_meta($post->ID, 'CASE', true))) :?>
				<div class="p-case__num">
					<?php the_field('CASE'); ?>
				</div>
			<?php endif; ?>
			<?php if(!empty(get_post_meta($post->ID, '見出し', true))) :?>
				<div class="p-case__head">
					<pre><?php the_field('見出し'); ?></pre>
				</div>
			<?php endif; ?>
			<?php if(!empty(get_post_meta($post->ID, '名前', true))) :?>
				<div class="p-case__name">
					<?php the_field('名前'); ?>	
				</div>
			<?php endif; ?>
			<?php if(!empty(get_post_meta($post->ID, '画像', true))) :?>
				<div class="u-sp p-case__image">
					<img src="<?php the_field('画像'); ?>" alt="">
				</div>
			<?php endif; ?>
			<?php if(!empty(get_post_meta($post->ID, '本文', true))) :?>
				<div class="p-case__text">
					<pre><?php the_field('本文'); ?></pre>
				</div>
			<?php endif; ?>
		</div>
		<div class="p-case__sub">
			<?php if(!empty(get_post_meta($post->ID, '画像', true))) :?>
				<div class="p-case__image">
					<img src="<?php the_field('画像'); ?>" alt="">
				</div>
			<?php endif; ?>
		</div>
	</div>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
