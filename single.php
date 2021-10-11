<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header();  ?>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- header -->
  <header id="header">

    <?php get_template_part('includes/header'); ?>

  </header>
  <!-- //header -->

  <!-- main -->
  <main id="main">

    <section class="bread-list">
      <div class="section-wrapper">
        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
          <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            } ?>
          </div>
        </ol>
      </div><!-- /.section-wrapper -->
    </section><!-- /.bread-list -->

    <!-- section-detail-blog -->
    <section id="section-detail-blog">
      <div class="section-wrapper-col2-1">
        <?php while (have_posts()) : the_post(); ?>
          <div class="section-detail-blog-category">
            <?php
            $category = get_the_category();
            echo esc_html($category[0]->cat_name);
            ?>
          </div><!-- /.section-detail-blog-category -->
          <h2 class="section-detail-blog-ttl">
            <?php echo esc_html(wp_trim_words(get_the_title(), 48, "…", "UTF-8")); ?>
          </h2><!-- /.section-detail-blog-ttl -->
          <div class="blog-info">
            <div class="sns-link-inner">
              <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>

            </div><!-- /.sns-link-inner -->
            <p class="blog-date">
              <?php the_date(); ?>
            </p><!-- /.blog-date -->
          </div><!-- /.blog-info -->
          <div class="section-inner section-inner-detail-blog">
            <?php
            if (has_post_thumbnail()) :
              $id = get_post_thumbnail_id();
              $img = wp_get_attachment_image_src($id, 'large');
            else :
              $img = array(get_template_directory_uri() . '/asset/blog@2x.png');
            endif;
            ?>
            <img class="blog-eyecatch" src="<?php echo esc_url($img[0]); ?>" alt="アイキャッチ画像">
            <div class="content">
              <?php the_content(); ?>
            </div><!-- /.content -->
          <?php endwhile; ?>


          <h2 class="recommend-article">おすすめの記事</h2>
          <?php
          // views post metaで記事のPV情報を取得する
          setPostViews(get_the_ID());
          $args = array(
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'posts_per_page' => 3 // ← 5件取得
          );
          // WP_Queryによるループ
          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) :
              $query->the_post();
          ?>
              <div class="blog-inner">
                <div class="blog-img">
                  <div class="blog-category">
                    <p>
                      <?php
                      $category = get_the_category();
                      echo esc_html($category[0]->cat_name);
                      ?>
                    </p>
                  </div><!-- /.blog-category -->
                  <?php
                  if (has_post_thumbnail()) :
                    $id = get_post_thumbnail_id();
                    $img = wp_get_attachment_image_src($id, 'large');
                  else :
                    $img = array(get_template_directory_uri() . '/asset/blog@2x.png');
                  endif;
                  ?>
                  <img src="<?php echo esc_url($img[0]); ?>" alt="アイキャッチ画像">
                </div><!-- /.blog-img -->
                <div class="blog-content">
                  <p class="blog-date">
                    <?php the_time(get_option('date_format')); ?>
                  </p><!-- /.blog-date -->
                  <p class="blog-ttl">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo esc_html(wp_trim_words(get_the_title(), 48, "…", "UTF-8")); ?>
                    </a>
                  </p><!-- /.blog-ttl -->
                </div><!-- /.blog-content -->
              </div><!-- /.blog-inner -->
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          </div><!-- /.section-inner-detail-blog -->
      </div><!-- /.section-wrapper-col2-1 -->
      <div class="section-wrapper-col2-2">
        <div class="related-article">
          <p class="related-article-text">
            関連記事
          </p><!-- /.related-article-text -->
          <?php if (has_category()) : //表示中の投稿に登録されているカテゴリがある場合のみ下記実行 
          ?>
            <?php
            //表示中の投稿に登録されているカテゴリID（term_id）を全て取得
            $categories = get_the_category();
            $cat_term_ids = array();
            foreach ($categories as $category) {
              $cat_term_ids[] = $category->term_id; //cat_ID でも同じ
            }
            //関連記事取得用クエリパラメーター
            $args = array(
              'post_type' => 'post',  //投稿を指定 （固定ページの場合は 'page'）
              'posts_per_page' => '3',  //取得する件数
              'ignore_sticky_posts' => true,  //「トップに固定」した投稿は除く
              'post__not_in' => array($post->ID),  //除外する投稿（本記事）
              'category__in' => $cat_term_ids,  //対象となるカテゴリID（配列）
              'orderby' => 'rand'  //表示順をランダムにしてい（日付順の場合は 'date'）
            );
            $the_query = new WP_Query($args);  //クエリ実行
            ?>
            <?php if ($the_query->post_count > 0) : //該当する投稿が１件以上あったら下記出力 
            ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="related-article-inner">
                  <?php
                  if (has_post_thumbnail()) :
                    $id = get_post_thumbnail_id();
                    $img = wp_get_attachment_image_src($id, 'large');
                  else :
                    $img = array(get_template_directory_uri() . '/asset/blog@2x.png');
                  endif;
                  ?>
                  <img src="<?php echo esc_url($img[0]); ?>" alt="アイキャッチ画像">
                  <p>
                    <a href="<?php the_permalink(); ?>">
                      <?php echo esc_html(wp_trim_words(get_the_title(), 48, "…", "UTF-8")); ?>
                    </a>
                  </p>
                </div><!-- /.related-article-inner -->
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; // end of "if( $the_query->post_count > 0 )" 
            ?>
          <?php endif; // end of "if( has_category() )" 
          ?>
        </div><!-- /.related-article -->
        <div class="category-list">
          <p class="category-list-text">
            カテゴリー
          </p><!-- /.category-list-text -->
          <ul>
            <?php
            $args = array(
              'orderby' => 'name',
              'parent' => 0,
              'number' => 5,
            );
            $categories = get_categories($args);
            foreach ($categories as $category) {
              echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            ?>
          </ul>
        </div><!-- /.category-list -->
      </div><!-- /.section-wrapper-col2-2 -->
    </section><!-- /#section-detail-blog -->
    <!-- //section-detail-blog -->

    <?php get_template_part('includes/footer_contact'); ?>
  </main>
  <!-- //main -->

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>