<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="hero" id="hero">

    <?php if( have_rows('slides') ):?>
     	<div class="rslides">
        <ul class="rslides">
        <?php while ( have_rows('slides') ) : the_row();
        $image = get_sub_field('image'); ?>

          <li class="slide">
            <?php if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <p class="caption"><?php echo $image['alt']; ?> <span><a href="<?php the_sub_field('link'); ?>" class="project-link">View project</a></span></p>
            <?php endif; ?>
          </li>

        <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>

</section>

<div class="page-content c-1">
  <div class="inner">

    <h1>From Planning to Perfection</h1>
    <p>
      More than just builders, <strong>PCB Building Solutions</strong> are an established firm of skilled tradesmen providing bespoke services including home rennovations, barn conversions, land & property searches, project management and much more.
    </p>
    <p>
      <a href="#">How we can help you</a>
    </p>
  </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
