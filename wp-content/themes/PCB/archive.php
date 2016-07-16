<?php get_header(); ?>

<section class="c-1 hero map">
  Map here
</section>

<main id="content" class="c-1 left">
  <div class="inner">
    <div class="c-1 filters post-links">
      <ul>
        <li>
          <strong>Project Type:</strong>
        </li>
        <?php
        $tags = get_tags();
        if ( $tags ) {
          foreach ( $tags as $tag ) {
            echo '<li>';

            if ( (int) $tag->term_id === get_queried_object_id() )
                echo "<b>$tag->name</b>";
            else
                printf(
                    '<a href="%1$s">%2$s</a>',
                    get_tag_link( $tag->term_id ),
                    $tag->name
                );

            echo '</li>';
          }
        }
        ?>
      </ul>
    </div>
    <div class="c-1 grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="grid-item <?php $tags = get_tags(); foreach ( $tags as $tag ) { $html = "{$tag->slug} "; echo $html; } ?>">
        <?php
        $image = get_field('image');
        $size = 'medium';
        $thumb = $image['sizes'][ $size ];

        if( !empty($image) ): ?>
          <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>"/>
        <?php endif; ?>
        <h2><?php the_title() ?></h2>
        <p>
          <?php the_field('location');  ?><br />
        </p>
      </a>

    <?php endwhile; endif; ?>

    </div>

  </div>
</main>

<?php get_footer(); ?>
