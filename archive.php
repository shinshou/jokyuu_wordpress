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
        <p class="kv-ul-copy"><?php wp_title(''); ?></p><!-- /.kv-ul-copy -->
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
        <h2 class="section-ttl"><?php wp_title(''); ?>一覧</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-ul-blog">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
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
                  <img src="<?php echo esc_url($img[0]); ?>" alt="ブログアイキャッチ">
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
                  <p class="blog-text">
                    <?php echo esc_html(wp_trim_words(the_excerpt(), 48, "…", "UTF-8")); ?>
                  </p><!-- /.blog-text -->
                </div><!-- /.blog-content -->
              </div><!-- /.blog-inner -->

              <!-- pager -->
            <?php endwhile; ?>
            <?php next_posts_link(); ?>
          <?php else : ?>
            <p>記事が見つかりませんでした。</p>
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