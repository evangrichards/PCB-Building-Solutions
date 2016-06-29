<section class="primary-content c-1<?php $image = get_sub_field('image'); if( !empty($image) ) { ?> with-image<?php } else { ?> without-image<?php } ?>">
  <div class="inner">
    <h5 class="rotate page-title"><?php the_title(); ?></h5>
    <div class="position-me">

      <?php if( have_rows('image_slider') ):?>
      <div class="c-1 slideshow">
        <div class="rslides">
          <ul class="rslides">
          <?php while ( have_rows('image_slider') ) : the_row();
          $image = get_sub_field('image'); ?>

            <?php if( !empty($image) ): ?>
            <li class="slide bg-image" style="background-image: url('<?php echo $image['url']; ?>');"></li>
            <?php endif; ?>

          <?php endwhile; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>

      <div id="fixed" class="sticky">
        <h2><?php the_sub_field('large_text'); ?></h2>
        <?php include('contact-cta.php'); ?>
      </div>
      <div id="fluid">
        <?php the_sub_field('main_content'); ?>
      </div>

    </div>
  </div>
</section>
