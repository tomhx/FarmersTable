<!-- Template Name: Contact Us
-->

<?php get_header(); ?>

<header>
  <div class="wrapper">

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

<header class="contactus" id="contact">

	<h1>Contact Us</h1>

</header>

<div class="content">

	<div class="formwp">
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	
    	<?php the_content(); ?>

    	<?php endwhile;?>
    </div>

</div> <!-- /,content -->


<?php get_footer(); ?>