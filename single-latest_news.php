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

    <!-- section-detail-news -->
    <section id="section-detail-news">
      <div class="section-wrapper">
        <?php while (have_posts()) : the_post(); ?>
          <h2 class="section-detail-news-ttl">
            <?php echo esc_html(wp_trim_words(get_the_title(), 48, "…", "UTF-8")); ?>
          </h2><!-- /.section-detail-ttl -->
          <p class="news-date">
            <?php the_date(); ?>
          </p><!-- /.news-date -->
          <div class="section-inner section-inner-detail-news">
            <div class="content">
              <?php the_content(); ?>
            </div><!-- /.content -->
          </div><!-- /.section-inner-detail-news -->
        <?php endwhile; ?>
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-detail-news -->
    <!-- //section-detail-news -->

    <?php get_template_part('includes/footer_contact'); ?>
  </main>
  <!-- //main -->

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>