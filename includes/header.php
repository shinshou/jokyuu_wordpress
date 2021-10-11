<div class="header-inner">
  <h1 class="site-ttl">
    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/asset/logo (2)@2x.png" alt="サイトロゴ"></a>
  </h1><!-- /.site-ttl -->
  <div class="nav-wrapper">

    <?php
    //メニューIDを取得する
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <nav class="header-nav">
      <ul class="nav-list">
        <?php foreach ($menu_items as $item) : ?>
          <li class="nav-item<?php echo esc_html($item->menu_order); ?>">
            <a href="<?php echo esc_url($item->url); ?>">
              <?php echo esc_html($item->title); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul><!-- /.nav-list -->
      <ul class="nav-list-r">
        <li class="nav-item">
          <p>平日08:00〜20:00</p>
          <p><i class="fas fa-phone-alt"></i>0123-456-7890</p>
        </li>
        <li class="nav-item">
          <a href="<?php echo  esc_url(get_permalink(60)); ?>">資料請求</a>
        </li>
        <li class="nav-item contact">
          <a href="<?php echo  esc_url(get_permalink(60)); ?>">お問い合わせ</a>
        </li>
      </ul><!-- /.nav-list-r -->
    </nav><!-- /.header-nav -->
  </div>
  <div class="burger-btn">
    <!-- ③ハンバーガーボタン -->
    <span class="bars">
      <span class="bar bar_top"></span>
      <span class="bar bar_mid"></span>
      <span class="bar bar_bottom"></span>
    </span>
  </div>
</div><!-- /.header-inner -->