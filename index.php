<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body>
  <!-- header -->
  <header id="header">

    <?php get_template_part('includes/header'); ?>

  </header>
  <!-- //header -->

  <!-- main -->
  <main id="main">
    <!-- key-visual -->
    <div class="kv-wrapper">
      <div class="kv-content">
        <p class="kv-copy">TOEFL対策は<br>Engress</p><!-- /.kv-copy -->
        <p class="kv-copy-sub">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p><!-- /.kv-copy-sub -->
        <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="cta-btn">資料請求</a><!-- /.cta-btn -->
        <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="contact-btn">お問い合わせ</a><!-- /.contact-btn -->
      </div><!-- /.kv-content -->
    </div><!-- /.kv-wrapper -->
    <!-- //key-visual -->

    <!-- section-onayami -->
    <section id="section-onayami">
      <div class="section-wrapper">
        <h2 class="section-ttl">TOEFL学習でこんな悩みありませんか？</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-onayami">
          <ul class="onayami-list">
            <li class="onayami-item">
              <p class="onayami-text">勉強の習慣が<br> 身についていない</p><!-- /.onayami-text-->
            </li><!-- /.onayami-item -->
            <li class="onayami-item">
              <p class="onayami-text">勉強しているはず<br>なのに点数が伸びない</p><!-- /.onayami-text-->
            </li><!-- /.onayami-item -->
            <li class="onayami-item">
              <p class="onayami-text">正しい勉強方法が<br>わからない</p><!-- /.onayami-text-->
            </li><!-- /.onayami-item -->
          </ul><!-- /.onayami-list -->
          <div class="onayami-subttl">
            <div class="onayami-subttl-inner">
              <h3 class="sub-ttl">Engressは<br><span>TOEFLに特化したスクール</span>です</h3><!-- /.sub-ttl -->
              <p class="sub-ttl-text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p><!-- /.sub-ttl-text -->
            </div><!-- /.onayami-subttl-inner -->
          </div><!-- /.onayami-subttl -->
        </div><!-- /.section-inner -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-onayami -->
    <!-- //section-oneyami -->

    <!-- section-feature -->
    <setion id="section-feature">
      <div class="section-wrapper">
        <h2 class="section-ttl">TOEFL対策に特化したEngress3つの強み</h2><!-- /.section-ttl -->
        <div class="section-inner section-inner-feature">
          <ul class="feature-list">
            <li class="feature-item">
              <p class="feature-text-no">特長 １</p><!-- /.feature-text-no -->
              <p class="feature-text-ttl">TOEFLに最適化された<br>無駄のないカリキュラム</p><!-- /.feature-text-ttl -->
              <p class="feature-text-content">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p><!-- /.feature-text-content -->
            </li><!-- /.feature-item -->
            <li class="feature-img">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/feature01.png" alt="feature01">
            </li><!-- /.feature-img -->
          </ul><!-- /.feature-list -->

          <ul class="feature-list">
            <li class="feature-item">
              <p class="feature-text-no">特長 ２</p><!-- /.feature-text-no -->
              <p class="feature-text-ttl">日本人指導歴10年以上の<br>経験豊富な講師陣</p><!-- /.feature-text-ttl -->
              <p class="feature-text-content">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p><!-- /.feature-text-content -->
            </li><!-- /.feature-item -->
            <li class="feature-img">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/feature02.png" alt="feature02">
            </li><!-- /.feature-img -->
          </ul><!-- /.feature-list -->

          <ul class="feature-list">
            <li class="feature-item">
              <p class="feature-text-no">特長 ３</p><!-- /.feature-text-no -->
              <p class="feature-text-ttl">平均3ヶ月でTOEFL iBT20点アップ</p><!-- /.feature-text-ttl -->
              <p class="feature-text-content">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p><!-- /.feature-text-content -->
            </li><!-- /.feature-item -->
            <li class="feature-img">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/feature03.png" alt="feature03">
            </li><!-- /.feature-img -->
          </ul><!-- /.feature-list -->
        </div><!-- /.section-inner section-inner-feature -->
      </div><!-- /.section-wrapper -->
    </setion><!-- /#section-feature -->
    <!-- //section-feature -->

    <!-- section-price -->
    <section id="section-price">
      <div class="section-wrapper">
        <div class="section-inner section-inner-price">
          <h2 class="section-ttl">Engressの料金プランはこちら</h2><!-- /.section-ttl -->
          <a href="/price-list.html" class="cta-btn2">料金を見てみる</a><!-- /.cta-btn2 -->
        </div><!-- /.section-inner section-inner-price -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-price -->
    <!-- //section-price -->

    <!-- section-jirei -->
    <section id="section-jirei">
      <div class="section-wrapper">
        <div class="section-inner section-inner-jirei">
          <h2 class="section-ttl">TOEFL成功事例</h2><!-- /.section-ttl -->
          <ul class="jirei-list">
            <li class="jirei-item">
              <p class="jirei-text">TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！</p><!-- /.jirei-text -->
              <div class="jirei-img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/model01.png" alt="model01">
              </div><!-- /.jirei-img -->
              <div class="jirei-genre1">
                <p class="jirei-genre-text">会社員</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre -->
              <div class="jirei-genre2">
                <p class="jirei-genre-text">T.Fujiyamaさん</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre2 -->
              <div class="jirei-genre3">
                <p class="jirei-genre-text">3ヶ月でTOEFL80→108点</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre3 -->
            </li><!-- /.jirei-item -->

            <li class="jirei-item">
              <p class="jirei-text">半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</p><!-- /.jirei-text -->
              <div class="jirei-img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/model02.png" alt="model02">
              </div><!-- /.jirei-img -->
              <div class="jirei-genre1">
                <p class="jirei-genre-text">大学生</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre -->
              <div class="jirei-genre2">
                <p class="jirei-genre-text">Y.Takiyamaさん</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre2 -->
              <div class="jirei-genre3">
                <p class="jirei-genre-text">6ヶ月でTOEFL40→100点</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre3 -->
            </li><!-- /.jirei-item -->

            <li class="jirei-item">
              <p class="jirei-text">早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</p><!-- /.jirei-text -->
              <div class="jirei-img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/model03.png" alt="model02">
              </div><!-- /.jirei-img -->
              <div class="jirei-genre1">
                <p class="jirei-genre-text">高校生</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre -->
              <div class="jirei-genre2">
                <p class="jirei-genre-text">M.Yamadaさん</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre2 -->
              <div class="jirei-genre3">
                <p class="jirei-genre-text">5ヶ月でTOEFL68→109点</p><!-- /.jirei-genre-text -->
              </div><!-- /.jirei-genre3 -->
            </li><!-- /.jirei-item -->
          </ul><!-- /.jirei-list -->
        </div><!-- /.section-inner section-inner-jirei -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-jirei -->

    <!-- section-flow -->
    <section id="section-flow">
      <div class="section-wrapper">
        <div class="section-inner section-inner-flow">
          <h2 class="section-ttl">ご利用の流れ</h2><!-- /.section-ttl -->
          <table class="flow-table">
            <tr class="table-row">
              <td class="table-item-no">01</td><!-- /.table-item-no -->
              <td class="table-item-ttl">お問い合わせ</td><!-- /.table-item-ttl -->
              <td class="table-item-text">まずはフォームまたはお電話からお申し込みください。</td><!-- /.table-item-text -->
            </tr><!-- /.table-row -->
            <tr class="table-row">
              <td class="table-item-no">02</td><!-- /.table-item-no -->
              <td class="table-item-ttl">ヒアリング</td><!-- /.table-item-ttl -->
              <td class="table-item-text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td><!-- /.table-item-text -->
            </tr><!-- /.table-item -->
            <tr class="table-row">
              <td class="table-item-no">03</td><!-- /.table-item-no -->
              <td class="table-item-ttl">学習プランの<br>ご提供</td><!-- /.table-item-ttl -->
              <td class="table-item-text">目標達成のために最適な学習プランをご提案致します。</td><!-- /.table-item-text -->
            </tr><!-- /.table-item -->
            <tr class="table-row">
              <td class="table-item-no">04</td><!-- /.table-item-no -->
              <td class="table-item-ttl">ご入会</td><!-- /.table-item-ttl -->
              <td class="table-item-text">お申込み完了後、レッスンがスタートします。</td><!-- /.table-item-text -->
            </tr><!-- /.table-item -->
          </table><!-- /.flow-table -->
        </div><!-- /.section-inner section-inner-flow -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-flow -->
    <!-- //section-flow -->

    <!-- section-question -->
    <section id="section-question">
      <div class="section-wrapper">
        <div class="section-inner section-inner-question">
          <h2 class="section-ttl">よくある質問</h2><!-- /.section-ttl -->
          <dl class="question-item">
            <dt class="question-item-ttl question-item1">
              Engressはサラリーマンでも学習を続けられるでしょうか？
              <span></span>
            </dt><!-- /.question-item-ttl -->
            <dd class="question-item-text item1-text">
              Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
            </dd><!-- /.question-item-text -->
            <dt class="question-item-ttl question-item2">
              教材はオリジナルのものを使用しているのでしょうか？
            </dt><!-- /.question-item-ttl -->
            <dd class="question-item-text item2-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </dd><!-- /.question-item-text -->
            <dt class="question-item-ttl question-item3">
              講師に日本人はいますか？
            </dt><!-- /.question-item-ttl -->
            <dd class="question-item-text item3-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </dd><!-- /.question-item-text -->
            <dt class="question-item-ttl question-item4">
              TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
            </dt><!-- /.question-item-ttl -->
            <dd class="question-item-text item4-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </dd><!-- /.question-item-text -->
          </dl><!-- /.question-item -->
        </div><!-- /.section-inner section-inner-question -->
      </div><!-- /.section-wrapper -->
    </section><!-- /#section-question -->
    <!-- //section-question -->

    <div class="section-wrapper">
      <div class="section-2col">
        <!-- section-blog -->
        <section id="section-blog">
          <div class="section-inner section-inner-blog">
            <h2 class="section-ttl">ブログ</h2><!-- /.section-ttl -->
            <div class="blog-item">
              <div class="blog-item-img">
                <div class="blog-category">
                  <p>カテゴリー</p>
                </div><!-- /.blog-category -->
                <img src="<?php echo get_template_directory_uri(); ?>/asset/sample01@2x.png" alt="サンプル１">
                <div class="blog-item-content">
                  <a href="<?php echo get_template_directory_uri(); ?>/blog-detail.html" class="blog-item-text ">Engress説明会in大阪の模様をお伝えします</a><!-- /.blog-item-text -->
                  <p class="blog-item-date">2020-12-27</p><!-- /.blog-item-date -->
                </div><!-- /.blog-item-content -->
              </div><!-- /.blog-item-img -->
              <div class="blog-item-img">
                <div class="blog-category">
                  <p>カテゴリー</p>
                </div><!-- /.blog-category -->
                <img src="<?php echo get_template_directory_uri(); ?>/asset/sample02@2x.png" alt="サンプル２">
                <div class="blog-item-content">
                  <a href="<?php echo get_template_directory_uri(); ?>/blog-detail.html" class="blog-item-text">Engressもくもく会でみんなで　TOEFL学習をしませんか？</a><!-- /.blog-item-text -->
                  <p class="blog-item-date">2020-12-01</p><!-- /.blog-item-date -->
                </div><!-- /.blog-item-content -->
              </div><!-- /.blog-item-img -->
              <div class="blog-item-img">
                <div class="blog-category">
                  <p>カテゴリー</p>
                </div><!-- /.blog-category -->
                <img src="<?php echo get_template_directory_uri(); ?>/asset/sample03@2x.png" alt="サンプル３">
                <div class="blog-item-content">
                  <a href="<?php echo get_template_directory_uri(); ?>/blog-detail.html" class="blog-item-text">TOEFL学習にはコーチング学習が最強である話</a><!-- /.blog-item-text -->
                  <p class="blog-item-date">2020-11–20</p><!-- /.blog-item-date -->
                </div><!-- /.blog-item-content -->
              </div><!-- /.blog-item-img -->
            </div><!-- /.blog-item -->
          </div><!-- /.section-inner section-inner-blog -->
        </section><!-- /.section-blog -->
        <!-- //section-blog -->

        <!-- section-news -->
        <section id="section-news">
          <div class="section-inner section-inner-news">
            <h2 class="section-ttl">お知らせ</h2><!-- /.section-ttl -->
            <div class="news-item">

              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <div class="news-item-inner">
                    <p class="news-item-date">
                      <?php the_time(get_option('date_format')); ?>
                    </p><!-- /.news-item-date -->
                    <a href="<?php the_permalink(); ?>" class="news-item-text">
                      <?php the_title(); ?>
                    </a><!-- /.news-item-text -->
                  </div><!-- /.news-item-inner -->
                <?php endwhile; ?>
              <?php else : ?>
                <p>記事が見つかりませんでした</p>
              <?php endif; ?>
            </div><!-- /.news-item -->
          </div><!-- /.section-inner section-inner-news -->
        </section><!-- /#section-news -->
        <!-- //section-news -->
      </div><!-- /.section-2col -->
    </div><!-- /.section-wrapper -->

    <section id="section-contact">
      <div class="section-wrapper">
        <div class="section-inner section-inner-contact">
          <div class="contact-inner-form">
            <h2 class="section-ttl">まずは無料で資料請求から</h2><!-- /.section-ttl -->
            <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="cta-btn">資料請求</a><!-- /.cta-btn -->
            <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="contact-btn">お問い合わせ</a><!-- /.contact-btn -->
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