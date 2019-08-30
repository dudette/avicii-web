<?php



/* CASE ITEM */

function module_case_item($module){
  global $post; 
  ?>
	<article class="article">
		<div class="container">
			<section class="article__section">
				<img class="article__img" src="<?= $module['main_img'] ?>" alt="">
				<div class="article__text">
        <?= $module['text'] ?>
				</div>
			</section>
			<section class="article__section">
      <?php
          foreach($module['gallery_images'] as $item){
            ?>
            <img class="article__img--small" src="<?= $item['additional_images'] ?>" alt="">
              
            <?php
          }
        ?>
			</section>
		</div>
  </article>
  
  <?php

$wpb_all_query = new WP_Query(array('post_type'=>'case', 'category__in'=> wp_get_post_categories( $post->ID ), 'post__not_in'=> array( $post->ID ), 'post_status'=>'publish', 'posts_per_page'=>4)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
  <section class="section">
		<div class="container">
			<h2 class="section__heading">Liknande projekt</h2>
      <ul class="slider slider--nobtns">
      
          <!-- the loop -->
          <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          
          <li class="slider__item">
              <a href="<?php the_permalink(); ?>" class="slider__img">
              <img src="<?php the_post_thumbnail_url() ?>" alt="">          
              <span>
              <h4><?php the_title(); ?></h4>
              <p> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
              </span>
            </a>
          </li>
          <?php endwhile; ?>
          <!-- end of the loop -->
      </ul>
    </div>
	</section>
  <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<?php
}
