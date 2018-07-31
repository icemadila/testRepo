<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta <?php bloginfo('charset') ?>>
	<?php wp_header(); ?>
</head>
<body <?php body_class(); ?>>
<nav>
	<ul class="nav navbar-nav navbar-right">
		<li></li>
	</ul>
</nav>
	<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post() ?>
 		<h2><?php the_title(); ?></h2>
    	<?php the_content(); ?>
    <?php endwhile; ?>
   <?php endif; ?>

   <?php wp_footer(); ?>
</body>
</html>