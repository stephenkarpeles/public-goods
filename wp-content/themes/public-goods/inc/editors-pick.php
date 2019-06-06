<!-- Editor's Picks -->
<?php 

  $editorposts = get_posts(array(
    'meta_query' => array(
      array(
        'key' => 'editors_pick_post',
        'compare' => '=',
        'value' => '1'
      )
    )
  ));

  if( $editorposts ): ?>
    
    <div class="featured-block">
      <h2 class="featured-block__heading">
        Editor's Pick
      </h2>
      
    <?php foreach( $editorposts as $post ): 
      
      setup_postdata( $post )
      
      ?>
      <div class="featured-block__image">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </a>
      </div>
      <div class="featured-block__content">   
        <h3 class="featured-block__secondary-heading">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="featured-block__blurb">
          <?php
            echo wp_trim_words( get_the_content(), 15, '.' );
          ?>
        </p>
        <a class="featured-block__link" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    
    <?php endforeach; ?>
    
    </div>
    
    <?php wp_reset_postdata(); ?>

  <?php endif; ?>