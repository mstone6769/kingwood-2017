<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kingwood-2017
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container clear">
      <div class="site-footer-logo">
        <p class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kingwood-logo.svg" alt="Kingwood Church"></a></p>
        
      </div>
      
      <div class="site-footer-menu">
        <div class="menu-footer-container">
          <ul id="footer-menu" class="menu">

            <li 
              class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-36">
              <a href="/about/">About</a>

              <?php

                if (shortcode_exists( 'child-pages' )) {
                  echo do_shortcode( '[child-pages depth="1" sort_column="menu_order" child_of="7"]' );
                }
              ?>

            </li>
            <li>
              <a href="/contact/">Contact Us</a>
              <p>100 Harvest Way<br>Alabaster, AL 35007</p>
              <p>Phone: (205) 663-3933</p>
            </li>
            <li><a href="http://kccdc.com/" onclick="trackOutboundLink('http://kccdc.com/'); return false;">Child Development Center</a></li>
            <li><a href="http://kingwoodchristianschool.com/" onclick="trackOutboundLink('http://kingwoodchristianschool.com/'); return false;">Kingwood Christian School</a></li>
            <li><a href="http://bmmc.net/" onclick="trackOutboundLink('http://bmmc.net/'); return false;">Master's Commission</a></li>

          </ul>
        </div>
        <?php //wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'footer-menu' ) ); ?>
      </div>
    </div>
    <div class="site-info">
      <div class="container">
        <p>Copyright &copy; <?php echo date("Y"); ?> Kingwood Church<span class="sep"> | </span>All Rights Reserved</p>
      </div>
    </div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<svg style="display: none;">
	<circle id="play-button-circle" name="play-button-circle" cx="514.065" cy="504.152" r="477.545"/>
  <polygon id="play-button-triangle" name="play-button-triangle" points="383,510.151 383,318.502 548.696,414.327 714.529,510.151 548.765,605.976 383,701.801 "/>
  <symbol viewbox="0,0 70,100" id="pause-icon">
	  <path d="M0,0 0,100 25,100 25,0z M45,0 45,100 70,100 70,0z" />
  </symbol>
</svg>

<?php wp_footer(); ?>
<?php

    if(get_field('header_image'))
    {
      $image = get_field('header_image') ?>

    <style type="text/css">

      @media(max-width: 799px) {
        .page > .entry-header,
        .site-main > .page-header,
        .entry-header.entry-post  {
          background-image: url('<?php echo $image['sizes']['medium']; ?>');
        }
      }
      @media(min-width: 800px) {
        .page > .entry-header,
        .site-main > .page-header,
        .entry-header.entry-post  {
          background-image: url('<?php echo $image['sizes']['large']; ?>');
        }
      }
    </style>


<?php

    }

?>
<script>
/**
* Function that tracks a click on an outbound link in Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label. Setting the transport method to 'beacon' lets the hit be sent
* using 'navigator.sendBeacon' in browser that support it.
*/

var trackLink = function(url, category, action) {
  if (!category) {
    category = 'outbound';
  }
  if (!action) {
    action = 'click';
  }
   ga('send', 'event', category, action, url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}

var trackOutboundLink = trackLink;

jQuery(document).ready(function () {
	jQuery('a').click(function(){
		var match = jQuery(this).attr('href').match(/^#\S+/);
        if (!match) { return; }
		ga('send', 'pageview', location.pathname + match[0]);
	});
});

function trackAudioPlayer(action) {
  ga('send', 'event', 'audio', action, location.pathname);
}

var audioPlayer = document.querySelector('#entry-audio-player');

var audioTrigger = document.querySelector('#entry-thumbnail');


var playing = false;

function toggleAudio() {
  if (playing) {
    audioPlayer.pause();
    playing = false;
    audioTrigger.classList.remove('playing');
  } else {
    audioPlayer.play();
    playing = true;
    audioTrigger.classList.add('playing');
  }
}



if (audioPlayer) {
  
  audioPlayer.onplay = function() {
    trackAudioPlayer('play');
  };

  audioPlayer.onpause = function() {
    trackAudioPlayer('pause');
  };

  audioPlayer.onended = function() {
    trackAudioPlayer('completed');
  };

}



</script>
<script type="text/javascript">
  var myElement = document.querySelector("#masthead");
  // construct an instance of Headroom, passing the element
  var headroom  = new Headroom(myElement, {
    offset : 200,
    tolerance: 5,
    classes: {
      initial: 'will-pin',
      pinned: 'pinned',
      unpinned: 'unpinned',
      top : 'at-top',
      // when below offset
      notTop : 'not-at-top',
      // when at bottom of scoll area
      bottom : 'at-bottom',
      // when not at bottom of scroll area
      notBottom : 'not-at-bottom'
    }
  });
  // initialise
  headroom.init();
</script>
<?php wp_footer(); ?>
</body>
</html>
