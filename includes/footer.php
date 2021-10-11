<!-- footer -->
<footer id="footer">
  <div class="section-wrapper">
    <div class="footer-inner">
      <div class="footer-list">
        <?php
        //メニューIDを取得する
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);

        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>
        <ul class="footer-list-item">
          <?php foreach ($menu_items as $item) : ?>
            <li class="list-text">
              <a href="<?php echo esc_url($item->url); ?>">
                <?php echo esc_html($item->title); ?>
              </a>
            </li><!-- /.list-text -->
          <?php endforeach; ?>
        </ul><!-- /.footer-list-item -->
      </div><!-- /.footer-list -->
      <div class="footer-content">
        <div class="footer-img">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/logo (2)@2x.png" alt="フッターロゴ">
        </div><!-- /.footer-img -->
        <div class="footer-content-inner">
          <p><i class="fas fa-phone-alt"></i>0123-456-7890</p>
          <p>平日08:00~20:00</p>
        </div><!-- /.footer-content-inner -->
      </div><!-- /.footer-content -->
    </div><!-- /.footer-inner -->
  </div><!-- /.section-wrapper -->
  <div class="footer-copylight">
    <div class="section-wrapper">
      <p>© 2020 Engress.</p>
    </div><!-- /.section-wrapper -->
  </div><!-- /.footer-copylight -->
</footer>
<!-- //footer -->