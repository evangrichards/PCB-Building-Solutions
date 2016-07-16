<section class="grey-content c-1">
  <div class="inner">
    <div class="position-me">
      <div class="c-1 heading">
        <?php the_sub_field('heading'); ?>
      </div>
      <ul class="c-3">
        <?php
          $count = 0;
          while (have_rows('list_content')) {
            the_row();
            if ($count > 0 && ($count % 6 == 0)) {
              ?>
                </ul>
                <ul class="c-3">
              <?php
            }
            ?>
              <li class="item i-diamond">
                <?php the_sub_field('list_item'); ?>
              </li>
            <?php
            $count++;
          }
        ?>
      </ul>
    </div>
  </div>

  <?php if( get_sub_field('grey_show_get_in_touch') ){ ?>
    <section class="c-1 generic-cta">
      <div class="inner">
        <?php the_sub_field('grey_text'); ?>
        <?php include('contact-cta.php'); ?>
      </div>
    </section>
  <?php } ?>

</section>
