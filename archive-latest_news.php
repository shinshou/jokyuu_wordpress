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
    <div class="kv-ul-wrapper ul-news">
      <div class="kv-ul-content">
        <p class="kv-ul-copy">お知らせ</p><!-- /.kv-ul-copy -->
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
        <h2 class="section-ttl">お知らせ一覧</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-ul-news">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="news-inner">
                <div class="news-content">
                  <p class="news-date">
                    <?php the_time(get_option('date_format')); ?>
                  </p><!-- /.news-date -->
                  <a href="<?php the_permalink(); ?>" class="news-text">
                    <?php echo esc_html(wp_trim_words(get_the_title(), 48, "…", "UTF-8")); ?>
                  </a><!-- /.news-text -->
                </div><!-- /.news-content -->
              </div><!-- /.news-inner -->
            <?php endwhile; ?>
            <!-- ページネーション -->
            <div class="pagination">
              <?php the_posts_pagination(); ?>
            </div><!-- /.pagination -->
          <?php else : ?>
            <p>記事が見つかりませんでした</p>
          <?php endif; ?>
        </div><!-- /.section-inner -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-ul -->
    <!-- //section-ul -->

    <?php get_template_part('includes/footer_contact'); ?>
  </main>
  <!-- //main -->

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>