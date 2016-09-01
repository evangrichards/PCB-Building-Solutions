<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include('parts/hero.php'); ?>

<main id="content" class="c-1 left">

  <div class="page-content">
    <section class="grey-content c-1">
      <div class="inner">
        <div class="position-me">
          <div id="fixed">

            <div class="inside-left">
              <p><strong>Mobile:</strong></p>
              <?php if (get_field('secondary_telephone','option')) {?>
              <p><strong>Landline:</strong></p>
              <?php } ?>
              <p><strong>Email:</strong></p>
            </div>

            <div class="inside-right">
              <p><a href="tel:<?php the_field('primary_telephone', 'option'); ?>" class="tel" title="Call today for your free quote"><?php the_field('primary_telephone', 'option'); ?></a></p>
              <?php if (get_field('secondary_telephone','option')) {?>
                <p><a href="tel:<?php the_field('secondary_telephone', 'option'); ?>" class="tel" title="Call today for your free quote"><?php the_field('secondary_telephone', 'option'); ?></a></p>
              <?php } ?>
              <p><a href="mailto:<?php the_field('email_address', 'option'); ?>" title="Email us today for your free quote"><?php the_field('email_address', 'option'); ?></a></p>
            </div>

            <?php if (get_field('disclaimer')) {?>
              <div class="c-1 disclaimer">
                <?php the_field('disclaimer'); ?>
              </div>
            <?php } ?>

          </div>
          <div id="fluid">
            <?php the_field('right_column'); ?>
            <div id="thankYou">
              <h1>Success!</h1>
              <p>
                Thank you for sending us your details.<br/>
                One of the team will be in touch with you shortly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include('parts/testimonials.php'); ?>

</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
