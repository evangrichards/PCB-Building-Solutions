<?php if( have_rows('boxes','option') ): ?>
<div class="c-1 boxes">
  <div class="inner">

    <h2 class="explore">More to explore </h2>
    <span class="keyline"></span>

    <div class="c-1 box-wrap">

      <?php while ( have_rows('boxes','option') ) : the_row(); ?>
        <div class="c-3">
          <div class="list-content">

          <div class="c-1 image-wrap">
            <?php
            $image = get_sub_field('image','option');
            $alt = $image['alt'];
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php endif; ?>
            <div class="icon circle">
              <i class="i-bricks"></i>
            </div>
          </div>

          <div class="box-title">
            <?php the_sub_field('box_title','option'); ?>
            <div class="link-position">
              <a href="<?php the_sub_field('button_link','option'); ?>" class="btn" title="Explore">Explore</a>
            </div>
          </div>

          </div>
        </div>
      <?php endwhile;?>
    </div>
  </div>
</div>
<?php endif;?>
