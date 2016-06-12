<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<title><?php if (is_front_page()){ ?>
    <?php bloginfo('name');?> &#10072; <?php bloginfo('description'); ?>
  <?php } else { ?>
     <?php bloginfo('name');?> &#10072; <?php if (!is_category()){ ?><?php the_title(); ?><?php } else { ?><?php single_cat_title('',true); ?> <?php } ?>  &#10072; <?php bloginfo('description'); ?>
<?php } ?></title>

<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="By Association Only - http://byassociationonly.com" />
<meta name="Copyright" content="Copyright &copy; <?php echo date("Y") ?> By Association Only" />
<link type="text/plain" rel="author" href="<?php bloginfo('template_url'); ?>/humans.txt" />
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<!-- MOBILE -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen" />

<!-- ALL JS AT THE BOTTOM EXCEPT MODERNIZR & TYPEKIT -->
<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="https://use.typekit.net/ius4yqi.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 8]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

<header>
  <div class="inner">
    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="ico logo"><?php bloginfo('name'); ?></a>

    <nav>
      <ul>
        <?php
           wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => 'false',
            'items_wrap' => '%3$s',
            'fallback_cb' => 'wp_page_menu'
            ));
        ?>
      </ul>
    </nav>
    <button id="burger"><i class="i-menu"></i></button>
  </div>
</header>

<div id="wrapper">
