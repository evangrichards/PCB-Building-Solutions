<?php get_header(); ?>

<?php
$the_query_map = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order' ) );

if($the_query_map->have_posts()) :
while($the_query_map->have_posts()):
$the_query_map->the_post();
$the_ID = get_the_ID();
$get_google_map = get_field('map_location', $value);

$output_map[$the_ID]['map'] = '<div class="marker" data-lat="'.$get_google_map['lat'].'" data-lng="'.$get_google_map['lng'].'"></div>';

endwhile; endif;
wp_reset_postdata();
wp_reset_query();
?>

<section class="c-1 hero map" id="map">
  <div class="acf-map">
    <?php foreach( $output_map as $key => $map_marker ):
            echo $map_marker['map'];
          endforeach; ?>
  </div>
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

      <a href="<?php the_permalink(); ?>" class="grid-item <?php $post_cats = get_the_category();
if ( $post_cats ) {
foreach ( $post_cats as $cat ) {?>
<?php echo $cat->category_nicename;?>
<?php    }} ?>">
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
