<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<header>
  <div class="wrapper">

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

<header class="news" id="news">

	<h1>News & Recipes</h1>
	
</header>

<div class="blogarea">

	<div class="side"><?php get_sidebar(); ?></div>

    <div class="blogpieces"><?php get_template_part( 'loop', 'index' );	?></div>

</div>

<?php get_footer(); ?>