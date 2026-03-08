<?php get_header(); ?>

<main>
  <section class="kv">
    <div class="kv__main">
      <p class="kv__main__text__top">Rework</p>
      <h1 class="js-scrollIn kv__main__text">
        <span>ココロおきなく、</span>
        <span>あなたらしく、</span>
        <span>はたらく。</span>
      </h1>
      <div class="js-scrollIn u-fadeUp kv__main__caption">
        ココロの不調や働くことが不安なあなたの<br>
        <strong>復職・再就職を<br>サポートします。</strong>
        わたしたち「リワーク&カウンセリングステーション ココロおき楽」は、<br>
        心理師と看護師が立ち上げた「民間リワーク施設」です。<br>
        ココロの不調で働くことが不安な方の「復職・再就職のサポート」をしています。<br>
        ココロの不調を繰り返さないために、<br>
        ご自身のココロと向き合いながら、あなたらしさを育てて、社会復帰を目指します。
      </div>
    </div>
    <p class="kv__suText">Counseling station</p>
    <p class="kv__deco"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco01.png" alt=""></p>
    <p class="kv__deco02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco02.png" alt=""></p>
  </section>

  <section class="about">
    <p class="about__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about01.jpg" alt=""></p>
    <div class="about__main">
      <h2 class="js-scrollIn u-fadeUp about__title">心理師と看護師が<br class="sp">立ち上げた<br>民間リワーク施設です。</h2>
      <div class="js-scrollIn u-fadeUp about__text">
        リワークとは「return to work」の略語です。一般的には「休職している労働者に対し、職場復帰に向けたリハビリテーション」と言われています。<br>
        民間リワークの場合は、現在就労していない方でも次の就労に向けて利用が可能です。希望者には医療機関や職場との連絡業務、就職後のサポートも行います。連携している企業があるため、実習先で就職することも可能です。精神面、健康面では看護師がサポートします。<br>
        症状の早期発見、日々の健康チェックをすることで生活のリズムを崩すことなく社会復帰できるようにフォローします。国家資格をもったスタッフが多数在籍しており、それぞれの専門的な観点から利用者のみなさまをサポートします。
      </div>
    </div>
  </section>

  <section class="program">
    <div class="program_lead">
      <small class="program_headline_sub">Program</small>
      <h2 class="program_headline">専門家による<br class="pc">効果的<br class="sp">かつ<br class="pc">個人に合わせた<br>プログラムと支援</h2>
      <a href="/rework_shuri/staff/" class="program_link pc">ココロおき楽の専門スタッフ</a>
    </div>
    <div class="program_main">
      <dl class="js-scrollIn u-fadeUp program_define">
        <dt class="program_term">カウンセリング</dt>
        <dd class="program_details">メンタルヘルスについて、定期的に<br class="sp">ココロの整理をサポートします</dd>
      </dl>
      <dl class="js-scrollIn u-fadeUp program_define">
        <dt class="program_term">ちょこっとバイト</dt>
        <dd class="program_details">リワークに専念するために、仕事の体力をつけることや金銭的な負担軽減のために提携企業でお仕事ができます</dd>
      </dl>
      <dl class="js-scrollIn u-fadeUp program_define">
        <dt class="program_term">認知行動療法</dt>
        <dd class="program_details">メンタルヘルスの回復のために推奨されている認知行動療法を専門家から身につけます</dd>
      </dl>
      <dl class="js-scrollIn u-fadeUp program_define">
        <dt class="program_term">心理教育</dt>
        <dd class="program_details">ココロの問題について<br class="sp">看護師と心理師から学びます</dd>
      </dl>
      <dl class="js-scrollIn u-fadeUp program_define">
        <dt class="program_term">運動プログラム</dt>
        <dd class="program_details">卓球・バレーボール・バドミントン etc.</dd>
      </dl>
      <a href="/rework_shuri/staff/" class="program_link sp">ココロおき楽の専門スタッフ</a>
    </div>
  </section>

  <section class="blog">
    <div class="blog__top">
      <h2 class="c-headline">
        <span class="c-headline__ja">お知らせ</span>
        <span class="c-headline__en">Blog</span>
      </h2>
    </div>
    <div class="blog__wrap">
      <div class="blog__controller">
        <p class="js-splide_arrowLeft blog__controller__left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow_right-black.svg" alt=""></p>
        <p class="js-splide_count blog__controller__count"></p>
        <p class="js-splide_arrowRight blog__controller__right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow_right-black.svg" alt=""></p>
      </div>
      <div class="splide blog__container" aria-label="ブログのカルーセル">
        <div class="splide__track blog__track">
          <div class="splide__list">
            <?php
              $popular_args = array(
                'post_type'       => 'news',
                'order'           => 'DESC',
                'post_status'     => 'publish',
                'posts_per_page'  => 5,
              );
              $popular_query = new WP_Query( $popular_args );

              if( $popular_query->have_posts() ):
              ?>
              <?php while( $popular_query->have_posts() ) : $popular_query->the_post(); ?>
                <a class="splide__slide blog__box" href="<?php the_permalink(); ?>">
                  <div class="blog__box__top">
                    <p class="blog__box__image">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail')); ?>" alt="">
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb.png" alt="">
                      <?php endif; ?>
                    </p>
                    <p class="blog__box__date"><?php the_time("Y/m/d"); ?></p>
                  </div>
                  <p class="blog__box__text"><?php the_title(); ?></p>
                </a>
              <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
      
    </div>
    <div class="blog__bottom">
      <a href="<?php echo get_post_type_archive_link( 'news' ); ?>" class="blog__button">
        <p class="blog__button__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow_right.svg" alt=""></p>
        もっと見る
      </a>
    </div>
  </section>



  <section class="yumtaku">
    <h2 class="yumtaku__text">Yumtaku Time</h2>
    <div class="yumtaku__image">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/yumtaku_image-sp.jpg" media="(max-width: 768px)">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yumtaku_image.jpg" alt="">
    </picture>
    </div>
    <p class="yumtaku__deco01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco06.png" alt=""></p>
    <p class="yumtaku__deco02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco07.png" alt=""></p>
  </section>
  
  <section class="flow">
    <div class="flow__top">
      <h2 class="flow__headline">
        <span class="flow__headline__ja">ご利用までの流れ</span>
        <span class="flow__headline__en">Flow</span>
      </h2>
      <p class="flow__text">現在の状況や考えをお伺いし、一人ひとり丁寧に面談します。<br>個別相談ですので安心してお越し下さい。</p>
    </div>
    <ol class="flow__container">
      <li class="js-scrollIn u-fadeUp flow__step">
        <p class="flow__step__step">STEP1</p>
        <p class="flow__step__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow01.png" alt=""></p>
        <p class="flow__step__text">お問い合わせ・<br>見学のご予約</p>
      </li>
      <li class="js-scrollIn u-fadeUp flow__step">
        <p class="flow__step__step">STEP2</p>
        <p class="flow__step__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow02.png" alt=""></p>
        <p class="flow__step__text">ご利用相談・<br>見学・体験</p>
      </li>
      <li class="js-scrollIn u-fadeUp flow__step">
        <p class="flow__step__step">STEP3</p>
        <p class="flow__step__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow03.png" alt=""></p>
        <p class="flow__step__text">受給者証の<br>申請・発行</p>
      </li>
      <li class="js-scrollIn u-fadeUp flow__step">
        <p class="flow__step__step">STEP4</p>
        <p class="flow__step__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow04.png" alt=""></p>
        <p class="flow__step__text">ご利用契約</p>
      </li>
      <li class="js-scrollIn u-fadeUp flow__step">
        <p class="flow__step__step">STEP5</p>
        <p class="flow__step__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow05.png" alt=""></p>
        <p class="flow__step__text">ご利用スタート</p>
      </li>
    </ol>  
  </section>

  <section class="js-scrollIn u-fadeUp price">
    <div class="price__box--m">
      <h2 class="price__headline">
        <span class="price__headline__ja">料金</span>
        <span class="price__headline__en">Price</span>
      </h2>
      <p class="price__text">利用料金は、前年度の本人と配偶者の所得により自己負担金額が異なります。収入金額によっては、自己負担額が0円となり、無料で通われている方もいらっしゃいます。</p>
      <strong class="price__text--attention">［相談・見学無料］</strong>
    </div>
    <div class="price__box--s">
      <p class="price__text--large">1か月の<br class="pc">自己負担額<br class="pc">上限額</p>
      <small class="price__notes">（※1）3人世帯で障害者基礎年金1級受給の場合、収入が概ね300万円以下の世帯</small>
      <small class="price__notes">（※2）収入がおおむね600万円以下の世帯が対象</small>
    </div>
    <div class="price__box--l">
      <dl class="price__define">
        <dt class="price__term">前年度の世帯年収</dt>
        <dd class="price__details">1か月の自己<br class="sp">負担限度額</dd>
      </dl>
      <dl class="price__define">
        <dt class="price__term">生活保護受給世帯</dt>
        <dd class="price__details">0円</dd>
      </dl>
      <dl class="price__define">
        <dt class="price__term">市町村民税非課税世帯（※1）</dt>
        <dd class="price__details">0円</dd>
      </dl>
      <dl class="price__define">
        <dt class="price__term">市町村民税課税世帯（※2）</dt>
        <dd class="price__details">9,300円</dd>
      </dl>
      <dl class="price__define">
        <dt class="price__term">上記以外</dt>
        <dd class="price__details">37,200円</dd>
      </dl>
    </div>
  </section>

  <section class="question">
    <h2 class="question__headline">
      <span class="question__headline__ja">よくある質問</span>
      <span class="question__headline__en">Q&A</span>
    </h2>
    <div class="question__main">
      <ol class="question__list">
        <li class="js-scrollIn u-fadeUp question__list__block">
          <p class="question__num">01</p>
          <dl class="question__define">
            <dt class="question__term">どのような方が利用されていますか？</dt>
            <dd class="question__details">18歳から65歳未満の幅広い年齢層の方々で、現在通院中の方が利用されています。医療機関を受診したことがなくても、受診検討されている場合などはぜひご相談ください。</dd>
          </dl>
        </li>
        <li class="js-scrollIn u-fadeUp question__list__block">
          <p class="question__num">02</p>
          <dl class="question__define">
            <dt class="question__term">現在、高等学校もしくは大学に在学中です。利用できますか？</dt>
            <dd class="question__details">大学（4年制大学のほか、短期大学、大学院、高等専門学校を含む）在学中の場合、一定条件を満たすことによってご利用いただけます。在学中でも事業所の見学・体験は可能ですので、お気軽にお問い合わせください。</dd>
          </dl>
        </li>
        <li class="js-scrollIn u-fadeUp question__list__block">
          <p class="question__num">03</p>
          <dl class="question__define">
            <dt class="question__term">障害者手帳は必要ですか？</dt>
            <dd class="question__details">障害者手帳をお持ちでない方でも、定期的通院をしている方や医師の診断があれば、利用可能な場合があります。お住まいの自治体によって判断が異なる場合がありますので、詳細はお問い合わせください。</dd>
          </dl>
        </li>
        <li class="js-scrollIn u-fadeUp question__list__block">
          <p class="question__num">04</p>
          <dl class="question__define">
            <dt class="question__term">現在仕事をしていませんが、どのようなサポートをしてもらえますか？</dt>
            <dd class="question__details">求職中でも利用いただけます。仕事に向けての訓練のペースは人それぞれです。個別のプログラムや課題を提案して、その人にあったサポートをしております。</dd>
          </dl>
        </li>
        <li class="js-scrollIn u-fadeUp question__list__block">
          <p class="question__num">05</p>
          <dl class="question__define">
            <dt class="question__term">毎日通わなければいけませんか？<br>定期受診日は休めるでしょうか？</dt>
            <dd class="question__details">定期受診日は休むことは可能です。必要に応じて受診同行も行います。<br>体力面や体調面に不安のある方は、まずは短時間、週◯日から始めて、集団プログラムに入る前に担当との関係性づくりから始めることを提案しています。無理せず、自分にあったペースでリワークに取り組めます</dd>
          </dl>
        </li>
        <li class="js-scrollIn u-fadeUp question__list__block">
          <p class="question__num">06</p>
          <dl class="question__define">
            <dt class="question__term">訪問サービスもありますか？</dt>
            <dd class="question__details">「リワーク＆カウンセリングステーション ココロおき楽」では、どうしても通うことが難しい方を対象にまずは訪問を行い、その後通所して訓練を行うというサービスも提供しております。詳しくはぜひご相談ください。</dd>
          </dl>
        </li>
      </ol>

    </div>
  </section>


</main>

<?php
get_footer();
