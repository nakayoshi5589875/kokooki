<?php get_header(); ?>

<main class="c-subPage">


  <section class="case">
    <h1 class="case__headline">
      <span class="case__headline__ja">ご利用事例</span>
      <span class="case__headline__en">Case study</span>
    </h1>
    <div class="case__container">
      <?php while ( have_posts() ) : the_post(); ?>
      <section class="case__box">
        <div class="case__box__inner">
          <div class="case__box__main">
            <?php if( get_field('case')): ?>
            <p class="case__box__headline"><?php echo get_field('case'); ?></p>
            <?php endif; ?>
            <?php if( get_field('見出し')): ?>
            <h2 class="case__box__title"><?php echo nl2br(get_field('見出し')) ?></h2>
            <?php endif; ?>
            <?php if( get_field('プロフィール')): ?>
            <p class="case__box__profile"><?php echo get_field('プロフィール'); ?></p>
            <?php endif; ?>
            <p class="sp case__box__image">
              <?php if( get_field('写真') ): ?>
                <img src="<?php echo get_field('写真')["url"]; ?>" />
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb.png" alt="">
              <?php endif; ?>
            </p>
            <?php if( get_field('本文') ): ?>
            <div class="case__box__text">
              <?php echo nl2br(get_field('本文')) ?>
            </div>
            <?php endif; ?>
          </div>
          <p class="pc case__box__image">
            <?php if( get_field('画像') ): ?>
              <img src="<?php echo get_field('画像')["url"]; ?>" />
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb.png" alt="">
            <?php endif; ?>
          </p>
        </div>
      </section>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php
get_footer();
