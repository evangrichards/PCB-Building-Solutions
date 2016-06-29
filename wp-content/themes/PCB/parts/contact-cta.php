<div class="contact-cta c-1">
  <div class="left">
    <a href="/contact" class="btn">Make an enquiry</a>
  </div>

  <div class="call-us left">
    <p>
      <em>or call</em>
      </br/>
      <a href="tel:<?php the_field('primary_telephone', 'option'); ?>" class="tel" title="Call today for your free quote"><?php the_field('primary_telephone', 'option'); ?></a><?php if (get_field('secondary_telephone','option')) {?> / <a href="tel:<?php the_field('secondary_telephone', 'option'); ?>" class="tel" title="Call today for your free quote"><?php the_field('secondary_telephone', 'option'); ?></a><?php } ?>
    </p>
  </div>

</div>
