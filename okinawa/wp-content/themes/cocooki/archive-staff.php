<?php get_header(); ?>

<main class="c-subPage">

  <section class="staff">
    <h1 class="staff__headline">
      <span class="staff__headline__ja">スタッフ紹介</span>
      <span class="staff__headline__en">Introduction of staff</span>
    </h1>
    <div class="staff__container">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="staff__box">
          <div class="staff__lead">            
            <p class="staff__image">
              <?php if( get_field('写真') ): ?>
                <img src="<?php echo get_field('写真')["url"]; ?>" />
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff_thumb.png" alt="">
              <?php endif; ?>
            </p>
            <div class="staff__profile">
              <?php if( get_field('肩書')): ?>
              <p class="staff__position"><?php echo get_field('肩書') ?></p>
              <?php endif; ?>
              <h2 class="staff__name">
                <?php if( get_field('名前')): ?>
                <?php echo get_field('名前') ?>
                <?php endif; ?>
                <?php if( get_field('ふりがな')): ?>
                <ruby>
                  <?php echo get_field('ふりがな') ?>
                </ruby>
                <?php endif; ?>
              </h2>
            </div>
          </div>
          <div class="staff__subProfile">
            <?php if( get_field('資格')): ?>
              <dl class="staff__define">
                <dt class="staff__term">資格</dt>
                <dt class="staff__details"><?php echo nl2br(get_field('資格')) ?></dt>
              </dl>
            <?php endif; ?>
            <?php if( get_field('経歴')): ?>
                <dl class="staff__define">
                <dt class="staff__term">経歴</dt>
                <dt class="staff__details"><?php echo nl2br(get_field('経歴')) ?></dt>
              </dl>
            <?php endif; ?>
            <?php if( get_field('趣味')): ?>
                <dl class="staff__define">
                <dt class="staff__term">趣味</dt>
                <dt class="staff__details"><?php echo nl2br(get_field('趣味')) ?></dt>
              </dl>
            <?php endif; ?>
            <?php if( get_field('座右の銘')): ?>
                <dl class="staff__define">
                <dt class="staff__term">座右の銘</dt>
                <dt class="staff__details"><?php echo nl2br(get_field('座右の銘')) ?></dt>
              </dl>
            <?php endif; ?>
            <?php if( get_field('一言')): ?>
                <dl class="staff__define">
                <dt class="staff__term">一言</dt>
                <dt class="staff__details"><?php echo nl2br(get_field('一言')) ?></dt>
              </dl>
            <?php endif; ?>

          </div>
        </div>
      <?php endwhile; ?>

    </div>
  </section>


</main>

<?php
get_footer();
