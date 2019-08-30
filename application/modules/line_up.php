<?php



/* LINE UP */

function module_line_up($module){
  ?>
  <section id="lineup" class="section section__lineup">
    <div class="container">
    <h2 class="lineup__heading"><?= $module['heading'] ?></h2>
    </div>
    <div class="container">
    <div class="line-up">
        <?php
          foreach($module['artist_info'] as $item){
            ?>
            <div class="artist_item">
              <img class="artist_img" src="<?= $item['artist_img'] ?>" alt="">
              <div class="artist_name"><?= $item['artist_name'] ?></div>
              </div>
            <?php
          }
        ?>
      
    </div>
    </div>
    </section>
  <?php
}
