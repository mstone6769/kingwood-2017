<?php 
  $args = array(
    'post_parent' => 1681,
    'post_type'   => 'page', 
    'numberposts' => -1,
    'order'       => 'ASC',
    'orderby'     => 'menu_order'
  );
  $posts = get_children( $args );


  if( $posts ): ?>
      <ul class="grid grid-3 collapse">
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <li>
          <?php setup_postdata($post); ?>

            <a href="<?php the_permalink(); ?>"  class="card card-with-image">
              <?php the_post_thumbnail(); ?>
              <div>
                <?php the_title( '<h2 class="heading">', '</h2>' ); ?>
                <?php

                    if(get_field('subtitle'))
                    {
                      echo '<p class="subheading">' . get_field('subtitle') . '</p>';
                    }

                ?>
                <span class="fa-stack fa-lg icon" aria-hidden="true">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-arrow-right fa-stack-1x fa-inverse"></i>
                </span>
              </div>
            </a>
          </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
