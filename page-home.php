<!--  Template name: Home Page 
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

<section class="hello">
	
	<div class="top">
	
		<h1>The Farmers Table</h1>
		<p>Delivering quality food from our family to yours.</p>

	</div>
		
	<img src="<?php the_field('header_image'); ?>" class="hellopicture"> 



</section>

<section class="featured">

	<div class="wrapper">

		<h2>Featured Items</h2>
		
			<div class="basket clearfix">
					
					<div class="vegdealleft">

						<div class="basketimage"><img src="<?php the_field('monthly_image'); ?>"></div>

					</div>

					<div class="vegdealright">
						<h3>Vegetable Basket</h3>
						<p class="green">$23.00 per basket</p>
						<ul>
							<li>lorem ipsum lorem</li>
							<li>lorem ipusm itis morem</li>
							<li>signa lorem itil phaf</li>
						</ul>
						<p>CATEGORIES: Vegetable</p>
						<p>EXPIRY DATE: <span class="orange">18/02/2016</span></p>
					</div>


			</div>

	</div>

</section>

<section class="quote">
	
		<h3><?php the_field('quote'); ?><h3>

		<h4>- <?php the_field('quote_author'); ?><h4>

</section>


<?php get_footer(); ?>



<!-- CREDITS -->

<!-- Hero image from Unsplash - Jazzmin Quaynor

Favicon by João Proença from The Noun Project 