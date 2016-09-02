<section class="hero bg-image" id="hero" <?php $image = get_field('image'); if( !empty($image) ): ?>style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>
  <div class="inner">
    <hgroup class="center-wrapper">
      <div class="center">
        <h1>
          <?php if (get_field('heading')) {?>
            <?php the_field('heading'); ?>
          <?php } else { ?>
            <?php the_title(); ?>
          <?php } ?>
        </h1>
        <?php if (get_field('sub_heading')) {?><h2><?php the_field('sub_heading'); ?></h2><?php } ?>
        <a href="#page-content" class="scrollto">
          <div class="arrow arrow-1"></div>
          <div class="arrow arrow-2"></div>
          <div class="arrow arrow-3"></div>
        </a>
      </div>
    </hgroup>
  </div>

  <?php if( get_field('add_overlay') ) {?>
    <div class="overlay"></div>
  <?php }?>
</section>
