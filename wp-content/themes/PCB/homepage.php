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

<main id="content" class="c-1 left">

  <section class="intro c-1">
    <div class="inner">
      <?php the_field('intro'); ?>
    </div>
  </section>

  <section class="projects">
    <div class="inner grid">
      <?php
        $exclude = get_the_ID();
        $temp = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query('posts_per_page=8');
        while ($wp_query->have_posts()) : $wp_query->the_post();
        if( $exclude != get_the_ID() ) {
      ?>

      <?php include('parts/post.php'); ?>

      <?php } endwhile;?>
      <?php $wp_query = null; $wp_query = $temp; wp_reset_query();?>
    </div>
  </section>

  <?php include('parts/page-links.php'); ?>
  <?php include('parts/testimonials.php'); ?>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
