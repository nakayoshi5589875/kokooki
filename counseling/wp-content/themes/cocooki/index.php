<?php get_header(); ?>

<div class="wrap">
	
	<div class="p-kv">
		<div class="p-kv__main">
			<div class="p-kv__main__text">
				<p class="p-kv__main__text__block js-loadIn is-active" data-class="is-active">ココロおきなく、</p>
				<p class="p-kv__main__text__block js-loadIn is-active" data-class="is-active">あなたらしく、</p>
				<p class="p-kv__main__text__block js-loadIn is-active" data-class="is-active">はたらく。</p>
			</div>
			<div class="p-kv__main__iamge">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv-sp.webp" media="(max-width: 768px)" type="image/webp" />
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv-sp.png" media="(max-width: 768px)" alt="">
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv.png" alt="">
				</picture>
			</div>
			<div class="p-kv__main__decoText01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv_text01.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv_text01.png" alt="Rework">
				</picture>
			</div>
			<div class="p-kv__main__decoText02">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kv_text02.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv_text02.png" alt="Counseling station">
				</picture>
			</div>
			<div class="p-kv__main__deco01 js-parallax" data-depth="back01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco01.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco01.png" alt="">
				</picture>
			</div>
			<div class="p-kv__main__deco02 js-parallax" data-depth="back01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco02.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco02.png" alt="">
				</picture>
			</div>
			<div class="p-kv__main__deco03 js-parallax" data-depth="back01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco03.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco03.png" alt="">
				</picture>
			</div>
		</div>

		<div class="p-kv__sub">
			<p class="p-kv__sub__lead js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">ココロの不調や働くことが不安なあなたの</p>
			<h2 class="p-kv__sub__headline js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">復職・再就職を<br class="u-sp">サポートします。</h2>
			<div class="p-kv__sub__text js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				わたしたち「リワーク&カウンセリングステーション ココロおき楽」は、<br>
				心理師と看護師が立ち上げた「民間リワーク施設」です。<br>
				ココロの不調で働くことが不安な方の「復職・再就職のサポート」をしています。<br>
				<br>
				ココロの不調を繰り返さないために、<br>
				ご自身のココロと向き合いながら、あなたらしさを育てて、社会復帰を目指します。<br>
			</div>
		</div>
	</div>

	<div class="p-message">
		<div class="p-message__image">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/message.webp" type="image/webp" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/message.png" alt="">
			</picture>
		</div>
		<div class="p-message__main">
			<h2 class="p-message__headline js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">心理師と看護師が<br class="u-sp">立ち上げた<br>民間リワーク施設です。</h2>
			<div class="p-message__text js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				リワークとは「return to work」の略語です。一般的には「休職している労働者に対し、職場復帰に向けたリハビリテーション」と言われています。<br>
				民間リワークの場合は、現在就労していない方でも次の就労に向けて利用が可能です。希望者には医療機関や職場との連絡業務、就職後のサポートも行います。連携している企業があるため、実習先で就職することも可能です。精神面、健康面では看護師がサポートします。<br>
				症状の早期発見、日々の健康チェックをすることで生活のリズムを崩すことなく社会復帰できるようにフォローします。国家資格をもったスタッフが多数在籍しており、それぞれの専門的な観点から利用者のみなさまをサポートします。
			</div>
		</div>
	</div>

	<div class="p-program">
		<div class="p-program__main">
			<h2 class="p-program__lead">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ptogram_text.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ptogram_text.png" alt="Program">
				</picture>
			</h2>
			<div class="p-program__text">
				専門家による<br class="u-pc">効果的<br class="u-sp">かつ<br class="u-pc">個人に合わせた<br>プログラムと支援
			</div>
			<a href="<?php echo home_url("/"); ?>/staff/" class="u-pc c-link01">
				<div class="c-link01__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_link.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_link.png" alt="">
					</picture>
				</div>
				ココロおき楽の専門スタッフ
			</a>
		</div>
		<ul class="p-program__list">
			<li class="p-program__list__block js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				<h4 class="p-program__list__headline">カウンセリング</h4>
				<p class="p-program__list__text">男性・女性の心理師在籍しており、<br class="u-sp">問題課題の整理を手伝います</p>
			</li>
			<li class="p-program__list__block js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				<h4 class="p-program__list__headline">心理検査</h4>
				<p class="p-program__list__text">知能検査などで客観的な得意不得意の振り返り、自分に合った仕事の理解に繋げます</p>
			</li>
			<li class="p-program__list__block js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				<h4 class="p-program__list__headline">認知行動療法</h4>
				<p class="p-program__list__text">症状別対応やストレス対処などを学びます</p>
			</li>
			<li class="p-program__list__block js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				<h4 class="p-program__list__headline">心理教育</h4>
				<p class="p-program__list__text">ココロの問題について<br class="u-sp">看護師と心理師から学びます</p>
			</li>
			<li class="p-program__list__block js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
				<h4 class="p-program__list__headline">運動プログラム</h4>
				<p class="p-program__list__text">卓球・バレーボール・バドミントン etc.</p>
			</li>
		</ul>
		<a href="<?php echo home_url("/"); ?>/staff/" class="u-sp c-link01">
			<div class="c-link01__icon">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_link.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_link.png" alt="">
				</picture>
			</div>
			ココロおき楽の専門スタッフ
		</a>
	</div>

	<div class="js-slideWrap p-blog">
		<div class="p-blog__top">
			<h2 class="p-blog__title">
				お知らせ
				<p class="p-blog__title__sub">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/blog_title.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_title.png" alt="Blog">
					</picture>
				</p>
			</h2>
			<div class="p-blog__controller">
				<div class="js-slider_nav_prev p-blog__controller__arrow">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrow_left.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrow_left.png" alt="">
					</picture>
				</div>
				<p class="js-slider_num p-blog__controller__num">1 / 5</p>
				<div class="js-slider_nav_next p-blog__controller__arrow">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrow_right.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_arrow_right.png" alt="">
					</picture>
				</div>
			</div>
		</div>

		<div class="js-slider p-blog__slider">
			<?php
				if ( have_posts() ) :
					?>
					<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();
			?>
			<div>
				<a href="<?php the_permalink(); ?>" class="p-blog__article">
					<div class="p-blog__article__top">
						<div class="p-blog__article__image">
							<?php if(has_post_thumbnail()): ?>
								<img src="<?php the_post_thumbnail_url() ?>" alt="">
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/alt.png" alt="">
							<?php endif; ?>
						</div>
						<p class="p-blog__article__date"><?php echo get_the_date(); ?></p>
					</div>
					<div class="p-blog__article__text">
						<?php the_title(); ?>
					</div>
				</a>
			</div>
			<?php
					endwhile;
				endif;
			?>
		</div>
		<div class="p-blog__article__more">
			<a href="<?php echo home_url("/"); ?>/news/" class="c-link01">
				<div class="c-link01__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_link.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_link.png" alt="">
					</picture>
				</div>
				もっと見る
			</a>
		</div>
		<div class="p-blog__image">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/blog_image.webp" type="image/webp" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_image.png" alt="">
			</picture>
			<div class="p-blog__image__decoText01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/blog_text.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_text.png" alt="Rework">
				</picture>
			</div>
			<div class="p-blog__image__deco01 js-parallax" data-depth="back01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco04.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco04.png" alt="">
				</picture>
			</div>
			<div class="p-blog__image__deco02 js-parallax" data-depth="back01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco05.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco05.png" alt="">
				</picture>
			</div>
			<div class="p-blog__image__deco03 js-parallax" data-depth="back01">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/deco06.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deco06.png" alt="">
				</picture>
			</div>
		</div>
	</div>

	<div class="p-flow">
		<div class="p-flow__top">
			<h2 class="p-flow__title">
				ご利用までの流れ
				<div class="p-flow__title__sub">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/flow_text.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow_text.png" alt="Blog">
					</picture>
				</div>
			</h2>
			<P class="p-flow__lead">現在の状況や考えをお伺いし、一人ひとり丁寧に面談します。<br>個別相談ですので安心してお越し下さい。</p>
		</div>
		<div class="p-flow__step js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
			<div class="p-flow__step__box">
				<p class="p-flow__step__head">STEP 1</p>
				<div class="p-flow__step__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step01.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step01.png" alt="">
					</picture>
				</div>
				<p class="p-flow__step__text">お問い合わせ・<br>見学のご予約</p>
			</div>
			<div class="p-flow__step__box js-scrollIn u-fadeUp u-delay03 is-active" data-class="is-active">
				<p class="p-flow__step__head">STEP 2</p>
				<div class="p-flow__step__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step02.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step02.png" alt="">
					</picture>
				</div>
				<p class="p-flow__step__text">ご利用相談・<br>見学・体験</p>
			</div>
			<div class="p-flow__step__box js-scrollIn u-fadeUp u-delay04 is-active" data-class="is-active">
				<p class="p-flow__step__head">STEP 3</p>
				<div class="p-flow__step__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step03.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step03.png" alt="">
					</picture>
				</div>
				<p class="p-flow__step__text">受給者証の<br>申請・発行</p>
			</div>
			<div class="p-flow__step__box js-scrollIn u-fadeUp u-delay05 is-active" data-class="is-active">
				<p class="p-flow__step__head">STEP 4</p>
				<div class="p-flow__step__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step04.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step04.png" alt="">
					</picture>
				</div>
				<p class="p-flow__step__text">ご利用契約</p>
			</div>
			<div class="p-flow__step__box js-scrollIn u-fadeUp u-delay06 is-active" data-class="is-active">
				<p class="p-flow__step__head">STEP 5</p>
				<div class="p-flow__step__icon">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step05.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_step05.png" alt="">
					</picture>
				</div>
				<p class="p-flow__step__text">ご利用スタート</p>
			</div>
		</div>
	</div>

	<div class="p-price js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
		<div class="p-price__box">
			<h2 class="p-price__title">
				料金
				<div class="p-price__title__sub">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/price_text.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/price_text.png" alt="Price">
					</picture>
				</div>
			</h2>
			<p class="p-price__text">利用料金は、前年度の本人と配偶者の所得により自己負担金額が異なります。収入金額によっては、自己負担額が0円となり、無料で通われている方もいらっしゃいます。<br>［相談・見学無料］</p>
		</div>
		<div class="p-price__box">
			<p class="p-price__head">1か月の<br class="u-pc">自己負担額<br class="u-pc">上限額</p>
			<p class="p-price__text">（※1）3人世帯で障害者基礎年金1級受給の場合、収入が概ね300万円以下の世帯<br>（※2）収入がおおむね600万円以下の世帯が対象</p>
		</div>
		<div class="p-price__list">
			<li class="p-price__row">
				<p class="p-price__define">前年度の世帯年収</p>
				<p class="p-price__num">1か月の自己負担<br class="u-sp">限度額</p>
			</li>
			<li class="p-price__row">
				<p class="p-price__define">生活保護受給世帯</p>
				<p class="p-price__num">0<small>円</small></p>
			</li>
			<li class="p-price__row">
				<p class="p-price__define">市町村民税非課税世帯</p>
				<p class="p-price__num">0<small>円</small></p>
			</li>
			<li class="p-price__row">
				<p class="p-price__define">市町村民税課税世帯（※2）</p>
				<p class="p-price__num">9,300<small>円</small></p>
			</li>
			<li class="p-price__row">
				<p class="p-price__define">上記以外</p>
				<p class="p-price__num">37,200<small>円</small></p>
			</li>
		</div>
	</div>

	<div class="p-question">
		<div class="p-question__box">
			<h2 class="p-question__title">
				よくある質問
				<div class="p-question__title__sub">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/qa_text.webp" type="image/webp" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/qa_text.png" alt="Q&A">
					</picture>
				</div>
			</h2>
			<ul class="p-question__list">
				<li class="p-question__row js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
					<p class="p-question__num">01</p>
					<p class="p-question__head">どのような方が利用されていますか？</p>
					<p class="p-question__detailes">18歳から65歳未満の幅広い年齢層の方々で、現在通院中の方が利用されています。医療機関を受診したことがなくても、受診検討されている場合などはぜひご相談ください。</p>
				</li>
				<li class="p-question__row js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
					<p class="p-question__num">02</p>
					<p class="p-question__head">現在、高等学校もしくは大学に在学中です。利用できますか？</p>
					<p class="p-question__detailes">大学（4年制大学のほか、短期大学、大学院、高等専門学校を含む）在学中の場合、一定条件を満たすことによってご利用いただけます。在学中でも事業所の見学・体験は可能ですので、お気軽にお問い合わせください。</p>
				</li>
				<li class="p-question__row js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
					<p class="p-question__num">03</p>
					<p class="p-question__head">障害者手帳は必要ですか？</p>
					<p class="p-question__detailes">障害者手帳をお持ちでない方でも、定期的通院をしている方や医師の診断があれば、利用可能な場合があります。お住まいの自治体によって判断が異なる場合がありますので、詳細はお問い合わせください。</p>
				</li>
				<li class="p-question__row js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
					<p class="p-question__num">04</p>
					<p class="p-question__head">現在求職中でハローワークから失業給付金を受け取っていますが、利用できますか？</p>
					<p class="p-question__detailes">求職中でも利用いただけます。ただし、当事業所での訓練は求職活動の実績にはなりませんので、両立していただければ問題ありません。ハローワークへ一緒に行くプログラムも用意しています。ご不明な点はお気軽にご相談ください。</p>
				</li>
				<li class="p-question__row js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
					<p class="p-question__num">05</p>
					<p class="p-question__head">毎日通わなければいけませんか？定期受診日は休めるでしょうか？</p>
					<p class="p-question__detailes">体力面や体調面に不安のある方は、週3日からまずは午前のみというように段階的に通っていただけます。また「リワーク＆カウンセリングステーション ココロおき楽」では主治医との連携を大切にしているため、定期受診の日はお休みしていただいて構いません。</p>
				</li>
				<li class="p-question__row js-scrollIn u-fadeUp u-delay02 is-active" data-class="is-active">
					<p class="p-question__num">06</p>
					<p class="p-question__head">訪問サービスもありますか？</p>
					<p class="p-question__detailes">「リワーク＆カウンセリングステーション ココロおき楽」では、どうしても通うことが難しい方を対象にまずは訪問を行い、その後通所して訓練を行うというサービスも提供しております。詳しくはぜひご相談ください。</p>
				</li>
			</ul>
		</div>
	</div>

</div><!-- .wrap -->

<?php
get_footer();
