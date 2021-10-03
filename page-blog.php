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
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="index.html">
              <span itemprop="name" class="bread-home">ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>

          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="/blog.html">
              <span itemprop="name">ブログ</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div><!-- /.section-wrapper -->
    </section><!-- /.bread-list -->

    <!-- section-ul -->
    <section id="section-ul">
      <div class="section-wrapper">
        <h2 class="section-ttl">新着一覧</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-ul-blog">
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ1</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample01@2x.png" alt="ブログ画像1">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2020-12-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ2</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample02@2x.png" alt="ブログ画像2">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-12-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ3</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample03@2x.png" alt="ブログ画像3">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-11-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ2</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample02@2x.png" alt="ブログ画像2">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-10-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ2</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample02@2x.png" alt="ブログ画像2">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-10-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ3</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample03@2x.png" alt="ブログ画像3">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-08-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ2</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample02@2x.png" alt="ブログ画像2">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-07-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ3</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample03@2x.png" alt="ブログ画像3">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-06-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ1</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample01@2x.png" alt="ブログ画像1">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-05-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
          <div class="blog-inner">
            <div class="blog-img">
              <div class="blog-category">
                <p>カテゴリ3</p>
              </div><!-- /.blog-category -->
              <img src="./asset/sample03@2x.png" alt="ブログ画像3">
            </div><!-- /.blog-img -->
            <div class="blog-content">
              <p class="blog-date">
                2019-04-01
              </p><!-- /.blog-date -->
              <p class="blog-ttl">
                ブログタイトルテキストテキストテキストテキスト
              </p><!-- /.blog-ttl -->
              <p class="blog-text">
                記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p><!-- /.blog-text -->
            </div><!-- /.blog-content -->
          </div><!-- /.blog-inner -->
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