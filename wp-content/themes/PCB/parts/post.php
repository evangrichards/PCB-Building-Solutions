<a href="<?php the_permalink(); ?>" class="grid-item ">
  <?php
  $image = get_field('image');
  $size = 'medium';
  $thumb = $image['sizes'][ $size ];

  if( !empty($image) ): ?>
  <div class="img-wrap">
    <div class="overlay">
      <div class="center-wrapper">
        <div class="center">
          <button class="btn">View project</button>
        </div>
      </div>
    </div>
    <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>"/>
  </div>

  <?php endif; ?>
  <h2><?php the_title() ?></h2>
  <p>
    <?php the_field('location');  ?><br />
  </p>
</a>
