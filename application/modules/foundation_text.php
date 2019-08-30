<?php



/* FOUNDATION TEXT */

function module_foundation_text($module){
  ?>
  <section id="foundation" class="section">
    <div class="container">
    <div class="foundation-block">
    <img class="foundation_img" src="<?php echo get_template_directory_uri(); ?>/images/foundation_icon.png" alt="Avicii foundation icon" width="250">
      <div class="foundation_text"><?= $module['foundation_text'] ?></div>
    </div>
    </div>
  </section>
  <?php
}
