<?php get_header(); ?>
<?php if( !is_user_logged_in() && !is_bot() ) { setPostViews( get_the_ID() ); } ?>

<main class="c-subPage">
  <section class="news">
    <div class="news__wrap">
      <section class="news__main">
        <article class="news__article">
          <p class="news__article__date"><?php the_time("Y/m/d"); ?></p>
          <h1 class="news__article__title"><?php the_title(); ?></h1>
          <div class="news__article__main">
            <p><img src="/counseling/assets/img/thumb.jpg" alt=""></p>
            <div>
              <?php the_content(); ?>
            </div>
            <div class="news__box__category">
              <?php $terms = get_the_terms($post->ID, 'news-cat'); ?>
              <?php if ( !empty($terms) && !is_wp_error($terms) ) : ?>
                <?php foreach ( $terms as $term ) : ?>
                  <?php echo esc_html($term->name);?>　
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </article>

        <div class="news__pager">
          <?php previous_post_link('%link', '前の記事へ'); ?>
          <?php next_post_link('%link', '次の記事へ'); ?>
        </div>

        <div>
          <?php $terms = get_the_terms($post->ID, 'news-cat'); ?>
          <?php if ( $terms ) : ?>
            <?php foreach ( $terms as $category ) : ?>
              <?php  $category_ids[] = $category->term_id; ?>
            <?php endforeach; ?>
            <?php
            $news_args = array(
              'post_type'      => 'news',
              'posts_per_page' => 3,
              'post__not_in'   => array( get_the_ID() ),
              'tax_query' => array(
                array(
                  'taxonomy' => 'news-cat',
                  'terms' => $category_ids
                )
              ),
              'orderby'        => 'date',
              'order'          => 'DESC',
            );
            $news_query = new WP_Query( $news_args );
            ?>
            <h2 class="news__subHeadline">■関連記事</h2>

            <?php if( $news_query->have_posts() ): ?>
            <div class="news__container">

              <?php while( $news_query->have_posts() ) : $news_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news__box">
                  <p class="news__box__thumb">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail')); ?>" alt="">
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb.png" alt="">
                    <?php endif; ?>
                  </p>
                  <p class="news__box__date"><?php the_time("Y/m/d"); ?></p>
                  <h2 class="news__box__title--small"><?php the_title(); ?></h2>
                  <p class="news__box__category">
                    <?php $terms = get_the_terms($post->ID, 'news-cat'); ?>
                    <?php if ( !empty($terms) && !is_wp_error($terms) ) : ?>
                      <?php foreach ( $terms as $term ) : ?>
                        <?php echo esc_html($term->name);?>　
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </p>
                </a>
              <?php endwhile; ?>

            </div>
            <?php endif; wp_reset_postdata(); ?>
          <?php endif ?>

        </div>
       
      </section>
      
      <section class="news__sideNav">
        <form action="<?php echo home_url(); ?>" method="get" class="news__search">
          <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="検索">
          <button><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_search.svg" alt=""></button>
        </form>

       <?php
        $popular_args = array(
          'post_type'       => 'news',
          'meta_key'        => 'post_views_count',
          'orderby'         => 'meta_value_num',
          'order'           => 'DESC',
          'post_status'     => 'publish',
          'posts_per_page'  => 3,
        );
        $popular_query = new WP_Query( $popular_args );

        if( $popular_query->have_posts() ):
        ?>
        <section class="news__recommend">
          <h3 class="news__sideNav__headline">よく読まれている記事</h3>
          <div class="news__recommend__container">

            <?php while( $popular_query->have_posts() ) : $popular_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="news__box">
                <p class="news__box__thumb">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail')); ?>" alt="">
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb.png" alt="">
                  <?php endif; ?>
                </p>
                <p class="news__box__date"><?php the_time("Y/m/d"); ?></p>
                <h2 class="news__box__title--small"><?php the_title(); ?></h2>
                <p class="news__box__category">
                  <?php $terms = get_the_terms($post->ID, 'news-cat'); ?>
                  <?php if ( !empty($terms) && !is_wp_error($terms) ) : ?>
                    <?php foreach ( $terms as $term ) : ?>
                      <?php echo esc_html($term->name);?>　
                    <?php endforeach; ?>
                  <?php endif; ?>
                </p>
              </a>
            <?php endwhile; ?>

          </div>
        </section>
        <?php endif; wp_reset_postdata(); ?>

        <section class="news__archive">
          <h3 class="news__sideNav__headline">アーカイブ</h3>
          <div class="news__archive__container">
            <?php
              wp_get_archives( array(
                'post_type' => 'news'
              ) );
            ?>
          </div>
        </section>
      </section>
    </div>


  </section>
</main>

<?php
get_footer();
