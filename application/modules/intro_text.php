<?php



/* INTRO TEXT */

function module_intro_text($module){
  ?>

<section id="about" class="section">
		<div class="container">
			<h2 class="section__heading"><?= $module['heading'] ?></h2>
			<?= $module['text'] ?>
		</div>
  </section>
  <?php
}
