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
    <div class="kv-ul-wrapper ul-contact">
      <div class="kv-ul-content">
        <p class="kv-ul-copy">お問い合わせ<br>・資料請求</p><!-- /.kv-ul-copy -->
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
            <a itemprop="item" href="/contact.html">
              <span itemprop="name">お問い合わせ</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div><!-- /.section-wrapper -->
    </section><!-- /.bread-list -->

    <!-- section-ul -->
    <section id="section-ul">
      <div class="section-wrapper-contact">
        <p class="section-subtext">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p><!-- /.section-subtext -->
        <div class="section-inner section-inner-ul-contact">
          <div class="contact-inner">
            <form action="mail.php" id="form" method="POST">
              <dl>
                <dt><label for="companyname">会社名</label></dt>
                <dd><input id="companyname" type="text" name="companyname" placeholder="Engress" required></dd>

                <dt><label for="name" class="required">氏名</label></dt>
                <dd><input id="name" type="text" name="name" placeholder="田中 太郎" required></dd>

                <dt><label for="email" class="required">メールアドレス</label></dt>
                <dd><input id="email" type="text" name="email" placeholder="example@example.jp" required></dd>

                <dt><label for="tel" class="required">電話番号</label></dt>
                <dd><input id="tel" type="text" name="tel" placeholder="例）01-2345-6789" required></dd>

                <dt>お問い合わせの種類を選択してください<span>（資料請求の方は資料請求を選択ください）</span></dt>
                <dd class="radio"><input id="select-opportunity" type="radio" name="consultation" value="select-consultation"><label for="select-opportunity" class="">商談のご相談</label></dd>
                <dd class="radio"><input id="select-service" type="radio" name="consultation" value="select-service"><label for="select-service" class="">サービスに関するお問い合わせ</label></dd>
                <dd class="radio"><input id="select-document" type="radio" name="consultation" value="select-document"><label for="select-document" class="">資料請求</label></dd>
                <dd class="radio"><input id="select-etc" type="radio" name="consultation" value="select-etc"><label for="select-etc" class="">その他</label></dd>

                <dt class="message"><label for="message" class="required">お問い合わせ内容</label></dt>
                <dd><textarea id="message" name="message" placeholder="お問い合わせ内容をご入力ください" required></textarea></dd>

                <dt class="privacy-policy"><a href="">プライバシーポリシー</a>に同意の上、送信ください。</dt>
                <dd class="privacy-policy"><input type="checkbox" name="checkbox" id="checkbox" value="1" required><label for="checkbox" class="required">プライバシーポリシーに同意する</label></dd>
              </dl>

              <div class="contact-btn-wrapper"><button class="contact-btn" type="submit">送信する</button></div>
            </form>
          </div><!-- /.contact-inner -->
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