<?php
/* Output a list of tags to link to a tag page full of posts */
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
