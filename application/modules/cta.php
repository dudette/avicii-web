<?php



/* CTA */

function module_cta($module){
  ?>
    <div class="cta">
		<div class="container">
			<h2><?= $module['text'] ?></h2>
			<a href="mailto:<?= $module['button_link'] ?>" class="btn"><?= $module['button_text'] ?></a>
		</div>
	</div>
  <?php
}
