<!-- Template Name: About Us 
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

<header class="ourstory" id="story">

	<h1>Our Story</h1>

</header>

<div class="content">

	<div class="wrapper">
	
		<div class="teammembers">

			<div class="pic1">
				<img src="<?php echo get_template_directory_uri()?>/images/teamguy1-min.jpg" alt="Portrait image of a founding team member">
				<div class="bio">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ipsa optio eum? Exercitationem earum consequatur tempora architecto quaerat reprehenderit voluptas rem, quos porro cupiditate temporibus animi, totam molestiae, aliquid similique. Esse autem ratione nesciunt nam doloribus animi quo tempora porro, cupiditate molestiae minus dolorum beatae totam, ducimus alias minima maxime.</p>
				</div>
			</div>

			<div class="pic2">
				<img src="<?php echo get_template_directory_uri()?>/images/teamguy2-min.jpg" alt="Portrait image of a founding team member">
				<div class="bio">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, esse! Accusantium molestiae praesentium alias sint libero, nisi necessitatibus repellat repellendus dolorum porro dolores ab eos adipisci quisquam officiis laborum delectus.</p>
				</div>
			</div>

			<div class="pic3">
				<img src="<?php echo get_template_directory_uri()?>/images/teamwoman1-min.jpg" alt="Portrait image of a founding team member">
				<div class="bio">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro laboriosam, quibusdam vel, sunt aliquam, temporibus quia quam a quod repudiandae, veniam. </p><p>Voluptas delectus reiciendis, harum, fugit doloremque velit laborum enim dolor impedit sunt officia quo doloribus, atque ad. Alias possimus sapiente aliquid? Repudiandae, ea laudantium!</p>
				</div>
			</div>

		</div> <!-- end of teammembers div -->

	</div> <!-- end of div wrapper -->

</div> <!-- end of content div -->



<?php get_footer(); ?>













