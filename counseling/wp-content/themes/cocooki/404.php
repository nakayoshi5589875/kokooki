<?php get_header(); ?>

<main>
  <section class="kv">
    <div class="js-scrollIn u-fadeUp kv__main">
      <h1 class="kv__main__text">こころが軽くなると、<br>世界が少し<br class="sp">明るく見える。</h1>
      <p class="kv__main__caption">認知行動療法で、<br class="sp">“生きづらさ”を“生きやすさ”へ。<br>安心して暮らせる日常への一歩を<br clasS="SP">サポートします。</p>
      <div class="kv__news">
        <h2 class="kv__news__headline">新着情報</h2>
        <div class="kv__news__list">
          <?php
          $args = array(
            'post_type'      => 'news',      // 投稿タイプ（通常の投稿）
            'posts_per_page' => 3,           // 表示件数
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
          );
          $the_query = new WP_Query($args);
          ?>
          <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
          <article>
            <a href="<?php the_permalink(); ?>" class="kv__news__link">
              <p class="kv__news__date"><?php the_date(); ?></p>
              <p class="kv__news__title"><?php the_title(); ?></p>
            </a>
          </article>
          <?php }; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="kv__news__more">
          <a href="<?php echo get_post_type_archive_link( 'news' ); ?>">もっと見る</a>
        </div>
      </div>
    </div>
  </section>

  <section class="service">
    <h2 id="service" class="c-headline">
      <span class="c-headline__ja">ご利用案内</span>
      <span class="c-headline__en">Service</span>
    </h2>
    <div class="service__wrap">
      <section class="service__section">
        <h3 class="service__headline">営業時間</h3>
        <div class="js-scrollIn u-fadeUp service__schedule">
          <div class="service__schedule__notes">
            ※外勤や講演会などため、変更の可能性があります。<br>※時間外も対応可能ですので、お気軽にご相談下さい。
          </div>
          <div class="service__schedule__table">
            <div class="service__schedule__table__head">
              <p class="service__schedule__table__time">時間・曜日</p>
              <p class="service__schedule__table__week">日</p>
              <p class="service__schedule__table__week">月</p>
              <p class="service__schedule__table__week">火</p>
              <p class="service__schedule__table__week">水</p>
              <p class="service__schedule__table__week">木</p>
              <p class="service__schedule__table__week">金</p>
              <p class="service__schedule__table__week">土</p>
              <p class="service__schedule__table__week">祝</p>
            </div>
            <div class="service__schedule__table__row">
              <p class="service__schedule__table__time">09:00〜12:00</p>
              <p class="service__schedule__table__week">○</p>
              <p class="service__schedule__table__week">○</p>
              <p class="service__schedule__table__week">○</p>
              <p class="service__schedule__table__week">○</p>
              <p class="service__schedule__table__week">○</p>
              <p class="service__schedule__table__week">○</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
            </div>
            <div class="service__schedule__table__row">
              <p class="service__schedule__table__time">13:00〜17:00</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
              <p class="service__schedule__table__week">×</p>
            </div>
          </div>
        </div>
      </section>
      <section class="service__section">
        <h3 class="service__headline">カウンセリング料金</h3>
        <div class="service__price">
          <dl class="js-scrollIn u-fadeUp service__price__define">
            <dt class="service__price__term">■対面カウンセリング</dt>
            <dd class="service__price__details">
              <div class="service__price__details__text">
                ココロおき楽では、南風原町のカウンセリングルームでの認知行動療法を中心とした『対面カウンセリング』を実施しております。
              </div>
              <p class="service__price__details__menu">10,000円</p>
            </dd>
          </dl>
          <dl class="js-scrollIn u-fadeUp service__price__define">
            <dt class="service__price__term">■心理検査</dt>
            <dd class="service__price__details">
              <div class="service__price__details__text">
                ココロおき楽では、WAISーⅣとWISCーV、WPPSIーⅢによる心理検査（知能検査）も行っております。複数の市教育委員会から業務委託を受けており、検査経験が豊富です。検査には結果の説明も含め、カウンセリングの枠を2枠取りますので、詳しくはお問い合わせください。
                <small>※『診断』には医療機関の受診が必要です。当施設で情報提供書作成（別途費用）の上、御紹介可能です。</small>
              </div>
              <div class="service__price__details__menu">
                <p class="service__price__details__menu__line">WISCーⅣ・V（5歳～16歳11カ月）<span>15,000円</span></p>
                <p class="service__price__details__menu__line">WAISーⅣ（16歳0カ月～）15,000円<span>15,000円</span></p>
                <p class="service__price__details__menu__line">WPPSIーⅢ（2歳6か月～7歳）<span>15,000円</span></p>
              </div>
            </dd>
          </dl>
          <dl class="js-scrollIn u-fadeUp service__price__define">
            <dt class="service__price__term">■オンライン<br>カウンセリング</dt>
            <dd class="service__price__details">
              <div class="service__price__details__text">
                ZOOMを利用してのオンラインカウンセリングを実施しております。
                <small>※その他必要に応じて以下のような費用が発生する場合があります。　　紹介状の発行2000円 / 1通</small>
              </div>
              <p class="service__price__details__menu">10000円（50分）</p>
            </dd>
          </dl>
          <div class="js-scrollIn u-fadeUp service__price__notes">
            <p class="service__price__notes__headline">※予約の振替・キャンセルについて</p>
            <div class="service__price__notes__text">
              予約は前日までであれば振り替え可能ですが、当日のキャンセルに関してはカウンセリング料金の半額を頂くこととなります。次回に併せて持って来て頂くか、お振り込み頂くことをご了承ください。
              <strong>料金振込先　【琉球銀行　本店営業部（普）1314524　合同会社ココロおき楽　代表社員　芹沢　龍平】</strong>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <section id="counselor" class="counselor">
    <div class="counselor__wrap">
      <h2 class="c-headline">
        <span class="c-headline__ja">カウンセラー紹介</span>
        <span class="c-headline__en">counselor</span>
      </h2>
      <div class="counselor__container">
        <p class="counselor__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/counselor01.jpg" alt=""></p>
        <div class="js-scrollIn u-fadeUp counselor__main">
          <div class="counselor__name">
            <h3 class="counselor__name__ja">脇　龍平</h3>
            <p class="counselor__name__en">Ryohei Waki</p>
          </div>
          <div class="counselor__details">
            <div class="counselor__block">
              <div class="counselor__profile">
                1988年　大阪府　生まれ<br>
                大学時代は北海道で過ごし、2014年に沖縄に来ました。来沖後は、精神科クリニックで勤務し、2018年10月から『ココロおき楽』を開業しております。2022年5月に『合同会社ココロおき楽』を設立し、『カウンセリングスペース　ココロおき楽』（南風原町）と『リワーク＆カウンセリングステーション　ココロおき楽』（民間リワーク施設　at 首里久場川町）の運営をしています。<br>
                趣味：琉球ゴールデンキングス観戦・食べ歩き　etc…
              </div>
              <div class="counselor__authority">
                <dl class="counselor__authority_define">
                  <dt class="counselor__authority_term">【資格／学位】</dt>
                  <dd class="counselor__authority_details">臨床心理士・精神保健福祉士・公認心理師 ／ 臨床心理学（修士）</dd>
                </dl>
                <dl class="counselor__authority_define">
                  <dt class="counselor__authority_term">【所属学会】</dt>
                  <dd class="counselor__authority_details">日本認知・行動療法学会 ／ 日本応用行動分析学会 ／ 日本心理臨床学会 ／ 沖縄県臨床心理士会 ／ 臨床心理学（修士）</dd>
                </dl>
              </div>
            </div>
            <div class="counselor__block">
              <div class="counselor__history">
                <h3 class="counselor__history__headline">職歴</h3>
                <ul class="counselor__history__list">
                  <li>● 精神科・心療内科クリニック　臨床心理士</li>
                  <li>● 私立大学　学生相談室　臨床心理士</li>
                  <li>● 県立大学　スクールカウンセラー</li>
                  <li>● 沖縄県　ｊスクールカウンセラー</li>
                  <li>● 生活困窮支援事業　臨床心理士</li>
                  <li>● 公立こども園巡回相談員（臨床心理士）</li>
                  <li>● 那覇地方法務局　産業カウンセラー</li>
                  <li>● 市教育委員会　就学支援委員</li>
                </ul>
              </div>
              <div class="counselor__history">
                <h3 class="counselor__history__headline">これまでの講演会 等</h3>
                <ul class="counselor__history__list">
                  <li>● 専門学校 　非常勤講師</li>
                  <li>● 沖縄県教育委員会　メンタルヘルス研修会　講師　多数</li>
                  <li>● 民間企業・官公庁　メンタルヘルス・ハラスメント研修会　多数</li>
                </ul>
                <p class="counselor__history__list">など</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="counselor__deco01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco01.png" alt=""></p>
    <p class="counselor__deco02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco02.png" alt=""></p>
  </section>

  <section id="company" class="company">
    <div class="company__wrap">
      <div class="company__main">
        <h2 class="c-headline">
          <span class="c-headline__ja">会社概要</span>
          <span class="c-headline__en">company</span>
        </h2>
        <div class="company__container">
          <dl class="company__define">
            <dt class="company__term">商号</dt>
            <dd class="company__details">カウンセリングスペース　ココロおき楽</dd>
          </dl>
          <dl class="company__define">
            <dt class="company__term">所在地</dt>
            <dd class="company__details">〒901ｰ1114沖縄県島尻郡南風原町神里55番地</dd>
          </dl>
          <dl class="company__define">
            <dt class="company__term">電話</dt>
            <dd class="company__details">098−917−4565</dd>
          </dl>
          <dl class="company__define">
            <dt class="company__term">メール</dt>
            <dd class="company__details">contact@kokorookiraku.com</dd>
          </dl>
          <p class="company__notes">ご予約・お問い合わせは、お電話もしくは『お問い合わせ』にて承っております。<br>カウンセリングのご予約や詳しい施術内容については，まずはお気軽にご連絡ください。</p>
        </div>
      </div>
      <div class="company__sns">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcocoro.okinawa%2F%3Flocale%3Dja_JP&tabs=timeline&width=366&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="320" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
