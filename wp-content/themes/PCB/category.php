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
      <button class="filter-toggle btn">Filter</button>
      <ul class="filter-list">
        <li>
          <strong>Project Type:</strong>
        </li>
        <?php
           wp_nav_menu( array(
            'theme_location' => 'category-menu',
            'container' => 'false',
            'items_wrap' => '%3$s',
            'fallback_cb' => 'wp_page_menu'
            ));
        ?>
      </ul>
    </div>

    <div class="c-1 grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php include('parts/post.php'); ?>

    <?php endwhile; endif; ?>

    </div>

  </div>
</main>

<?php get_footer(); ?>
