  <footer class="c-1">
    <div class="inner">
      <div class="c-1">
        <div class="c-3">
          <h6>Qualified Trusted <br />Tradesmen</h6>
        </div>
        <div class="c-3">
          <h6>Builders in <br />Monmouthshire</h6>
        </div>
        <div class="c-3">
          <?php bloginfo('name'); ?>
        </div>
      </div>

      <div class="c-1">
        <div class="c-3">
          List of stuff & Contact details
        </div>
        <div class="c-3">
          <ul>
            <?php
               wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container' => 'false',
                'items_wrap' => '%3$s',
                'fallback_cb' => 'wp_page_menu'
                ));
            ?>
          </ul>
        </div>
        <div class="c-3">
          <?php bloginfo('name'); ?>
        </div>
      </div>
    </div>
  </footer>

</div> <?php // end #wrapper ?>

<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-66226292-1');ga('send','pageview');
</script>
<?php wp_footer(); ?>
</body>
</html>
