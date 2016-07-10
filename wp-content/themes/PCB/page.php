<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include('parts/hero.php'); ?>

<main id="content" class="c-1 left">

    <?php include('parts/layouts.php'); ?>
    <?php include('parts/page-links.php'); ?>
    <?php include('parts/testimonials.php'); ?>

</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
