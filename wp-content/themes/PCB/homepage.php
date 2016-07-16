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

          <?php if( !empty($image) ): ?>
          <li class="slide bg-image" style="background-image: url('<?php echo $image['url']; ?>');">

              <p class="caption"><?php echo $image['alt']; ?> <span><a href="<?php the_sub_field('link'); ?>" class="project-link">View project</a></span></p>

          </li>
          <?php endif; ?>

        <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>

</section>

<div id="content" class="c-1">
  <div class="inner">
    <section class="c-1">
      <h1>From Planning to Perfection</h1>
      <p>
        More than just builders, <strong>PCB Building Solutions</strong> are an established firm of skilled tradesmen providing bespoke services including home rennovations, barn conversions, land & property searches, project management and much more.
      </p>
      <p>
        <a href="#">How we can help you</a>
      </p>
    </section>

  </div>

  <?php include('parts/testimonials.php'); ?>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
