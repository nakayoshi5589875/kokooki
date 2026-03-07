	<div id="contact" class="p-contact"> 
		<p class="p-contact__lead">ココロの健康とあなたらしい働き方を目指して、<br class="u-sp">復職・再就職をサポートします。</p>
		<p class="p-contact__message">お問合せ・見学いつでもお気軽に♪</p>
		<div class="p-contact__link">
			<a href="tel:098-917-4565" class="p-contact__button">お電話</a>
			<a href="https://page.line.me/?accountId=283aqhmd" tatget="_blank" class="p-contact__button" target="_blank">公式LINE</a>
		</div>
		<p class="p-contact__time">10:00-16:00［月〜金］</p>
	</div>
	<div class="p-contactform">
		<h2 class="p-contactform__title">
			メールでのお問い合わせ
		</h2>
		<div class="u-mt30">
			<?php echo do_shortcode('[contact-form-7 id="f7bc837" title="コンタクトフォーム 1"]'); ?>
		</div>
	</div>
	<footer class="p-footer">
		<div class="p-footer__container">
			<div class="p-footer__details">
				<h2 class="p-footer__logo">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
					</picture>	
				</h2>
				<div class="u-sp p-footer__phot">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/footer_phot.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_phot.jpg" alt="">
					</picture>
				</div>
				<p class="p-footer__text">〒903-0807<br>那覇市首里久場川町2-152-25（2F）</p>
				<p class="p-footer__text">TEL.<strong>098-917-4565</strong></p>
				<p class="p-footer__text">FAX.<strong>098-917-4566</strong></p>
				<p class="p-footer__text">Mail : contact@kokorookiraku.com</p>
			</div>
			<div class="u-pc p-footer__phot">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/footer_phot.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_phot.jpg" alt="">
				</picture>
			</div>
			<div class="p-footer__map">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/footer_map.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_map.png" alt="">
				</picture>
			</div>
		</div>
		<small class="p-footer__copy">Copyright© ️2023 ココロおき楽 All Rights Reserved.</small>
	</footer>
</div>
<?php wp_footer(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>
</html>
