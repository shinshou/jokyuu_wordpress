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
    <!-- key-visual -->
    <div class="kv-ul-wrapper ul-blog">
      <div class="kv-ul-content">
        <p class="kv-ul-copy">ブログ</p><!-- /.kv-ul-copy -->
      </div><!-- /.kv-ul-content -->
    </div><!-- /.kv-ul-wrapper -->
    <!-- //key-visual -->

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

    <!-- section-ul -->
    <section id="section-ul">
      <div class="section-wrapper">
        <h2 class="section-ttl">新着一覧</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-ul-blog">
          <?php
          $paged = (int) get_query_var('paged');
          $wp_query = new WP_Query();
          $my_posts = array(
            'post_type' => 'post', //カテゴリは特定せず
            'posts_per_page' => '10', //とりあえず100件
            'paged' => $paged,
          );
          $wp_query->query($my_posts);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
              <div class="blog-inner">
                <div class="blog-img">
                  <div class="blog-category">
                    <p>
                      <?php
                      $category = get_the_category();
                      echo $category[0]->cat_name;
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
                  <img src="<?php echo $img[0]; ?>" alt="ブログアイキャッチ">
                </div><!-- /.blog-img -->
                <div class="blog-content">
                  <p class="blog-date">
                    <?php the_time(get_option('date_format')); ?>
                  </p><!-- /.blog-date -->
                  <p class="blog-ttl">
                    <a href="<?php the_permalink(); ?>">
                      <?php echo wp_trim_words(get_the_title(), 48, "…", "UTF-8"); ?>
                    </a>
                  </p><!-- /.blog-ttl -->
                  <p class="blog-text">
                    <?php echo wp_trim_words(the_excerpt(), 48, "…", "UTF-8"); ?>
                  </p><!-- /.blog-text -->
                </div><!-- /.blog-content -->
              </div><!-- /.blog-inner -->

            <?php endwhile; ?>
            <!-- ページネーション -->
            <div class="pagination">
              <?php the_posts_pagination(); ?>
            </div><!-- /.pagination -->
          <?php else : ?>
            <p>記事が見つかりませんでした</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- /.section-inner -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-ul -->
    <!-- //section-ul -->

    <section id="section-contact">
      <div class="section-wrapper">
        <div class="section-inner section-inner-contact">
          <div class="contact-inner-form">
            <h2 class="section-ttl">まずは無料で資料請求から</h2><!-- /.section-ttl -->
            <a href="/contact.html" class="cta-btn">資料請求</a><!-- /.cta-btn -->
            <a href="/contact.html" class="contact-btn">お問い合わせ</a><!-- /.contact-btn -->
          </div>
          <div class="contact-inner-tel">
            <div class="inner-content">
              <p class="contact-tel-text">お電話でのお問い合わせはこちら</p><!-- /.contact-tel-text -->
              <p class="contact-tel-num">0123-456-7890</p><!-- /.contact-tel-num -->
              <p class="contact-tel-date">平日 08:00~20:00</p><!-- /.contact-tel-date -->
            </div><!-- /.inner-content -->
          </div><!-- /.contact-inner-tel -->
        </div><!-- /.section-inner section-inner-contact -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-contact -->
    <!-- //section-contact -->
  </main>
  <!-- //main -->

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>