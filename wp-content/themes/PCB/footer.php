  <footer>
    <div class="inner">
      <div class="c-1 row-h">
        <div class="c-3">
          <h4><?php the_field('left_col_header', 'option'); ?></h4>
        </div>
        <div class="c-3">
          <h4><?php bloginfo('description'); ?></h4>
        </div>
        <div class="c-3">
          <h4><?php bloginfo('name'); ?></h4>
        </div>
      </div>

      <div class="c-1 row">
        <div class="c-3">
          <div class="c-1 expertise">
            <?php the_field('expertise_list', 'option'); ?>
          </div>

          <?php include('parts/contact-cta.php'); ?>
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

          <p class="copy">
            &copy; Copyright
            <?php bloginfo('name') ?><br />
            Company Reg No: <?php the_field('company_reg', 'option'); ?>
            <?php if (get_field('vat_no','option')) {?><br />VAT No: <?php the_field('vat_no', 'option'); ?><?php } ?>
          </p>

          <p>
          <a href="#hero" class="scrollto top"><i class="i-arrow-up"></i>Top</a>
          </p>

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
