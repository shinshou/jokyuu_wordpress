  <!-- Bootstrapの読み込み -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->

  <!-- jQuery読み込み -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- ページ内スムーススクロール-->
  <script type="text/javascript">
    $(function() {
      $('a[href^="#"]').click(function() {
        var speed = 1000;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({
          scrollTop: position
        }, speed, "swing");
        return false;
      });
    });
  </script>

  <!-- <script src="scripts/file.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

  <?php wp_footer(); ?>