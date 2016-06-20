<section class="hero bg-image" id="hero" <?php $image = get_field('image'); if( !empty($image) ): ?>style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>

  <hgroup>
    <h1><?php the_field('heading'); ?></h1>
    <?php if (get_field('sub_heading')) {?><h2><?php the_field('sub_heading'); ?></h2><?php } ?>
  </hgroup>

  <?php if( get_field('add_overlay') ) {?>
    <div class="overlay"></div>
  <?php }?>

</section>
