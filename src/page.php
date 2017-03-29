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

get_header(); 

if (is_front_page()) { ?>
<div class="hero">
		<?php if (shortcode_exists( 'simple-slider' )) : do_shortcode( '[simple-slider]' ); endif; ?>

		<div class="pic-shade"></div>
		<div class="hero-content">
			<h1 class="headline"><?php

					if(get_field('hero_headline'))
					{
						echo get_field('hero_headline');
					}

			?></h1>
			
			<?php

					if(get_field('hero_text'))
					{
						echo get_field('hero_text');
					}

			?>

		</div>
		<a href="#main" class="arrow bounce"><?php esc_html_e( 'Next Section', 'kingwood-2017' ); ?></a>
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="wrapper">
				<div class="container">
					<div class="grid grid-2">

						<div class="column">
							<a href="" class="card shade">
								<img src="/wp-content/themes/kingwood-2017/images/i-am.jpg">
								<h2><span>Latest Message:</span> I AM the Gate</h2>
							</a>
						</div>

						<div class="column">
							<h2 class="section-header"><?php

					if(get_field('service_info_headline'))
					{
						echo get_field('service_info_headline');
					}

			?></h2>
						<?php

					if(get_field('service_info_text'))
					{
						echo get_field('service_info_text');
					}

			?>
							
						</div>
						
						
					</div>
					<ul class="grid grid-4">
						<li>
						  <a href="" class="card card-with-image">
						  	<img src="/wp-content/themes/kingwood-2017/images/what-we-believe.jpg">
						  	<h3>What We Believe</h3>
						  </a>
						</li>
						<li>
						  <a href="" class="card card-with-image">
						  	<img src="/wp-content/themes/kingwood-2017/images/kids.jpg">
						  	<h3>Children's Programs</h3>
						  </a>
						</li>
						<li>
						  <a href="" class="card card-with-image">
						  	<img src="/wp-content/themes/kingwood-2017/images/faq.jpg">
						  	<h3>FAQs</h3>
						  </a>
						</li>
						<li>
						  <a href="" class="card card-with-image">
						  	<img src="/wp-content/themes/kingwood-2017/images/directions.jpg">
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
							<h2 class="section-header"><a href="">Upcoming Events</a></h2>
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
							<a href="" class="cta-link">See all</a>
						</div>
						<div>
							<a href="" class="card shade">
								<img src="/wp-content/themes/kingwood-2017/images/easter.jpg">
								<h2>Sunday, April 16</h2>
							</a>
						</div>
					</div>
					
				</div>
			</section>
			<section class="wrapper cta-wrapper">
				<div class="container">
					<h2 class="text-center section-header">Next Steps</h2>
					<p class="text-center section-subheader">If you take the next step that God gives you, you will end up where you are supposed to go</p>
					<div class="grid grid-4 collapse">
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-first-step" /></svg>
							<h3>First Step</h3>
							<p>One-session introductory class</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
						  <svg class="icon"><use xlink:href="#icon-baptism" /></svg>
							<h3>Baptism</h3>
							<p>Publicly declare yourself for Jesus</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-life-streams" /></svg>
							<h3>Life Streams</h3>
							<p>Grow your spiritual life in interactive seminars</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-life-groups" /></svg>
							<h3>Life Groups</h3>
							<p>Meet new people. Experience life with a small group</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-30-serve" /></svg>
							<h3>30 Serve</h3>
							<p>Try out a ministry for 30 days</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-missions" /></svg>
							<h3>Support Missions</h3>
							<p>Help spread Jesus’ message to all the world</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-give" /></svg>
							<h3>Become a Giver</h3>
							<p>Take steps to become a tither</p>
						</a>
						<a
						  href=""
						  class="card card-centered card-icon">
							<svg class="icon"><use xlink:href="#icon-help" /></svg>
							<h3>Need Help?</h3>
							<p>Whatever you are going through, we would like to help you</p>
						</a>
					</div>
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

	<script type="text/javascript">
		'use-strict';



		var makeSlideshow = function( slideshowContainer, interval ) {
		  
		  var elements = {
		    container: slideshowContainer,
		    slides: slideshowContainer.getElementsByTagName('li')
		  };
		  
		  elements.slidesLength = elements.slides.length;
		    
		  var indexes = {
		    current: 0
		  };

		  for (i = 0; i < elements.slides.length; i++) {
		  	var image = elements.slides[i].querySelector('img');
		  	var imageSource = image.getAttribute('src');
		  	image.style.display = 'none';
		  	elements.slides[i].style['backgroundImage'] = 'url(\'' + imageSource + '\')';

		  }

		  var getClass = function ( element ) {
		    return element.getAttribute && element.getAttribute( 'class' ) || '';
		  };

		  var addClass = function ( element, cssClass ) {
		    var currentValue, newValue, finalValue;

		    currentValue = getClass(element);
		    newValue = currentValue + ' ' + cssClass + ' ';

		    finalValue = newValue.replace(/  +/g, ' ').trim();

		    element.setAttribute( 'class', finalValue );

		    return element;
		  };

		  var removeClass = function ( element, cssClass ) {
		    var currentValue, newValue, finalValue;

		    currentValue = getClass(element);
		    newValue = (' ' + currentValue + ' ').replace( cssClass, ' ' ).replace(/  +/g, ' ');

		    finalValue = newValue.trim();

		    element.setAttribute( 'class', finalValue );

		    return element;
		  };
		  
		  if (elements.slidesLength > 1 ) {
		    indexes.next = 1;
		    indexes.previous = elements.slidesLength-1;
		    indexes.old = {
		      previous: 0,
		      next: 0,
		      current: (elements.slidesLength - 1)
		    };
		    if (elements.slidesLength === 2) {
		      addClass(elements.slides[0], 'slide-toggle slide-previous');
		      addClass(elements.slides[1], 'slide-toggle');
		    } else {
		      addClass(elements.slides[0], 'slide-current');
		      addClass(elements.slides[1], 'slide-next');
		    }

		    
		    setInterval(function(){

		      if (elements.slidesLength === 2) {
		       if (indexes.current === 1) {
		        addClass(elements.slides[1], 'slide-toggle-on');
		       } else {
		        removeClass(elements.slides[1], 'slide-toggle-on');
		       }
		       
		       indexes.current = (indexes.current === 0) ? 1 : 0;
		      } else {

		        indexes.old = {
		          previous: indexes.previous,
		          current: indexes.current,
		          next: indexes.next
		        };
		        indexes.previous = indexes.current;
		        indexes.current = indexes.next;
		        indexes.next = (indexes.current === (elements.slidesLength - 1)) ? 0 : (indexes.current + 1);

		        addClass(elements.slides[indexes.previous], 'slide-previous');
		        addClass(elements.slides[indexes.current], 'slide-current');
		        addClass(elements.slides[indexes.next], 'slide-next');

		        removeClass(elements.slides[indexes.old.previous], 'slide-previous');
		        removeClass(elements.slides[indexes.old.current], 'slide-current');
		        removeClass(elements.slides[indexes.old.next], 'slide-next');
		      }
		     
		    }, interval);
		  }
		  
		};
		var startSlideshows = function() {
		  var slideshows = document.querySelectorAll('.slideshow');

		  for (i = 0; i < slideshows.length; i++) {
		    var interval = slideshows[i].getAttribute('data-slideshow-interval');
		    makeSlideshow(slideshows[i], (interval) ? interval : 2000);
		  }
		};
		startSlideshows();
	</script>


<?php 
 // if standard page
} else {

?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

	get_sidebar();
}
get_footer();
