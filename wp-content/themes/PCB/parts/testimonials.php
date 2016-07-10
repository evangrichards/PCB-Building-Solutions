<section class="c-1" id="testimonials">
  <div class="inner">
    <?php if( have_rows('testimonials','option') ):?>
      <div class="rslides">
        <ul class="rslides">
        <?php while ( have_rows('testimonials','option') ) : the_row(); ?>

          <li class="slide">
            <blockquote>
              <?php the_sub_field('testimonial','option'); ?>
            </blockquote>
            <p><?php the_sub_field('name','option'); ?></p>
          </li>

        <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section>
