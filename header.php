<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Allye Vice is a front-end web developer based in Toronto.">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--
Thanks for visiting! If you like my projects and would like to work together, feel free to reach out using the contact form at the bottom of the page, or at hello@allyevice.com.
- Allye
-->
  <?php get_template_part('nav'); ?>
  <header>
    <div class="half"></div>
    <div class="shape fadeInLeft animated"></div>
    <div class="headerText fadeInUp animated">
      <h1>
        <a class="clip" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <h6>
        <?php bloginfo('description'); ?>
      </h6>
    </div><!-- .headerText -->
  </header>

