<?php if( have_rows('sections') ):
      $sc=1;
      while ( have_rows('sections') ) : the_row();

          $file = get_row_layout().'.php';
          include($file);
?>

<?php $sc++;
      endwhile;
      endif; ?>
