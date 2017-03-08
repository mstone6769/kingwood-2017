<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kingwood-2017
 */

get_header(); ?>


	<div class="hero">
		<div class="hero-content">
			<h1 class="headline">Welcome Home</h1>
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="wrapper">
				<div class="container">
					<div class="grid grid-2">

						<div class="column">
							<h2>Service Information</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales, ligula in tincidunt gravida, libero odio finibus eros, nec congue nisi sem non massa.</p>
							<h3>Service Times</h3>
							<p>Sundays &bull; 9:00am &bull; 10:30am</p>
							<h3>Location</h3>
							<p>100 Harvest Way Alabaster, AL 35007</p>
						</div>
						<div class="column">
							<a href="" class="card shade">
								<img src="http://placehold.it/640x360">
								<h2>Message Name</h2>
							</a>
						</div>
						
					</div>
					<ul class="grid grid-4">
						<li>
						  <a href="" class="card">
						  	<img src="http://placehold.it/640x360">
						  	<h3>What We Believe</h3>
						  </a>
						</li>
						<li>
						  <a href="" class="card">
						  	<img src="http://placehold.it/640x360">
						  	<h3>Kids Programs</h3>
						  </a>
						</li>
						<li>
						  <a href="" class="card">
						  	<img src="http://placehold.it/640x360">
						  	<h3>FAQs</h3>
						  </a>
						</li>
						<li>
						  <a href="" class="card">
						  	<img src="http://placehold.it/640x360">
						  	<h3>Directions</h3>
						  </a>
						</li>
					</ul>
				</div>
			</section>
			<section class="wrapper shade">
				<div class="container">
					
					<div class="grid grid-2">
						<div>
							<a href="" class="card shade">
								<img src="http://placehold.it/640x360">
								<h2>Easter (Next Big Event)</h2>
							</a>
						</div>
						<div>
							<h2>Upcoming Events</h2>
							<ul class="grid grid-2 grid-tight">
								<li>
								  <a href="" class="card">
								  	<h3>Event 1</h3>
								  	<p>Mon, Jan 1, 2017 4:00pm<br>Sanctuary</p>
								  </a>
								</li>
								<li>
								  <a href="" class="card">
								  	<h3>Event 2</h3>
								  	<p>Mon, Jan 1, 2017 4:00pm<br>Sanctuary</p>
								  </a>
								</li>
								<li>
								  <a href="" class="card">
								  	<h3>Event 3</h3>
								  	<p>Mon, Jan 1, 2017 4:00pm<br>Sanctuary</p>
								  </a>
								</li>
								<li>
								  <a href="" class="card">
								  	<h3>Event 4</h3>
								  	<p>Mon, Jan 1, 2017 4:00pm<br>Sanctuary</p>
								  </a>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</section>
			<section class="wrapper">
				<div class="container">
					<h2>Next Steps</h2>
					<ul class="grid grid-4">
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>First Step</h3>
								<p>One-session introductory class</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>Water Baptism</h3>
								<p>Publicly declare yourself for Jesus</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>Life Streams</h3>
								<p>Grow your spiritual life in interactive seminars</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>Life Groups</h3>
								<p>Meet new people. Experience life with a small group</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>30 Serve</h3>
								<p>Try out a ministry for 30 days</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>Go Global</h3>
								<p>Help spread Jesus’ message to all the world</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>Become a Giver</h3>
								<p>Take steps to become a tither</p>
							</a>
						</li>
						<li>
							<a class="card" href="">
								<img src="http://placehold.it/640x360">
								<h3>Need Help?</h3>
								<p>Whatever you are going through, we would like to help you</p>
							</a>
						</li>
					</ul>
				</div>
			</section>
			
			
			<?php
			// while ( have_posts() ) : the_post();

			// 	get_template_part( 'template-parts/content', 'page' );

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;

			// endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
