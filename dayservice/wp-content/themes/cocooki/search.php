<?php get_header(); ?>

<main class="c-subPage">


  <section class="news">
    <h1 class="c-headline-center">
      <span class="c-headline__ja">新着情報一覧</span>
      <span class="c-headline__en">NEWS</span>
    </h1>
    <div class="news__wrap">
      <section class="news__main">
       <?php
        if ( have_posts() ) :
        ?>
        <div class="news__container">
          <?php while ( have_posts() ) : the_post(); ?>
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

        <?php
        global $wp_query;

        $pagination = paginate_links( array(
            'total'        => $wp_query->max_num_pages,
            'current'      => max( 1, get_query_var('paged') ),
            'type'         => 'array',
            'prev_next'    => false, // ← 前へ・次へを削除
            'end_size'     => 1,
            'mid_size'     => 1,
        ) );

        if ( !empty( $pagination ) ) :
        ?>
        <div class="news__pageNation">
          <a href="<?php echo esc_url( get_pagenum_link(1) ); ?>" class="news__pageNation__first">最初</a>
          <?php foreach ( $pagination as $page ) : ?>
            <?php
              $is_active = strpos( $page, 'current' ) !== false ? ' is-active' : '';
              preg_match('/href="([^"]*)"/', $page, $matches);
              $url = $matches[1] ?? '';
              $label = strip_tags($page);
            ?>
            <a href="<?php echo esc_url($url); ?>" class="news__pageNation__link<?php echo $is_active; ?>">
              <?php echo esc_html($label); ?>
            </a>
          <?php endforeach; ?>
          <a href="<?php echo esc_url( get_pagenum_link( $wp_query->max_num_pages ) ); ?>" class="news__pageNation__last">最後</a>

        </div>
        <?php endif; ?>

      </section>

      <section class="news__sideNav">
        <form action="<?php echo home_url(); ?>" method="get" class="news__search">
			  <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="検索">
        <input type="hidden" name="post_type" value="news">
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
