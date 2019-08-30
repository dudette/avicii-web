<?php



/* SERVICE */

function module_service($module){
  ?>
	<section id="services" class="section section--grey">
		<div class="container">
			<h2 class="section__heading"><?= $module['heading'] ?></h2>
			<div class="icon-group">
				<div class="icon-group__item">
					<span class="icon-group__circle">
						<img class="icon-group__icon" src="<?php echo get_template_directory_uri(); ?>/images/renovering.svg" alt="Kugghjul" width="55">
					</span>
					<h3 class="icon-group__heading">Renovering</h3>
					<?= $module['img_text_one'] ?>
				</div>
				<div class="icon-group__item">
					<span class="icon-group__circle">
						<img class="icon-group__icon" src="<?php echo get_template_directory_uri(); ?>/images/nybygge.svg" alt="Nybyggt hus" width="55">
					</span>
					<h3 class="icon-group__heading">Nybygge</h3>
					<?= $module['img_text_two'] ?>
				</div>
				<div class="icon-group__item">
					<span class="icon-group__circle">
						<img class="icon-group__icon" src="<?php echo get_template_directory_uri(); ?>/images/utbyggnad.svg" alt="Hus med utbyggnad" width="70">						
					</span>
					<h3 class="icon-group__heading">Tillbyggnad</h3>
					<?= $module['img_text_three'] ?>
				</div>
			</div>
		</div>
	</section>

  <?php
}
