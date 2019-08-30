<?php



/* LATEST PROJECTS */

function module_latest_projects($module){
  ?>
<section id="references" class="section">
		<div class="container">
			<h2 class="section__heading">Vår senaste projekt</h2>
			<div class="slider js-slider">
      
  <?php
  $wpb_all_query = new WP_Query(array('post_type'=>'case', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
  <?php if ( $wpb_all_query->have_posts() ) : ?>
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
      <div>
        <a href="<?php the_permalink(); ?>" class="slider__img">
        <img src="<?php the_post_thumbnail_url('square') ?>" alt="">
          
            <span>
            <h4><?php the_title(); ?></h4>  
            <p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p></span>
        </a>
      </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

			</div>
		</div>
	</section>
  <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  <?php
}
