<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include('parts/hero.php'); ?>

<main id="content" class="c-1 left">
  <div class="inner">

    <div class="c-1 post-links">
      <div class="c-2">
        <a href="/category/projects/" class="left" title="Back to all projects"><i class="i-arrow-left"></i>Back to all projects</a>
      </div>
      <div class="c-2">
        <?php previous_post_link('%link', '- Previous', TRUE); ?>
        <?php next_post_link('%link', '+ Next', TRUE); ?>
      </div>

    </div>

    <div class="c-2 project-content">
      <h2><?php the_title(); ?></h2>
      <?php the_field('content') ?>

      <div class="meta c-1">
        <h5>Services</h5>
        <p>
          <?php the_tags(' ', ', ', '<br />'); ?>
        </p>
      </div>
      <div class="c-1 meta">
        <h5>Location</h5>
        <p>
          <?php the_field('location'); ?>
        </p>
      </div>
    </div>

    <div class="c-2 project-images">
      <?php if( have_rows('images') ):
          while ( have_rows('images') ) : the_row();?>

          <?php
          $image = get_sub_field('image');
          $alt = $image['alt'];
          if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
          <?php endif; ?>

      <?php endwhile; endif; ?>
    </div>
  </div>

  <?php include('parts/testimonials.php'); ?>
</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
