<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include('parts/hero.php'); ?>

<main id="page-content" class="c-1">
  <div class="inner">
    <?php include('parts/layouts.php'); ?>
  </div>
</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
