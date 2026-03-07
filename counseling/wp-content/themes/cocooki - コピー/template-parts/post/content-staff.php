<article id="post-<?php the_ID(); ?>" class="p-staff__article js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
	<div class="p-staff__article__main">
		<?php if(!empty(get_post_meta($post->ID, '写真', true))) :?>
			<div class="p-staff__article__phot">
				<img src="<?php the_field('写真'); ?>" alt="">
			</div>
		<?php endif; ?>
		<?php if(!empty(get_post_meta($post->ID, '役職', true))) :?>
			<div class="p-staff__article__post">
				<?php the_field('役職'); ?>	
			</div>
		<?php endif; ?>
		<?php if(!empty(get_post_meta($post->ID, '名前', true))) :?>
			<div class="p-staff__article__name">
				<?php the_field('名前'); ?>
				<?php if(!empty(get_post_meta($post->ID, '名前', true))) :?>
					<span class="p-staff__article__kana">
						<?php the_field('ふりがな'); ?>
					</span>
				<?php endif; ?>
			</div>
		<?php endif; ?>

	</div>	
	<div class="p-staff__article__details">
		<?php if(!empty(get_post_meta($post->ID, '資格', true))) :?>
			<div class="p-staff__article__row">
				<p class="p-staff__article__head">資格</p>
				<pre class="p-staff__article__text"><?php the_field('資格'); ?></pre>
			</div>
		<?php endif; ?>
		<?php if(!empty(get_post_meta($post->ID, '経歴', true))) :?>
			<div class="p-staff__article__row">
				<p class="p-staff__article__head">経歴</p>
				<pre class="p-staff__article__text"><?php the_field('経歴'); ?></pre>
			</div>
		<?php endif; ?>
		<?php if(!empty(get_post_meta($post->ID, '趣味', true))) :?>
			<div class="p-staff__article__row">
				<p class="p-staff__article__head">趣味</p>
				<pre class="p-staff__article__text"><?php the_field('趣味'); ?></pre>
			</div>
		<?php endif; ?>
		<?php if(!empty(get_post_meta($post->ID, '座右の銘', true))) :?>
			<div class="p-staff__article__row">
				<p class="p-staff__article__head">座右の銘</p>
				<pre class="p-staff__article__text"><?php the_field('座右の銘'); ?></pre>
			</div>
		<?php endif; ?>
		<?php if(!empty(get_post_meta($post->ID, '一言', true))) :?>
			<div class="p-staff__article__row">
				<p class="p-staff__article__head">一言</p>
				<pre class="p-staff__article__text"><?php the_field('一言'); ?></pre>
			</div>
		<?php endif; ?>
	</div>

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
