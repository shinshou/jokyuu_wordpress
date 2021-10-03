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
    <div class="kv-ul-wrapper ul-price">
      <div class="kv-ul-content">
        <p class="kv-ul-copy">コース・料金</p><!-- /.kv-ul-copy -->
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
            <a itemprop="item" href="/price-list.html">
              <span itemprop="name">料金体系</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div><!-- /.section-wrapper -->
    </section><!-- /.bread-list -->

    <!-- section-ul -->
    <section id="section-ul">
      <div class="section-wrapper">
        <h2 class="section-ttl">料金体系</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-ul-price">
          <div class="price-const">
            <p>入会金 39,800円</p>
          </div><!-- /.price-const1 -->
          <div class="plus-label">
          </div><!-- /.plus-label -->
          <div class="price-const">
            <p>月額費用</p>
          </div><!-- /.price-const2 -->
        </div><!-- /.section-inner -->
        <p class="ul-price-sub">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p><!-- /.ul-price-sub -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-ul -->
    <!-- //section-ul -->

    <!-- section-ul-content -->
    <setion id="section-ul-content">
      <div class="section-wrapper section-pricelist-wrapper">
        <h2 class="section-ttl">料金表</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-ul-pricelist js-scrollable">
          <div class="price-list-content" ontouchstart="">
            <div class="price-list-ttl">
              <p>基礎プラン</p>
            </div><!-- /.price-list-ttl -->
            <div class="price-list-inner">
              <p class="price">59,000円~</p><!-- /.price -->
              <p class="price-sub">*月額（税抜価格）</p><!-- /.price-sub -->
              <ul>
                <li><img src="./asset/check.png" alt="check">カリキュラム作成</li>
                <li><img src="./asset/check.png" alt="check">TOEFL学習サポート</li>
                <li><img src="./asset/check.png" alt="check">週一回のビデオMTG</li>
              </ul>
            </div><!-- /.price-list-inner -->
          </div><!-- /.price-list-content -->
          <div class="price-list-content" ontouchstart="">
            <div class="price-list-ttl">
              <p>演習プラン</p>
            </div><!-- /.price-list-ttl -->
            <div class="price-list-inner">
              <p class="price">75,000円~</p><!-- /.price -->
              <p class="price-sub">*月額（税抜価格）</p><!-- /.price-sub -->
              <ul>
                <li><img src="./asset/check.png" alt="check">カリキュラム作成</li>
                <li><img src="./asset/check.png" alt="check">TOEFL学習サポート</li>
                <li><img src="./asset/check.png" alt="check">週一回のビデオMTG</li>
                <li><img src="./asset/check.png" alt="check">月二回の模試（解説 付き）</li>
              </ul>
            </div><!-- /.price-list-inner -->
          </div><!-- /.price-list-content -->
          <div class="price-list-content" ontouchstart="">
            <div class="price-list-ttl">
              <p>おすすめ<br>志望校対策プラン</p>
            </div><!-- /.price-list-ttl -->
            <div class="price-list-inner">
              <p class="price">95,000円~</p><!-- /.price -->
              <p class="price-sub">*月額（税抜価格）</p><!-- /.price-sub -->
              <ul>
                <li><img src="./asset/check.png" alt="check">カリキュラム作成</li>
                <li><img src="./asset/check.png" alt="check">TOEFL学習サポート</li>
                <li><img src="./asset/check.png" alt="check">週一回のビデオMTG</li>
                <li><img src="./asset/check.png" alt="check">月二回の模試（解説 付き）</li>
                <li><img src="./asset/check.png" alt="check">週一の英語面接対策</li>
              </ul>
            </div><!-- /.price-list-inner -->
          </div><!-- /.price-list-content -->
          <div class="price-list-content" ontouchstart="">
            <div class="price-list-ttl">
              <p>フレックスプラン</p>
            </div><!-- /.price-list-ttl -->
            <div class="price-list-inner">
              <p class="price">60,000円~</p><!-- /.price -->
              <p class="price-sub">*月額（税抜価格）</p><!-- /.price-sub -->
              <p>＊別途ご相談ください</p>
            </div><!-- /.price-list-inner -->
          </div><!-- /.price-list-content -->
        </div><!-- /.section-inner section-inner-ul-pricelist -->
      </div><!-- /.section-wrapper -->
    </setion><!-- /#section-ul-content -->
    <!-- //section-ul-content -->

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